$(document).ready(function(){
    
    ///hide questin 
    /// show only frist if not set cookies
    $(".second_question").hide();
    $(".third_question").hide();
    $(".fourth_question").hide();
    $(".fifth_question").hide();
    // isset cookies 
    // word with cookies... 
    if(!!$.cookie("first")){
        $(".first_question").hide();
        $(".second_question").show();
    }
    if(!!$.cookie("second")){
        $(".second_question").hide();
        $(".third_question").show();
    }
    if(!!$.cookie("third")){
        $(".third_question").hide();
        $(".fourth_question").show();
    }
    if(!!$.cookie("fourth")){
        $(".fourth_question").hide();
        $(".fifth_question").show();
    }

    $(".cookies_btn").click(function() {
        $.removeCookie("first")
        $.removeCookie("second")
        $.removeCookie("third")
        $.removeCookie("fourth")
        $.removeCookie("fifth")
    })
    
});
/// do not use
/*
    $("#click").click(function() {
        $.ajax({
            type: "POST",
            url: "modul.php",
            data: { name: "name" },
            success: function(result)
            {
                console.log(result);
                $("#quiz_div").html(result);
                console.log("ok");
            },
            error: function(error)
            {
                $("#message").html(error); 
                console.log("error");
            }
        });
    });
*/