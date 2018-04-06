<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/tether.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/bootstrap3/bootstrap.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/wow/script.wow.js')}} "></script>
<script type="text/javascript" src="{{ asset('js/web.js') }} "></script>
<script>

    /*
    |--------------------------------------------------------------------------
    | Contact Tab (WhatsApp)
    |--------------------------------------------------------------------------
    */
    $(document).ready(function(){
        if (screen.width < 765){
            console.log('celular');
            $('.Contact-Tab').hide(200);
            $(window).scroll(function(){
                if ($(window).scrollTop() > 500){
                    $('.Contact-Tab').show(200);
                } else {
                    $('.Contact-Tab').hide(200);
                }
            });
        }
    });

    /*
    |--------------------------------------------------------------------------
    | Hamburguer Menu
    |--------------------------------------------------------------------------
    */

    // Hide Menu
    $('#MainMenu').hide(0);

    function openMenu(){
        $('#MainMenu').slideDown(100);
        $('html').css('overflow-y','hidden');
    }

    function closeMenu(){
        $('#MainMenu').slideUp(100);
        $('html').css('overflow-y','scroll');
    }
   
    $('.MainMenuBtn').click(function(){
        if(!$(this).hasClass('is-active')){
            openMenu();
            $(this).addClass('is-active');
        } else {
            closeMenu();
            $(this).removeClass('is-active');
        }
    });

    /*
    |--------------------------------------------------------------------------
    | Home Big Menu
    |--------------------------------------------------------------------------
    */

    $(document).ready(function(){


        // Show Overlay
        $('.HomeItemBtn').click(function(){

            var thisOverlay = $(this).parent().siblings('.Overlay');
            var thisOverlayText = $(this).parent().siblings('.Overlay').children('.Overlay-Text');
            // Closing other overlays
            $('.Overlay-Text').fadeOut();
            $('.Overlay-Text').addClass('Hidden');
            $.when($('.Overlay-Color').animate({left:'100%'}, 400)).done(function() {
                $('.Overlay').not(thisOverlay).addClass('Hidden');
            });        
            // Reset Heights
            $('.HomeItem').animate({height: 300});

            // Show Overlay

            var text = $(this).parent().siblings('.Overlay').children('.Overlay-Text');
            
            $(this).parent().siblings('.Overlay').removeClass('Hidden');
            $(this).parent().siblings('.Overlay').children('.Overlay-Color')
                .animate({left:'0'},
                500, function() {
                    text.removeClass('Hidden', {duration: 1500});
                    $('.Overlay-Text').fadeIn('100')
                });

            // This .Overlay-Text
            var newHeight =  thisOverlayText.sandbox(function(){ return this.height(); });
            $(this).parent().animate({height: newHeight });
            if(newHeight > 300 ){
                $('.HomeItem').animate({height: newHeight + 30 });
            }
        });


        // Close Overlays with X button
        $('.CloseOverlay').click(function(){
            $.when($('.Overlay-Text').fadeOut(150)).done(function() {
                $('.Overlay-Text').addClass('Hidden')
            });


            $('.HomeItem').animate({height: 300});
            //$('.HomeItem').animate({height: 300});
            //$('.HomeIrow1tem').children('.HomeItem').animate({height: 300});row1
            
            $('.Overlay-Color').animate({left:'100%'}, 400, 
            function(){
                $('.Overlay').addClass('Hidden');
            });
        });
    });


    // Obtain real height of a hidden elemment
    $.fn.sandbox = function(fn) {
        var element = $(this).clone(), result;
        // make the element take space in the page but invisible
        element.css({visibility: 'hidden', display: 'block'}).insertAfter(this);
        // to override any display: none !important you may have been using
        element.attr('style', element.attr('style').replace('block', 'block !important'));
        result = fn.apply(element);
        element.remove();
        return result;
    };



  
</script>