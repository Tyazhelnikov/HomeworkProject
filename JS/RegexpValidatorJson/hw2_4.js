"use strict"

/*
* 1) С помощью jQuery создать контрол, работающий с вкладками.
Пример – http://dimox.name/examples/universal-jquery-tabs-script/ .
Можно использовать любую анимацию, методы show, hide и подобные. Код примера желательно не смотреть.

2) В форму обратной связи добавить возможность выбора города обращения. Сам список должен загружаться после загрузки страницы через AJAX.
3) * Список из п.2 превратить в текстовое поле-автокомплит. Если пользователь ввел три и более символов, нужно подгрузить
* список городов и показать подходящие по вводу. При клике на подходящий город ввести его полное название в текстовое поле.*/

const tab = {
    $wrap: $('.contentWrapper'),
    $mainWrapper: $('.tabWrapper'),
    init(){
        this.render();
        this.eventListener();

    },
    cleaner(){
      this.$wrap.each(function (index, item){
          $(item).removeClass('active');
      })
    },

    render(targetElem){
        $('div').eq(targetElem).show();
        $('div').eq(targetElem).addClass('active');
        console.log($('div').eq(targetElem));
        this.$wrap.each(function (index, item){
            if(!$(item).hasClass('active')){
                $(item).hide();
            }

        })
    },

    eventListener(){
        $('li').on('click',  (Event) => {
            this.cleaner();
            //console.log(Event.target.id);
            this.render(Event.target.id);
        })
    },
}

window.onload = () => tab.init();



