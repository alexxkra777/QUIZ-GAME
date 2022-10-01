$(document).ready(function(){
    //form login
    $("#login").hide();
    $( "#login_btn" ).click(function() {
        $("#btn").hide();
        $("#login").show();
    });
    $( ".closer_icon" ).click(function() {
        $("#login").hide();
        $("#regis").hide();
        $("#btn").show();
    })
    //form register
    $("#regis").hide();
    $( "#regis_btn" ).click(function() {
        $("#btn").hide();
        $("#regis").show();
        $(".arrow_right").hide();
        $(".arrow_left").hide();
        $("#arrow_right_name").show();
        $("#surname").hide();
        $("#email").hide();
        $("#password").hide();
        $("#submit_regis").hide();
        $("#submit_regis").hide();
    })
    $( "#arrow_right_name" ).click(function() {
        $("#name").hide();
        $(".closer_icon").hide();
        $("#arrow_right_name").hide();
        $("#arrow_right_surname").show();
        $("#surname").show();
        $("#arrow_left_surname").show();
        $("#submit_regis").hide();
    })
    $( "#arrow_left_surname" ).click(function() {
        $("#surname").hide();
        $("#arrow_left_surname").hide();
        $("#arrow_right_surname").hide();
        $("#arrow_right_name").show();
        $("#name").show();
        $(".closer_icon").show();
        $("#submit_regis").hide();
    })
    $( "#arrow_right_surname" ).click(function() {
        $("#surname").hide();
        $("#arrow_left_surname").hide();
        $("#arrow_right_surname").hide();
        $("#arrow_right_email").show();
        $("#email").show();
        $("#arrow_left_email").show();
        $("#submit_regis").hide();
    })
    $( "#arrow_left_email" ).click(function() {
        $("#email").hide();
        $("#arrow_left_email").hide();
        $("#arrow_right_email").hide();
        $("#arrow_right_surname").show();
        $("#arrow_left_surname").show();
        $("#surname").show();
        $("#submit_regis").hide();
    })
    $( "#arrow_right_email" ).click(function() {
        $("#email").hide();
        $("#arrow_left_email").hide();
        $("#arrow_right_email").hide();
        $("#password").show();
        $("#submit_regis").show();
        $("#arrow_left_password").show();
    })
    $( "#arrow_left_password" ).click(function() {
        $("#password").hide();
        $("#arrow_left_password").hide();
        $("#arrow_right_email").show();
        $("#arrow_left_email").show();
        $("#email").show();
        $("#submit_regis").hide();
    })



    
})