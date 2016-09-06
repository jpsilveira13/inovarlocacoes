// Freelancer Theme JavaScript
$(document).delegate(".inovar-produto","mouseenter mouseleave",function(e){"mouseenter"==e.type?$(".conteudo-produto",this).stop().animate({top:0},300):"mouseleave"==e.type&&$(".conteudo-produto",this).stop().animate({top:190},300)});
(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Floating label headings for the contact form
    $(function() {
        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            $(this).removeClass("floating-label-form-group-with-focus");
        });
    });

})(jQuery); // End of use strict

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#trocaEstado').on('change', function (e) {
        var estado_id = e.target.value;
        console.log(estado_id);
        var listaFranqueado = $('#listaFranqueados');
        listaFranqueado.css('opacity','0.5');

        $.ajax({

            type: 'GET',
            dataType: 'json',
            url: '/busca-franquia?estado_id='+estado_id,
            data: 'franqueado',
            success: function (data) {

                listaFranqueado.empty();
                listaFranqueado.css('opacity','1');
                var html = '';
                var len = data.length;
                var cont = true;
                if(!len && cont){
                    html+= "<h1 class='text-center center-block'>Sua pesquisa retornou vazio</h1>";
                    cont = false;
                }
                for(var i = 0;i < len;i++){
                    console.log(data[i].cidade.url_nome);
                    html+= '<div class="item-franquia mb18 col-xs-6  col-sm-6 col-md-4 float-shadow2">';
                    html+='<a href="/unidade/'+data[i].cidade.url_nome+'">';
                    html+='<h2>'+data[i].cidade.nome+' - '+data[i].estado.uf+'</h2>';
                    html+='<div class="box-franqueado"><div class="franquia-telefone">'+data[i].telefone+' </div><div class="franquia-endereco">'+data[i].endereco+'</div></div></a></div>';

                }
                listaFranqueado.append(html);
            },error: function () {
                console.log('deu erro');
            }
        });

    });
    $( "#formContactFranq" ).submit(function( event ) {
        var formFranqueado = $('#formContactFranq');
        event.preventDefault();
        var $form = $( this ),
            data = $form.serialize(),
            url = "/form-franqueado";

        var posting = $.post( url, { formData: data } );

        posting.done(function( data ) {
            if(data.fail) {

                $.each(data.errors, function( index, value ) {
                    $('text-error').show('fast');
                });
               // $('#successMessage').empty();
            }
            if(data.success) {

                formFranqueado.empty();
                $('.hide-body').empty();
              //  $('#divSucessoAmigo').css('display','block');
            } //success
        }); //done
    });
});