<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/tether.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/bootstrap3/bootstrap.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/wow/script.wow.js')}} "></script>
<script type="text/javascript" src="{{ asset('js/web.js') }} "></script>
<script>

    new WOW().init();

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
    $('#MainMenu').hide();

    function openMenu(){
        $('#MainMenu').slideDown(100);
        $('html').css('overflow-y','hidden');
    }

    function closeMenu(){
        $('#MainMenu').slideUp(100);
        $('html').css('overflow-y','scroll');
        $('.MainMenuA').removeClass('wow slideInLeft');
    }
   
    $('#ContactNavBtn').click(function(){
        closeMenu();
    });

    $('.MainMenuBtn').click(function(){
        if(!$(this).hasClass('is-active')){
            openMenu();
            $(this).addClass('is-active');
        } else {
            closeMenu();

            $('.OpenedItem').each(function(i, obj) {
                var height = $(this).data('height');
                $(this).animate({height: height}); 
            });

            $(this).removeClass('is-active');
        }
    });

    /*
    |--------------------------------------------------------------------------
    | Home Big Menu
    |--------------------------------------------------------------------------
    */
    
    $('.HomeItem > .inner').each(function(){ 
        var innerHeight = $(this).height();
        $(this).data('height', innerHeight);
    });

    $(document).ready(function(){
               
        // Show Overlay
        $('.HomeItemBtn').click(function(){
            // Reset open overlay
            $(this).parent().addClass('OpenedItem');
            var openedItems = $('.inner .OpenedItem');

            $('.OpenedItem').each(function(i, obj) {
                var height = $(this).data('height');
                $(this).animate({height: height}); 
            });

            var thisOverlay = $(this).parent().siblings('.Overlay');
            var thisOverlayText = $(this).parent().siblings('.Overlay').children('.Overlay-Text');
            // Closing other overlays
            $('.Overlay-Text').fadeOut();
            $('.Overlay-Text').addClass('Hidden');
            $.when($('.Overlay-Color').animate({left:'100%'}, 400)).done(function() {
                $('.Overlay').not(thisOverlay).addClass('Hidden');
            });        
            
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
            var overlayHeight =  thisOverlayText.getHeightFromHidden(function(){ return this.height()});
            var parentHeight = $(this).parent().height();
            if(overlayHeight > parentHeight){
                $(this).parent().data('height', parentHeight);
                $(this).parent().animate({height: overlayHeight}); 
            }

        });

        // Close Overlays with X button
        $('.CloseOverlay').click(function(){
            $.when($('.Overlay-Text').fadeOut(150)).done(function() {
                $('.Overlay-Text').addClass('Hidden')
            });
            
            let parent = $(this).parent().parent().siblings('.inner');
            let originalHeight = parent.data('height') || '';
            parent.animate({height: originalHeight});           

            $('.Overlay-Color').animate({left:'100%'}, 450, 
            function(){
                $('.Overlay').addClass('Hidden');
            });
        });
    });


    // Obtain real height of a hidden elemment
    $.fn.getHeightFromHidden = function(fn) {
        var element = $(this).clone(), result;
        // make the element take space in the page but invisible
        element.css({visibility: 'hidden', display: 'block'}).insertAfter(this);
        // to override any display: none !important you may have been using
        element.attr('style', element.attr('style').replace('block', 'block !important'));
        result = fn.apply(element);
        element.remove();
        return result;
    };

    // Show and Hide Empresas Section
    $('#Empresas').hide();
    $('.BtnEmpresas').click(function(){
        
        if(screen.width > '800px'){
            $('.Home-Mobile, .MainMenuBtn').hide(500);
        } else {
            $('.Home-Desktop, .MainMenuBtn').hide(500);
        }
        $('html, body').animate({ scrollTop: 0 }, '0');

        $('#Main-Big-Menu').fadeOut(0, function () {
            $('#Empresas').fadeIn(0);
        });
    });


    $('.Close-Empresas').click(function(){
        if(screen.width > '800px'){
            $('.Home-Mobile, .MainMenuBtn').show(200);
        } else {
            $('.Home-Desktop, .MainMenuBtn').show(200);
        }
        $('#Empresas').fadeOut(0, function () {
            $('#Main-Big-Menu').fadeIn(0);
        });
    });

    // For Test
    //$('#Empresas').show();
    //$('#Main-Big-Menu').hide();

    // Go To Top Arrow
    $(window).scroll(function() {
        if ($(window).scrollTop() > 800) {
            $('.goToTop').fadeIn(500);
        }
        else {
            $('.goToTop').fadeOut(500);
        }
    });

    $('.goToTop').click(function(){
        $('html, body').animate({ scrollTop: 0 }, 'fast');
    });


    // Main Contact Form
    $(document).on('submit','#MainContactForm',function(e){
        e.preventDefault();
        var data   = $(this).serialize();
        var route  = "{{ url('mail_sender') }}";
        // var route  = "{{ url('test_sender') }}";
        var loader = '<img src="{{ asset("images/loaders/loader-sm.svg") }}"/>' + '<div style="color: #fff; margin-left: 15px">Enviando...</div>';

        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                var loader = "<img src='{{ asset('images/loaders/loader-sm.svg') }}'>";
                $('#ContactBtn').html('Enviando ' + loader);
            },
            success: function(data) {
                $('#MainContactForm').hide();
                $('#FormSuccess').removeClass('Hidden');
                $('#FormResponse').hide();
                console.log(data);
            },
            error: function(data) {
                $('#FormResponse').hide();
                $('#MainContactForm').hide();
                $('#ContactBtn').html('ENVIAR');
                $('#FormError').removeClass('Hidden');
                console.log(data);
            }
        });
    });

    
</script>