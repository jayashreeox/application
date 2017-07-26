$(document).ready(function ()
{




    $("#name").keyup(function ()
    {
        var name = $("#name").val();
        var name_regex = /^[a-zA-Z]+$/;

        if (name == "" || !name.match(name_regex))

        {
            $('#usererror').show().html("<span> invalid..please enter your name</span>");
            return false;
        } else
        {
            $("#usererror").hide();
        }

    });


    $("#password").keyup(function () {

        var password = $("#password").val();
        var password_regex = /^[a-zA-Z0-9]+$/;
        if (password == "" || !password.match(password_regex))
        {

            $('#passworderror').show().html("<span> this is invalid</span>");
        } else
        {

            $('#passworderror').hide();
        }
    });







    $("#email").keyup(function () {

        var email_regex = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;
        var email = $("#email").val();
        if (email == "" || !email.match(email_regex))
        {
            $('#emailerror').show().html("<span> this is invalid</span>");
        } else
        {
            $('#emailerror').hide();
        }
    });



    $('#mobile').keyup(function () {

        var mobile_regex = /^[0-9]+$/;
        var mobile = $("#mobile").val();


        if (mobile == "" || !mobile.match(mobile_regex))
        {
            $("#mobileerror").show().html("<span>..please enter your Mobile number..</span>");
            return false;
        } else {
            $("#mobileerror").hide();
        }
    });
    
    $("#dob").click(function()
  {
        var dob = $("#dob").val();
        
            if (dob == "")
            {
                $('#dob').show().html()("<span>please select</span>");
                
            }
        else{
            $("#dob").hide();
        }
    });
});
    