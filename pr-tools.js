$(document).ready(function() {
    $(".curtainBox > .switch").click(function() {
        $(this).children(".collapse").toggle();
        $(this).children(".expand").toggle();
        $(this).parent().children(".curtain").slideToggle("fast");
        return false;
    });

    $(".toggleBox > .switch").click(function() {
        $(this).children(".case1").toggle();
        $(this).children(".case2").toggle();
        $(this).parent().children(".case1").toggle();
        $(this).parent().children(".case2").toggle();
        return false;
    });
});
 