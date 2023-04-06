'use strict'

/*
Создать форму обратной связи с полями: Имя, Телефон, e-mail, текст, кнопка «Отправить».
** - При нажатии на кнопку «Отправить» произвести валидацию полей следующим образом:

    - Имя содержит только буквы;

** - Телефон подчиняется шаблону +7(000)000-0000;**

** - E-mail выглядит как mymail@mail.ru, или my.mail@mail.ru, или my-mail@mail.ru**

** - Текст произвольный;**
** - В случае не прохождения валидации одним из полей необходимо выделять это поле красной рамкой и сообщать пользователю об ошибке.***/

const formChecker = {
    form: document.getElementById('form'),
    btn: document.getElementById('btn'),
    regExpName: /[a-zA-Z]+/,
    regExpTel: /\+\d\((\d){3}\)(\d){3}\-(\d){4}/,
    regExpEmail: /(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2})/,
    init(){
        //$('#display').hide();
        //console.log(this.form.querySelector('#city'));
        //this.form.querySelector('#city').addEventListener('focus', (event) => this.getCitiesListener(event));
        this.getCitiesListener();
        //this.setCity();
        this.eventListener();

    },

    validator(name, tel, email){
        if(!this.regExpName.test(name)){
            document.getElementById('name').setAttribute(`style` , 'background-color: red');
            return false;
        } else if (!this.regExpTel.test(tel)){
            document.getElementById('tel').setAttribute(`style` , 'background-color: red');
            return false;
        } else if (!this.regExpEmail.test(email)){
            document.getElementById('email').setAttribute(`style` , 'background-color: red');
            return false;
        } return true;


        console.log(this.regExpName.test(name));
        console.log(this.regExpTel.test(tel));
        console.log(this.regExpEmail.test(email));

    },
    getCitiesListener(){
        $('#city').keyup((e) => {
            //$('#display').hide();
            $('#display').html('');
            //console.log($('#city').val());
            $.ajax({
                type: 'GET',
                url: 'https://raw.githubusercontent.com/aZolo77/citiesBase/master/cities.json',
                //url: './cities.json',
                dataType: 'json',
                success: (data)=> {
                    $(data.city).each((index,item)=>{
                        //console.log(item.name);
                        if(item.name.toLowerCase().startsWith($('#city').val().toLowerCase())){
                            $('#display').append(`<p>${item.name}<p>`);
                        }
                        /*if ( item.city.name.toLowerCase().startsWith($('#city').val().toLowerCase() ){
                            $('#display').append(`<p>${item.city.name}<p>`);
                        }*/
                    })
                }


                //рабочий код нативный js
                /*{
                    //console.log(data.city)
                    for (let i = 0;i<data.city.length;i++){

                        let name = data.city[i].name.toLowerCase();
                        //console.log(name);
                        if (data.city[i].name.toLowerCase().startsWith($('#city').val().toLowerCase())){
                            let span =  document.createElement('p');
                            span.innerText = `${data.city[i].name}`;
                            document.querySelector('#display').appendChild(span);
                        }
                    }
                }*/
            })

        });
        this.setCity();
    },
    setCity(){
        $('#display').on('click', (e)=>{

            $('#city').val( e.target.innerText);
            $('#display').html('');
        })
    },



    eventListener(){
       this.form.addEventListener('submit',(event)=>{
           //event.preventDefault();
            const formData = new FormData(this.form);
            const name = formData.get('name');
            const tel = formData.get('tel');
            const email = formData.get('email');
            //this.form.querySelector('#city').addEventListener('focus', (event) => this.getCitiesListener(event));
            if(!this.validator(name, tel, email)){
                event.preventDefault();
                //this.init();
            }
        })
    },
}
window.onload = () => formChecker.init();

