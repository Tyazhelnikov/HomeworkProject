'use strict'

class reply {
    constructor(id_user, text, rootElement){
        this.id_user = id_user;
        this.text = text;
        this.rootElement = rootElement;
        //this.id = id;
        this.render(this.rootElement);
       // this.eventLSTNR();

    }

   /* eventLSTNR(){
        let $removeBtn = $('.removeBtn');
        $removeBtn.on('click', function (event){
            console.log(event);
        })
    }*/
    render(rootElement){
        //console.log(this.id_user, this.text);
        let $replyContainer = $('<div />',{
            class: 'reply',
            data_id: `${this.id_user}`,
        });

        let $userName = $(`<p>Имя пользователя: ${this.id_user}</p>`,{
            id:  this.id_user,
        });

        let $replyText = $(`<p/>`,{
            id: 'replyText',
        }).text(`${this.text}`);

        let $removeBtn = $(`<button/>`,{
            //data_id: this.id_user,
            class: 'removeBtn',

        }).text('Удалить Отзыв');
        let $applyBtn = $(`<button/>`,{
            //data_id: this.id_user,
            class: 'applyBtn',
        }).text('Одобрить Отзыв');

        $replyContainer.append($userName);
        $replyContainer.append($replyText);
        $replyContainer.append($removeBtn);
        $replyContainer.append($applyBtn);
        $replyContainer.appendTo(rootElement);
    }


}