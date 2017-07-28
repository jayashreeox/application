$(document).ready(function ()
{

    $("#submit").click(function () {



        var name = $("#name").val();
        var name_regex = /^[a-zA-Z]+$/;
        if (name == ""|| !name.match(name_regex))
 
        {
            $("#usererror").css("display", "inline");
            $('#usererror').html("invalid");
            $("input").focus(function () {
                $("#usererror").css("display", "none");
            });
            return false;
        }

        var pass = $("#password").val();
       
        if (pass == "")

        {
            $("#passworderror").css("display", "inline");
            $('#passworderror').html("invalid");
            $("input").focus(function () {
                $("#passworderror").css("display", "none");
            });
            return false;
        }

        var email = $("#email").val();
        var email_regex = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;
        

        if (email == "" || !email_regex.test(email) )

        {
            $("#emailerror").css("display", "inline");
            $('#emailerror').html("invalid");
            $("input").focus(function () {
                $("#emailerror").css("display", "none");
            });
            return false;
        }

        var mobile = $("#mobile").val();
        var mobile_regex = /^[0-9]+$/;


        if (mobile == "" || !mobile.match(mobile_regex))

        {
            $("#mobileerror").css("display", "inline");
            $('#mobileerror').html("invalid");
            $("input").focus(function () {
                $("#mobileerror").css("display", "none");
            });
            return false;
        }

        var dob = $("#dob").val();
        //var name_regex = /^[a-zA-Z]+$/;

        if (dob == "")

        {
            $("#doberror").css("display", "inline");
            $('#doberror').html("invalid");
            $("input").focus(function () {
                $("#doberror").css("display", "none");
            });
            return false;
        }

        var gender = $("#gender").val();
       
        if ($("#gender:checked").length == 0)
        {
            $("#gendererror").css("display", "inline");
            $('#gendererror').html("invalid");
            $("input").focus(function () {
                $("#gendererror").css("display", "none");
            });
            return false;
        }

        var address = $("#address").val();
        
        if (address == "")

        {
            $("#addresserror").css("display", "inline");
            $('#addresserror').html("invalid");
            $("textarea").focus(function () {
                $("#addresserror").css("display", "none");
            });
            return false;
        }
    });
   $("#name").keyup(function () {
        var name_regex = /^[a-zA-Z]+$/;
        var name = $("#name").val();
        if (!name_regex.test(name))
        {
            $("#usererror").css("display", "inline");
            $("#usererror").html("Alphabets only");
            return false;
        } else
        {
            $("#usererror").css("display", "none");
            return true;
        }
    });
    $("#email").keyup(function () {
        var email_regex = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;
        var email = $("#email").val();
        if (email = "" || !email_regex.test(email))
        {
            $("#emailerror").css("display", "inline");
            $("#emailerror").html("....");
            return false;
        } else
        {
            $("#emailerror").css("display", "none");
            return true;
        }
    });
    $('#mobile').keyup(function ()
    {

        var mobile_regex = /^[0-9]+$/;
        var mobile = $("#mobile").val();
        if (mobile == "" || !mobile.match(mobile_regex))
        {
            $("#mobileerror").css("display", "inline");
            $("#mobileerror").html("..Numeric only..");
            return false;
        } else
        {
            $("#mobileerror").css("display", "none");
            return true;
        }

    });
});


/* $("#password").keyup(function () {
 
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
 }*/
 
 