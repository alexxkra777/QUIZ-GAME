$(document).ready(function(){
    //function for button 
    function show_hide_func(show_click, show_elmnt, closer){
        $(show_click).click(function() {
            $(show_click).css("box-shadow", "0px 0px 0px #000");
            $(show_elmnt).show();
        })
    
        $(closer).click(function() {
            $(show_elmnt).hide();
            $(show_click).css("box-shadow", "rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset");
        })
    }


    show_hide_func("#first", "#play_div_first", ".closer_icon");
    show_hide_func("#second", "#play_div_second", ".closer_icon")
    show_hide_func("#third", "#play_div_third", ".closer_icon")
    show_hide_func("#fourth", "#play_div_fourth", ".closer_icon")
    show_hide_func("#fifth", "#play_div_fifth", ".closer_icon")

    


})