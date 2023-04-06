class Basket
{
    constructor(idBasket)
    {
        this.id = idBasket;

        this.countGoods = 0; //Общее кол-во товаров в корзине
        this.amount = 0; //Общая стоимость товаров
        this.basketItems = []; //Массив для хранения товаров

        //Получаем уже добавленные в корзину товары
        this.getBasket();
    }

    render($jQueryElement)
    {
        let $basketDiv = $('<div />', {
            id: this.id,
            text: 'Корзина'

        });

        let $basketItemsDiv = $('<div />', {
            id: `${this.id}_items`
        });

        $basketItemsDiv.appendTo($basketDiv);
        $basketDiv.appendTo($jQueryElement);
    }

    getBasket()
    {
        let appendId = `#${this.id}_items`;
        //let self = this;
        $.ajax({
            type: 'GET',
            url: './json/basket_get.json',
            context: this,
            success: function (data) {
                let $basketData = $('<div />', {
                    id: 'basket_data'
                });

                this.countGoods = data.basket.length;
                this.amount = data.amount;

                for (let key in data.basket)
                {
                    this.basketItems.push(data.basket[key]);
                }

                $basketData.append(`<p>Всего товаров: ${this.countGoods}</p>`);
                $basketData.append(`<p>Общая сумма: ${this.amount}</p>`);
                $basketData.appendTo(appendId);
            }
            ,
            error: function (error) {
                console.log('Произошла ошибка при получении данных', error);
            },
            dataType: 'json'
        });
    }

    add(id_product, price){
        let basketNewItem = {
            id_product,
            price //price: price
        };

        this.basketItems.push(basketNewItem);
        this.countGoods++;
        this.amount += price; //this.amount = this.amount + price;
        this.refresh(); //Перерисовываем корзину
    }

    //TODO - удаление товара из корзины
    remove(idProduct, price)
    {   let basketRemovedItem = {
        id_product: idProduct,
        price: price,
    }
        //console.log(this.basketItems);
        if (this.basketItems.length > 0 && JSON.stringify(this.basketItems).includes(JSON.stringify(basketRemovedItem))){
            for (let val in this.basketItems){
                if(this.basketItems[val].id_product === basketRemovedItem.id_product){
                    this.basketItems.splice(val, 1);
                    this.countGoods--;
                    this.amount -= basketRemovedItem.price;
                    this.refresh();
                    return;
                }
            }

        }  console.log('товар в корзине не найден !');

    }

    refresh()
    {
        let $basketData = $('#basket_data');
        $basketData.empty(); //Очищаем содержимое контейнера
        $basketData.append(`<p>Всего товаров: ${this.countGoods}</p>`);
        $basketData.append(`<p>Общая сумма: ${this.amount}</p>`);
    }
}