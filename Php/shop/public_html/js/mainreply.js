"use strict"

$(document).ready(function (){
    let basket = new replyBasket('reviews');
    let wrapSelector = $('#replyWrap');
    let replyItemsWrap = $('#replyItemsWrap');
    basket.render(wrapSelector);

    let $form = $('<form />',{
        action:  'reply.html',
        method: 'post',
        class: 'form',
    })

    $('<textarea/>',{
        name: 'textareaContent',
        id: 'textarea',
    }).css({width: '440px', height: '100px'}).appendTo($form);
    $('<button />',{
        id: 'addReplyBtn',
    }).text('Добавить отзыв').css({display: 'block'}).appendTo($form);
    $form.appendTo(wrapSelector);

    $form.on('submit', (event)=>{
        event.preventDefault();
        let text1 = $('#textarea').val();
        if (text1 === '') {return};
        let reply1 = new reply('id_user', text1, replyItemsWrap);
        basket.add('id_user', text1);
        $('#textarea').val('');
        //eventLstnr();

    });
    $('#showReview').on('click', ()=>{
        basket.showReply(replyItemsWrap);
        //eventLstnr();
    });


        $('#replyItemsWrap').on('click',(event) =>{
            let target = event.target;
           console.log(event.target.className);
            if (/*target.tagName !== 'BUTTON' &&*/ event.target.className !== 'removeBtn') {return;}
            basket.remove(target);
        })
        //console.log(`lstnr working`);
       /* let $removeReplyBtn = $('.removeBtn');

        $removeReplyBtn.on('click',(event)=> {basket.remove(event)})*/



   /* function eventLstnr(){
       console.log(`lstnr working`);
       let $removeReplyBtn = $('.removeBtn');

       $removeReplyBtn.on('click',(event)=> {basket.remove(event)})
    }
*/



})

