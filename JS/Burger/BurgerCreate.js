'use strict'
const burgerCreate = {


    init(){
        this.eventHandler();


    },


    eventHandler() {
        let form = document.getElementById('form');
        form.addEventListener('submit', (event) => {

            event.preventDefault();
            let formData = new FormData(form);
            let size = formData.get('burgerSize');
            let type = formData.get('burgerType');
            let add = formData.getAll('addition');
            let BurgerParam = {size, type, add};
            this.BurgerCreate(BurgerParam);
            //return BurgerParam;
        })
    },


    BurgerCreate(BurgerParam) {



        const burger = new Burger(BurgerParam.size, BurgerParam.type, BurgerParam.add);
        console.log(`Burger price - ${burger.countPrice()}, Burger calories - ${burger.countEnergy()}`);
        return burger;

    }
}