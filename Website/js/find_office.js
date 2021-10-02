var findPropertyData = [];
var host = "https://ourz-spaces.herokuapp.com";

function showPropertyModal(propertyID, totalHours){
    location.href= "payment.php?propertyID="+propertyID+"&totalHours="+totalHours
  
}

$('#startTimePicker').timepicker({
    timeFormat: 'HH:mm:ss',
});

  $('#endTimePicker').timepicker({
    timeFormat: 'HH:mm:ss',
});

  $('#dateRangePicker').daterangepicker({
    minDate:new Date(),
    autoUpdateInput: false,
    locale: {
      cancelLabel: 'Clear'
    }
  });

  $('#dateRangePicker').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('#dateRangePicker').on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
  });
$(document).ready(function () {

    

    $("#propertyPayment1Btn").click(function(){
        if($("#room_hours_needed1").val() > 0){
            location.href= "payment.php?propertyID="+$("#propertyIDModal1").html()+"&totalHours="+$("#room_hours_needed1").val()
        }else{
            toastr.error('Please enter hours!');
        }
    })

    $("form[id='findPropertyForm']").validate({
        rules: {
            city: {
                required: true,
            },
            dateRangePicker: {
                required: true,
            },
            startTimePicker: {
                required: true,
            },
            endTimePicker: {
                required: true,
            }/*,
            peoples: {
                required: true,
            },
         	rate: { 
              required: true
            }*/
        },
        messages: {
            city: "Please select city",
            dateRangePicker: "Please select date",
            startTimePicker: "Please select time",
            endTimePicker: "Please select time"/*,
            peoples: "Please enter number of people",
          	rate: "Please enter your rate"*/
            
        },
        submitHandler: function () {
  
            var duration = moment.duration(moment("01/01/2007 " + $("#endTimePicker").val()).diff(moment("01/01/2007 " + $("#startTimePicker").val())));
            var hours = duration.asHours();

            if(hours <= 0){
                toastr.error('Start Time Should be less then the end time');
            }else{
                if($("#dateRangePicker").val()){
                    var startDateVal = $("#dateRangePicker").data('daterangepicker').startDate.format('YYYY-MM-DD');
                    var endDateVal = $("#dateRangePicker").data('daterangepicker').endDate.format('YYYY-MM-DD');
                }else{
                    var startDateVal = "";
                    var endDateVal = "";
                }
                $.ajax({
                    type: 'POST',
                    url: host+'/property/find',
                    data: {
                        street: $("#street").val(),
                        street_number: $("#street_number").val(),
                        city: $("#city").val(),
                        startDate: startDateVal,
                        endDate: endDateVal,
                        time1: $("#startTimePicker").val(),
                        time2: $("#endTimePicker").val(),
                        peoples: $("#peoples").val(),
                        rate: $("#rate").val(),
                    },
                    success: function (data) {
    
                        if (data.length) {
                            findPropertyData = data;
    
                            var result = "";
    
                            var locations = [];
    
                            for (let index = 0; index < data.length; index++) {
    
                                locations.push([
                                    data[index].address,
                                    data[index].lat,
                                    data[index].lng,
                                    index
                                ])
    
                                var duration = moment.duration(moment("01/01/2007 " + $("#endTimePicker").val()).diff(moment("01/01/2007 " + $("#startTimePicker").val())));
                                var hours = duration.asHours();
    
                                var duration = moment.duration(moment(endDateVal).diff(moment(startDateVal)));
                                var days = duration.asDays();
                                
                                if(days){
                                    var totalHours = hours*days;
                                }else{
                                    var totalHours = hours;
                                }
    
                                result += `<div class="col-md-6 mb-3">
    
                                <div class="row">
                                  <div class="col-6">
                                    <p class="section9-p-bold mb-2">` + data[index].owner_name + `</p>
                                    <p class="section9-p mb-2">` + data[index].description + ` </p>
                                    <p class="section9-p-bold mb-2">Date: ` + startDateVal + ` - ` + endDateVal + `</p>
                                    <p class="section9-p-bold mb-2">Time: ` + $("#startTimePicker").val() + ` - ` + $("#endTimePicker").val() + `</p>
                                    <p class="section9-p-bold mb-2">` + data[index].peoples + ` guests</p>
                                    <p class="section9-p-bold mb-2">Total Hours: ` + totalHours + ` Hours</p>`;
                                    if(data[index].isBooked){
                                        result += `<p class="section1-p-bold" style="color: red;">Already Booked</p>`;
                                    }else{
                                        result += `<a  onclick="showPropertyModal(`+data[index].propertyID+`,`+totalHours+`)" class="btn text-white custom-btn">Book for
                                        ` + data[index].rate + `$/Hour</a>`;
                                    }
                                  result += `</div>
                                  <div class="col-6">
                                    <img class="section9-img" src="`+host+`/`+data[index].imagePath1+`" alt="">
                                  </div>
                                </div>
                              </div>`;
    
                            }
    
                            $("#findpropertyResult").html(result)
                            $("#map").show();
                            
                              var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 7,
                                center: new google.maps.LatLng(31.0461, 34.8516),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                              });
                            
                              var infowindow = new google.maps.InfoWindow();
                            
                              var marker, i;
                            
                              for (i = 0; i < locations.length; i++) {  
                                marker = new google.maps.Marker({
                                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                  map: map
                                });
                            
                                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                  return function() {
                                    infowindow.setContent(locations[i][0]);
                                    infowindow.open(map, marker);
                                  }
                                })(marker, i));
                              }
                        } else {
                            $("#map").hide();
                            $("#findpropertyResult").html(`<div style="text-align: center;"><h3 style="text-align: center;">No result found!</h3>
                            <button type="button" id="searchAgainBtn" class="btn btn-primary custom-btn mb-3 mt-5" style="width: 380px;">SEARCH</button></div>`)
                        }
    
                        $("#find_office_div").hide()
                        $("#find_result_div").show()
                    },
                    error: function (data) {
                        console.log(data)
                        toastr.error('Something went wrong.Please check the browser console for the error!');
                    }
                });
            }


        }

    })

    $(document).on("click", "#searchAgainBtn", function () {
        $("#find_office_div").show()
        $("#find_result_div").hide()
    })
})