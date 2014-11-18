/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    var firstnameflag = false;
    var lastnameflag = false;
    var emailflag = false;
    var phoneflag = false;
    var msgflag = false;

    //firstname validation
    $('#first').on("blur", function() {
        if ($('#first').val().length > 0) {
            if (validatename($('#first').val())) {
                $('#first').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                firstnameflag = true;
            }
            else
            {
                $('#first').css({'box-shadow': '0px 0px 7px red'});
                firstnameflag = false;
            }
        } else {
            $('#first').css({'box-shadow': '0px 0px 7px red'});
            firstnameflag = false;
        }

    });

    //lastname validation
    $('#last').on("blur", function() {
        if ($('#last').val().length > 0) {
            if (validatename($('#last').val())) {
                $('#last').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                lastnameflag = true;
            }
            else
            {
                $('#last').css({'box-shadow': '0px 0px 7px red'});
                lastnameflag = false;
            }
        } else {
            $('#last').css({'box-shadow': '0px 0px 7px red'});
            lastnameflag = false;
        }
    });

    //number validation
    $('#phone').on("blur", function() {
        if ($('#phone').val().length > 7) {
            if (validatenumber($('#phone').val())) {
                $('#phone').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
                phoneflag = true;
            }
            else
            {
                $('#phone').css({'box-shadow': '0px 0px 7px red'});
                phoneflag = false;
            }
        } else {
            $('#phone').css({'box-shadow': '0px 0px 7px red'});
            phoneflag = false;
        }
    });

    //email validation
    $('#email').on("blur", function() {
        if (validateEmail($('#email').val())) {
            $('#email').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
            emailflag = true;
        }
        else
        {
            $('#email').css({'box-shadow': '0px 0px 7px red'});
            emailflag = false;
        }
    });

    $('#messagebox').on("blur", function() {
        if ($('#messagebox').val().length > 0) {
            $('#messagebox').css({'box-shadow': 'inset 0 1px 1px rgba(0,0,0,0.075)'});
            msgflag = true;
        }
        else
        {
            $('#messagebox').css({'box-shadow': '0px 0px 7px red'});
            msgflag = false;
        }
    });

    $(".submit-contact").on("click", function(e) {
        e.preventDefault();
        if (firstnameflag && lastnameflag && emailflag && phoneflag && msgflag)
        {
            var postData = $(".contact-form").serialize();
            $.ajax(
                    {
                        url: "../submitContactController/submitContact",
                        type: "POST",
                        data: postData,
                        success: function(data, textStatus, jqXHR)
                        {
                            if (data === "success") {
                                $(".error-message").html("");
                                $(".success-message").html("Thank You!!");
                                $('#first').val("");
                                $('#last').val("");
                                $('#email').val("");
                                $('#phone').val("");
                                $('#messagebox').val("");
                                var firstnameflag = false;
                                var lastnameflag = false;
                                var emailflag = false;
                                var phoneflag = false;
                                var msgflag = false;
                                setTimeout(function(){
                                $(".success-message").html("");
                                },3000);
                            }
                            else {
                                $(".error-message").html("There was some error ! Please try again.");
                                setTimeout(function(){
                                $(".error-message").html("");
                                },3000);
                                //console.log("data: "+data+" textStatus: "+textStatus+"jqXHR: "+jqXHR);
                            }
                            //data: return data from server
                        },
                        error: function(jqXHR, textStatus, errorThrown)
                        {
                            //console.log("error: "+errorThrown+" textStatus: "+textStatus+"jqXHR: "+jqXHR);
                        }

                    });
        } else {
            console.log("failing");
            $(".success-message").html("");
            $(".error-message").html("Please fill in details properly.");
        }
    })
})
function validateEmail(email) {
    var re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    return re.test(email);
}
function validatename(name) {
    var re = /^[a-z0-9]+$/i;
    return re.test(name);
}
function validatenumber(number) {
    var re = /^\d+$/;
    return re.test(number);
}

