$(document).ready(function(){   

    $("a[href*=#]").click(function() { 
        var target = $(this.hash);
        if (target) {
            $('html,body').animate({scrollTop: target.offset().top}, 800);
            return false;
        }
    });
    
    /*
    $( "#menu div").click(function() {
        $(".selected").css("color","white");
        $(".selected").removeClass("selected");
        $(this).css("color","yellow");
        $(this).addClass("selected");
    }); 
    */
    
    $( "#toTop" ).hover(
        function() {
            $(this).css("width","400%");
            $(this).html("Top");
            $(this).css("background","#F5DEB3");
        }, 
        function() {
            $(this).css("width","100%");
            $(this).html("T");
            $(this).css("background","rgb(60,179,113)");
        }
    );
    
    $( "#toEducation" ).hover(
        function() {
            $(this).css("width","500%");
            $(this).html("Education");
            $(this).css("background","#F5DEB3");
        }, 
        function() {
            $(this).css("width","100%");
            $(this).html("E");
            $(this).css("background","rgb(60,179,113)");
        }
    );
    
    $( "#toExperience" ).hover(
        function() {
            $(this).css("width","600%");
            $(this).html("Experience");
            $(this).css("background","#F5DEB3");
        }, 
        function() {
            $(this).css("width","100%");
            $(this).html("E");
            $(this).css("background","rgb(60,179,113)");
        }
    );
    
    $( "#toContact" ).hover(
        function() {
            $(this).css("width","400%");
            $(this).html("Contact");
            $(this).css("background","#F5DEB3");
        }, 
        function() {
            $(this).css("width","100%");
            $(this).html("C");
            $(this).css("background","rgb(60,179,113)");
        }
    );
    
});