$(document).ready(function(){

    $("#loginForm").bind("submit",  function(){

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function() {
                $("loginForm button[type=submit").html("Sending...");
                $("loginForm button[type=submit").attr("disabled","disabled");
            
            },
          success:function(response){   
            if(response.status == "true"){
                $("body").overhang({
                    type: "success",
                    message: "You're connected!, We are redirecting you...",
                    callback: function(){
                        window.location.href = "admin.php";
                    }
                });
            }  else {
                $("body").overhang({
                    type: "error",
                    message: "You're credentials are not correct!"
                });
            }

            $("loginForm button[type=submit").html("Ingresar");
            $("loginForm button[type=submit").removeAttr("disabled");
            

            },
            error:function(){
                $("body").overhang({
                    type: "error",
                    message: "You're credentials are not correct!"
                });

                $("loginForm button[type=submit").html("Ingresar");
                $("loginForm button[type=submit").removeAttr("disabled");
                

            }
        });
        return false;
    });
});