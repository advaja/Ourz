var nav = document.querySelector('nav');
var host = "https://ourz-spaces.herokuapp.com";

var propertyData3 = [];

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
    } else {
        nav.classList.remove('bg-dark', 'shadow');
    }
});

$("#signupModalBtn").click(function () {
    $("#signInModal").modal('hide')
    $("#signUpModal").modal('show')
})

$("#signInModalBtn").click(function () {
    $("#signInModal").modal('show')
    $("#signUpModal").modal('hide')
})

function showPropertyModal(index) {
    console.log(propertyData3[index])

    $("#propertyIDModal").html(propertyData3[index].propertyID)
    $("#propertyNameModal").html(propertyData3[index].owner_name)
    $("#propertyDescriptionModal").html(propertyData3[index].description)
    $("#propertyPeopleModal").html(propertyData3[index].peoples)
    $("#propertyRateModal").html(propertyData3[index].rate)
    $("#propertyDateModal").html("Date: " + moment(propertyData3[index].startDate).format("DD MMMM") + "-" + moment(propertyData3[index].endDate).format("DD MMMM"))
    $("#propertyTimeModal").html("Time: " + propertyData3[index].time1 + "-" + propertyData3[index].time2)

    if (propertyData3[index].imagePath1) {
        $("#imagePath1Modal").attr("src", host + "/" + propertyData3[index].imagePath1);
        $("#imageItem1Modal").addClass("carousel-item");
    } else {
        $("#imageItem1Modal").removeClass("carousel-item");
    }

    if (propertyData3[index].imagePath2) {
        $("#imagePath2Modal").attr("src", host + "/" + propertyData3[index].imagePath2);
        $("#imageItem2Modal").addClass("carousel-item");
    } else {
        $("#imageItem2Modal").removeClass("carousel-item");
    }

    if (propertyData3[index].imagePath3) {
        $("#imagePath3Modal").attr("src", host + "/" + propertyData3[index].imagePath3);
        $("#imageItem3Modal").addClass("carousel-item");
    } else {
        $("#imageItem3Modal").removeClass("carousel-item");
    }

    if (propertyData3[index].imagePath4) {
        $("#imagePath4Modal").attr("src", host + "/" + propertyData3[index].imagePath4);
        $("#imageItem4Modal").addClass("carousel-item");
    } else {
        $("#imageItem4Modal").removeClass("carousel-item");
    }
    //$("#propertyPaymentBtn").attr("href", "payment.php?propertyID="+propertyData3[index].propertyID)

    $("#showResultModal").modal('show')
}

$(document).ready(function () {

    $('#showResultModal').on('hidden.bs.modal', function () {
        location.reload();
       })

    $("#propertyPaymentBtn").click(function () {
        if ($("#room_hours_needed").val() > 0) {
            location.href = "payment.php?propertyID=" + $("#propertyIDModal").html() + "&totalHours=" + $("#room_hours_needed").val()
        } else {
            toastr.error('Please enter hours!');
        }
    })

    $.ajax({
        type: 'POST',
        url: host + '/property/latest3',
        data: {},
        success: function (data) {

            propertyData3 = data;

            var result = "";

            for (let index = 0; index < data.length; index++) {
                if(data[index].isBooked){
                    result += `<div class="col-md-4">`;
                }else{
                    result += `<div class="col-md-4" style="cursor: pointer;" onclick="showPropertyModal(` + index + `)">`;
                }
                result +=`<img class="img-fluid" style="height: 300px;" src="` + host + `/` + data[index].imagePath1 + `" alt="">
                <p class="section1-p-bold">` + data[index].owner_name + `</p>
                <p class="section1-p">` + data[index].street_number + ` ` + data[index].street + ` ` + data[index].address + `</p>
                <p class="section1-p-bold">$` + data[index].rate + `/hr</p>`;
                if(data[index].isBooked){
                    result +=`<p class="section1-p-bold" style="color: red;">Already Booked</p>`;
                }
                result +=`</div>`;
            }

            $("#latest3property").html(result)

        },
        error: function (data) {
            console.log(data)
            toastr.error('Something went wrong.Please check the browser console for the error!');
        }
    });

    if (localStorage.getItem("userID")) {
        $("#loginDiv").hide()
        $("#userDiv").show()
        $("#addPropertyUl").show()

        $("#userNameText").html(localStorage.getItem("first_name"))
    }

    $("#logoutBtn").click(function () {
        localStorage.removeItem("userID");
        localStorage.removeItem("first_name");
        localStorage.removeItem("last_name");
        localStorage.removeItem("email");
        localStorage.removeItem("phone");
        location.reload()
    })

    $("form[id='loginForm']").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: "Please enter Email Address",
            password: "Please enter your password",
        },
        submitHandler: function () {
            $.ajax({
                type: 'POST',
                url: host + '/user/login',
                data: {
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                success: function (data) {
                    if (data.length) {

                        localStorage.setItem("userID", data[0].userID);
                        localStorage.setItem("first_name", data[0].first_name);
                        localStorage.setItem("last_name", data[0].last_name);
                        localStorage.setItem("email", data[0].email);
                        localStorage.setItem("phone", data[0].phone);

                        toastr.success('Successfully logged In to account!');

                        location.reload()

                    } else {

                        toastr.error('Incorrect Email or Password');

                    }
                },
                error: function (data) {
                    console.log(data)
                    toastr.error('Something went wrong.Please check the browser console for the error!');
                }
            });

        }

    })

    $("form[id='registerForm']").validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            new_email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
            },
            new_password: {
                required: true,
            },
            confirm_password: {
                equalTo: "#new_password"
            }
        },
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            new_email: "Please enter Email Address",
            phone: "Please enter your phone number",
            new_password: "Please enter your password",
            confirm_password: "Password mismatch"
        },
        submitHandler: function () {
            $.ajax({
                type: 'POST',
                url: host + '/user/register',
                data: {
                    first_name: $("#first_name").val(),
                    last_name: $("#last_name").val(),
                    email: $("#new_email").val(),
                    phone: $("#phone").val(),
                    password: $("#new_password").val()
                },
                success: function (data) {
                    if (data) {

                        if (data.affectedRows) {
                            toastr.success("Account has been created");
                            $("#signInModal").modal('show')
                            $("#signUpModal").modal('hide')
                        } else if (data.err == -100) {
                            toastr.error("Email Already Taken");
                        } else {
                            toastr.error("Account not created");
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

        }

    })

})