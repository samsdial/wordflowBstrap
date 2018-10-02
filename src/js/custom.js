$(document).ready(function($){
    $('#submit').click(function(){
        var name        = $("#name").val();
        var lastName    = $("#lastName").val();
        var email       = $("#email").val();
        var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var phone       = $("#phone").val();
        var city       = $("#city").val();

        if(name == "" || lastName == "" || email == "" || phone == "" || city == ""){
            if(name == ""){
                $(".name + .error").addClass("i");
                $("#name").focus();
                return false;
            }else{
                $(".name + .error").removeClass("i");
            }
            if(lastName == ""){
                $(".lastname + .error").addClass("i");
                $("#lastName").focus();
                return false;
            }else{
                $(".lastname + .error").removeClass("i");
            }
            if(email == "" || !validacion_email.test(email)){
                $(".email + .error").addClass("i");
                $("#email").focus();
                return false;
            }else{
                $(".email + .error").removeClass("i");
            }
            if(phone == ""){
                $(".cel + .error").addClass("i");
                $("#phone").focus();
                return false;
            }else{
                $(".cel + .error").removeClass("i");
            }
            if(city == ""){
                $(".city + .error").addClass("i");
                $("#city").focus();
                return false;
            }else{
                $(".city + .error").removeClass("i");
            }
        }else{
            $(".city + .error").removeClass("i");
            var datos = '&name=' + name +
                '&lastName=' + lastName +
                '&email=' + email +
                '&phone=' + phone +
                '&city=' + city;
            $.ajax({
                method:"Post",
                url:"contact.php",
                dataType:"json",
                data:datos,
            }).done(function( msg ){
                if(msg.success){
                    $('.alerta p').fadeIn("slow");
                    $('.alerta p').html('Muchas Gracias por contáctarnos, pronto nos estaremos comunicando contigo.');
                    $('#name').val("");
                    $('#lastNamee').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#city').val("");
                }else{
                    $('.alerta p').fadeIn("slow");
                    $('.alerta p').html('Error, intente más tarde por favor.');
                }
            });
            return false;
        }
    });
});

