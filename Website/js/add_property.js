var address = {};

var host = "https://ourz-spaces.herokuapp.com";


$("#uploadDesign1").click(function (e) {
    $("#imageUpload1").click();
});

$("#uploadDesign2").click(function (e) {
    $("#imageUpload2").click();
});

$("#uploadDesign3").click(function (e) {
    $("#imageUpload3").click();
});

$("#uploadDesign4").click(function (e) {
    $("#imageUpload4").click();
});

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

function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */
        (document.getElementById('autocomplete')), {
            types: ['geocode'],
            componentRestrictions: {
                country: "il"
            }
        });

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();

    console.log(place)

    var addressObj = place.address_components;

    address.address = place.formatted_address

    addressObj.forEach(function (component) {
        var types = component.types;

        if (types.indexOf('street_number') > -1) {
            address.street_number = component.long_name;
            $("#street_number").val(component.long_name)
        }

        if (types.indexOf('route') > -1) {
            address.street = component.long_name;
            $("#street").val(component.long_name)
        }

        if (types.indexOf('locality') > -1) {
            address.city = component.long_name;
        }

        if (types.indexOf('administrative_area_level_1') > -1) {
            address.state = component.short_name;
        }

        if (types.indexOf('postal_code') > -1) {
            address.zip = component.long_name;
        }
    });


    address.lat = place.geometry.location.lat();
    address.lng = place.geometry.location.lng();
}

function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}
var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showImage1');
      output.src = reader.result;
      $("#showImage1").show();
      $("#uploadImageDiv1").hide();
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showImage2');
      output.src = reader.result;
      $("#showImage2").show();
      $("#uploadImageDiv2").hide();
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showImage3');
      output.src = reader.result;
      $("#showImage3").show();
      $("#uploadImageDiv3").hide();
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  var loadFile4 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showImage4');
      output.src = reader.result;
      $("#showImage4").show();
      $("#uploadImageDiv4").hide();
    };
    reader.readAsDataURL(event.target.files[0]);
  };


$(document).ready(function () {

   

    $("form[id='propertyForm']").validate({
        rules: {
            owner_name: {
                required: true,
            },
            street: {
                required: true,
            },
            street_number: {
                required: true
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
            },
            owner_phone: {
                required: true,
            },
            description: {
                required: true,
            },
            imageUpload1: {
                required: true,
            }/*,
            imageUpload2: {
                required: true,
            },
              imageUpload3: {
                required: true,
            },
            imageUpload4: {
                required: true,
            }*/
        },
        messages: {
            owner_name: "Please enter owner name",
            street: "Please enter street",
            street_number: "Please enter street number",
            dateRangePicker: "Please select date",
            startTimePicker: "Please select time",
            endTimePicker: "Please select time",
            peoples: "Please enter number of people",
            rate: "Please enter hourly rate",
            owner_phone: "Please enter phone number",
            description: "Please enter description",
            imageUpload1: "Please upload a photo"/*,
            imageUpload2: "Please upload a photo",
            imageUpload3: "Please upload a photo",
            imageUpload4: "Please upload a photo"*/
        },
        submitHandler: function () {

            if (address.city && address.lat) {

                var data = new FormData();

                data.append("owner_name", $("#owner_name").val());
                data.append("street", $("#street").val());
                data.append("street_number", $("#street_number").val());
                data.append("address", address.address);
                data.append("city", address.city);
                data.append("lat", address.lat);
                data.append("lng", address.lng);
                data.append("startDate", $("#dateRangePicker").data('daterangepicker').startDate.format('YYYY-MM-DD'));
                data.append("endDate", $("#dateRangePicker").data('daterangepicker').endDate.format('YYYY-MM-DD'));
                data.append("time1", $("#startTimePicker").val());
                data.append("time2", $("#endTimePicker").val());
                data.append("peoples", $("#peoples").val());
                data.append("rate", $("#rate").val());
                data.append("phone", $("#owner_phone").val());
                data.append("description", $("#description").val());

                data.append("imageUpload1", document.getElementById('imageUpload1').files[0]);
                data.append("imageUpload2", document.getElementById('imageUpload2').files[0]);
                data.append("imageUpload3", document.getElementById('imageUpload3').files[0]);
                data.append("imageUpload4", document.getElementById('imageUpload4').files[0]);

                if (localStorage.getItem("userID")) {
                    $.ajax({
                        type: 'POST',
                        contentType: false,
                        processData: false,
                        url: host+'/property/add',
                        data: data,
                        success: function (data) {
                            if (data) {
    
                                if (data.affectedRows) {
    
                                    toastr.success("Your space has been added");
    
                                    $("#shareSpaceModal").modal('show')
    
                                } else {
                                    toastr.error("Space not added");
                                }
    
                            } else {
    
                                toastr.error(data);
    
                            }
                        },
                        error: function (data) {
                            console.log(data)
                            toastr.error('Something went wrong.Please check the browser console for the error!');
                        }
                    });
                } else {
                  toastr.error('Please login to add your space');
                }

            } else {
                toastr.error("Please select correct address");
            }

        }

    })
})