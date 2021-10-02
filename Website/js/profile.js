var host = "https://ourz-spaces.herokuapp.com";

$(document).ready(function () {

    if (localStorage.getItem("userID")) {
        $("#first_name3").val(localStorage.getItem("first_name"))
        $("#last_name3").val(localStorage.getItem("last_name"))
        $("#email3").val(localStorage.getItem("email"))
        $("#phone3").val(localStorage.getItem("phone"))
    } else {
        location.href = "index.php";
    }

    $("form[id='profileForm']").validate({
        rules: {
            first_name3: {
                required: true,
            },
            last_name3: {
                required: true,
            },
            email3: {
                required: true,
                email: true
            },
            phone3: {
                required: true,
            }
        },
        messages: {
            first_name3: "Please enter your first name",
            last_name3: "Please enter your last name",
            email3: "Please enter Email Address",
            phone3: "Please enter your phone number",
        },
        submitHandler: function () {
            $.ajax({
                type: 'POST',
                url: host+'/user/update',
                data: {
                    userID: localStorage.getItem("userID"),
                    first_name: $("#first_name3").val(),
                    last_name: $("#last_name3").val(),
                    email: $("#email3").val(),
                    phone: $("#phone3").val()
                },
                success: function (data) {
                    if (data) {

                        if (data.affectedRows) {

                            localStorage.setItem("first_name", $("#first_name3").val());
                            localStorage.setItem("last_name", $("#last_name3").val());
                            localStorage.setItem("email", $("#email3").val());
                            localStorage.setItem("phone", $("#phone3").val());
                            toastr.success("Account information updated");

                            setTimeout(() => {
                                location.reload()
                            }, 2000);
                        } else {
                            toastr.error("No data updated of User");
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