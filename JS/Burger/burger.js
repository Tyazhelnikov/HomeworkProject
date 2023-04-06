'use strict'

/**
 * Программа рассчитывает калории в зависимости от начинки и выводит результат в консоль.
 */

class Burger {
    prices;
    calories;
    constructor(size, type, addition) {
        this.size = size;
        this.type = type;
        this.addition = addition;
        //this.price = price;
        //this.calories = calories;
        this.prices = {
            size: {
                small: 50,
                big: 100,
            },
            type: {
                cheese: 10,
                salad: 20,
                potato: 15,
            },
            addition: {
                'spice': 15,
                'sauce': 20,
            },

        }
        this.calories = {
            size: {
                small: 20,
                big: 40,
            },
            type: {
                cheese: 20,
                salad: 5,
                potato: 10,
            },
            addition: {
                spice: 0,
                sauce: 5,
            },

        }
    }



    countPrice(){
        //console.log(this.size, this.type, this.addition);
        let result = this.prices.size[this.size] + this.prices.type[this.type];
        for (let val of this.addition){
            result += this.prices.addition[val];
        }
        return  result;
    }

    countEnergy(){
        let result = this.calories.size[this.size] + this.calories.type[this.type];
        for (let val of this.addition){
            result += this.calories.addition[val];
        }
        return  result;

    }


}