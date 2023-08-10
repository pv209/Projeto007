$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        if(listaMenu.is(':hidden') == true){
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-bars');
            icone.addClass('fa-solid fa-x');
            listaMenu.fadeIn();
        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-x');
            icone.addClass('fa-solid fa-bars');
            listaMenu.fadeOut();
        }

    })
});


if($('target').length > 0 ){
    var elemento = '#'+$('target').attr('target');
    var divScroll = $(elemento).offset().top
    $('html,body').animate({'scrollTop':divScroll},2000)
}