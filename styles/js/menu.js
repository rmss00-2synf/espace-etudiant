
// No ©copyright issues
// But we will be happy to see you whenever you use our code(^_^)
// Designed by @BlackX-Lolipop
// Content available by @BlackX-732
// Content available @ https://github.com/BlackX-732/AwesomeMenu
// Version 21.2.7**/
// https://facebook.com/BlackX-732
// https://twitter.com/






$(document).ready(function(){
    $(".print2,.print3,.print4,.print5").hide();
    $("body").removeClass("overflow-body");
        $(".sidebar-btn").click(function(){
            $(".wrapper").toggleClass("collapse");
        });
        $(".res").click(function() {
            $(".print1,.print3,.print4,.print5").hide();
            $(".print2").show();
            $("body").addClass("overflow-body");
        })
        $(".cv").click(function() {
            $(".print1,.print2,.print4,.print5").hide();
            $(".print3").show();
            $("body").addClass("overflow-body");
        })
        $(".disc").click(function() {
            $(".print1,.print2,.print3,.print5").hide();
            $(".print4").show();
            $("body").addClass("overflow-body");
        })
        $(".stng").click(function() {
            $(".print1,.print2,.print3,.print4").hide();
            $(".print5").show();
            $("body").addClass("overflow-body");
        })
    });