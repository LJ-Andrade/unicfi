<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/tether.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/bootstrap3/bootstrap.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/wow/script.wow.js')}} "></script>
<script type="text/javascript" src="{{ asset('js/web.js') }} "></script>
<script>

    // Main Contact Form
    $(document).on('submit','#MainContactForm',function(e){
        e.preventDefault();
        var data   = $(this).serialize();
        var route  = "{{ url('main_contact_mailsender') }}";
        var loader = '<div style="color: #fff; margin-left: 15px"> <img src="{{ asset("images/gral/loader-sm.svg") }}"/>  Enviando...</div>';
        $.ajax({
            type: "POST",
            url: route,
            dataType: 'JSON',
            data: data,
            beforeSend: function(){
                $('.contactBtn').html(loader);
            },
            success: function(data) {
                $('#MainContactForm').addClass('Hidden');
                $('#FormSuccess').removeClass('Hidden');
                //$('#FormResponse').hide();
                console.log(data);
            },
            error: function(data) {
                // For Test
                //console.log('Error');
                //console.log(data);
                //$('#FormResponse').html(data.responseText);
                // For Display
                $('#MainContactForm').hide();
                $('.ContactBtn').html('ENVIAR');
                $('#FormError').removeClass('Hidden');
            }
        });
    });
    
</script>