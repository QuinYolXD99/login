$(document).ready(function () {

    $("#email").change(function(){
        var val = $(this).val();
        $.ajax({
            url: 'mailCheck.php',
            type: 'post',
            data: {
                email: val
            },
            success: function (data) {
                if (data == 1) {
                    Swal.fire({
                        type: 'error',
                        title: 'Email already used!',
                        text: "Please use another email.."
                    });
                $("#email").val("");
                }
            }
        });
        
    });

    $("#sup").click(function () {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

        if (fname == '' || lname == '' || email == '' || password == '') {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'All inputs should be filled!'
            })
        } else if ((password.length) < 8) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Password should atleast 8 character in length...'
            })
        } else if(!pattern.test(email)) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Please enter a valid email address...'
            })
        } else {
            $.ajax({
                url: 'reg.php',
                type: 'post',
                data: {
                    fname: $("#fname").val(),
                    lname: $("#lname").val(),
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                success: function (data) {
                    if (data != 1) {
                        Swal.fire({
                            type: 'error',
                            title: 'Something went wrong!',
                            text: data
                        })
                    } else {
                        window.location.href = "login.php";
                    }
                }
            });
        }
    });
});