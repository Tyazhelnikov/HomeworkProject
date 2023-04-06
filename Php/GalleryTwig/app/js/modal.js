'use strict'

$(document).ready(function (){
    $('a.image').click((e)=>{
       /*$.ajax({
            url: "big_image.php",

        })*/
        console.log(e.target);
        e.preventDefault();
        let overlay = $('div.popup-overlay');
        let modalWindow = $('div.modal-popup');
        let image = e.target;
        let url = $(image).data('url');
        console.log(url);
        let bigImage = new Image();
        bigImage.src = url;
        $(bigImage).width('auto');
        $(bigImage).height('100%');
        modalWindow.append(bigImage);
        overlay.fadeIn();
        modalWindow.fadeIn();
        overlay.click(function (){
            overlay.fadeOut();
            modalWindow.fadeOut();
            bigImage.remove();
        });
        $('.modal-close').click(function (){
            overlay.fadeOut();
            modalWindow.fadeOut();
            bigImage.remove();
        });
    });
});
