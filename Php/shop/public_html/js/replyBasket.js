'use strict';

class replyBasket {
    constructor(idReplyBasket) {
        this.id = idReplyBasket;
        this.replyStorage = [];
        this.countReps = 0;
        this.getReply();
        //this.eventLsn();

    }
    /*eventLsn(){
        let $removeReplyBtn = $('.removeBtn');
        $removeReplyBtn.on('click', (event)=> {
            console.log(event);
            this.remove(event)});
    }*/

    refresh(selector){
       $(selector).empty();
       //console.log(this.replyStorage);
    }

    showReply(wrapSelector){
        this.refresh(wrapSelector);
        for (let i=0;i<this.replyStorage.length;i++){
            let userReply = new reply(this.replyStorage[i].id_comment, this.replyStorage[i].text, wrapSelector);
        }
    }

    render(rootElem) {
        let $getReplyBtn = $('<button />',{
            id: 'showReview',
        }).text('Показать отзывы');

       let replyWrap = $('<div />',{
            id: `${this.id}_item`,
        });
       $getReplyBtn.appendTo(rootElem);
       //$addReplyBtn.appendTo(rootElem);
       replyWrap.appendTo(rootElem);

    }
    add(id_comment, text){
        let basketNewItem = {
            id_comment,
            text,
        };
        this.replyStorage.push(basketNewItem);
        this.countReps++;
    }

    remove(targetElem){

       //console.log($(targetElem.parentNode));
        let target = $(targetElem.parentNode);
        console.log(target);
        let basketRemovedItem = {
            id_comment: target.attr('data_id'),
            text:   target.find('#replyText').text(),
        };
        console.log(basketRemovedItem, this.replyStorage);
       if (this.replyStorage.length > 0 && JSON.stringify(this.replyStorage).includes(JSON.stringify(basketRemovedItem))){
           for (let val in this.replyStorage){
            if(this.replyStorage[val].id_comment === basketRemovedItem.id_comment && this.replyStorage[val].text === basketRemovedItem.text){
                this.countReps--;
                this.replyStorage.splice(val, 1);
                //console.log(basketRemovedItem, this.replyStorage);
                target.remove();
                return;
            }
           }
       }
    }

    getReply(){
        let storageSelector = `#${this.id}_item`;
        $.ajax({
            type: 'GET',
            url: './json/review.list.json',
            context: this,
            success:  function  (data) {

                for (let i = 0;i < data.comments.length;i++){
                    let $comments =  $('<div />',{
                        class: 'reply',
                        id: `${data.comments[i].id_comment}`,
                    });
                    this.replyStorage.push(data.comments[i]);
                    //let $content = $('<span />').text(`${data.comments[i].text}`);
                    //$comments.append($content);
                    //$comments.appendTo(storageSelector);
                }
            },
            error: function (error){ console.log(error, `Ошибка получения отзыва `)},
            dataType: 'json',
        })
    }
}