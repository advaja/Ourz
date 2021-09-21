var findPropertyData = [];

function showPropertyModal(index){

    $("#propertyIDModal1").html(propertyData3[index].propertyID)
    $("#propertyNameModal1").html(findPropertyData[index].owner_name)
    $("#propertyDescriptionModal1").html(findPropertyData[index].description)
    $("#propertyPeopleModal1").html(findPropertyData[index].peoples)
    $("#propertyRateModal1").html(findPropertyData[index].rate)
    $("#imagePath11Modal").attr("src","https://ourz-spaces.herokuapp.com/"+propertyData3[index].imagePath1);
    $("#imagePath12Modal").attr("src","https://ourz-spaces.herokuapp.com/"+propertyData3[index].imagePath2);
    $("#imagePath13Modal").attr("src","https://ourz-spaces.herokuapp.com/"+propertyData3[index].imagePath3);
    $("#imagePath14Modal").attr("src","https://ourz-spaces.herokuapp.com/"+propertyData3[index].imagePath4);
    //$("#propertyPayment1Btn").attr("href", "payment.php?propertyID="+propertyData3[index].propertyID)

    $("#showResultModal1").modal('show')
}

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
            },
            peoples: {
                required: true,
            },
            rate: {
                required: true,
            }
        },
        messages: {
            city: "Please select city",
            dateRangePicker: "Please select date",
            startTimePicker: "Please select time",
            endTimePicker: "Please select time",
            peoples: "Please enter number of people",
            rate: "Please enter hourly rate"
        },
        submitHandler: function () {

            $.ajax({
                type: 'POST',
                url: 'https://ourz-spaces.herokuapp.com/property/find',
                data: {
                    street: $("#street").val(),
                    street_number: $("#street_number").val(),
                    city: $("#city").val(),
                    startDate: $("#dateRangePicker").data('daterangepicker').startDate.format('YYYY-MM-DD'),
                    endDate: $("#dateRangePicker").data('daterangepicker').endDate.format('YYYY-MM-DD'),
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
                            result += `<div class="col-md-6 mb-3">

                            <div class="row">
                              <div class="col-6">
                                <p class="section9-p-bold mb-2">` + data[index].owner_name + `</p>
                                <p class="section9-p mb-2">` + data[index].description + ` </p>
                                <p class="section9-p-bold mb-2">` + data[index].peoples + ` guests</p>
                                <a  onclick="showPropertyModal(`+index+`)" class="btn text-white custom-btn">Book for
                                ` + data[index].rate + `$/Hour</a>
                              </div>
                              <div class="col-6">
                                <img class="section9-img" src="https://ourz-spaces.herokuapp.com/`+data[index].imagePath1+`" alt="">
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

    })

    $(document).on("click", "#searchAgainBtn", function () {
        $("#find_office_div").show()
        $("#find_result_div").hide()
    })
})