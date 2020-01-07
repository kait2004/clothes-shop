$('.btnlog').click(function(){ 
    var popup = $('.your-question-popup');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup').fadeOut(500); 
            }
        });
    });

    return false;
});

$('.btnlog').click(function(){ 
    var popup = $('.your-question-popup');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup').fadeOut(500); 
            }
        });
    });

    return false;
});

$('.registration').click(function(){ 
    var popup = $('.your-question-popup-reg');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content-reg'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup').fadeOut(500); 
            }
        });
    });

    return false;
});

$('.registration').click(function(){ 
    var popup = $('.your-question-popup-reg');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content-reg'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup-reg').fadeOut(500); 
            }
        });
    });

    return false;
});