$(document).ready(function(){

    $("#loginForm").bind("submit", function(){

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                    alert("connect");
            },
            error:function(){
                alert("alert");
            }
        });
        return false;
    });
});