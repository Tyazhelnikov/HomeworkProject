<?php

require '../config/main.php';
require '../engine/core.php';



$data['content'] = getItemArray("SELECT product.id, brand.type as `brand`, product_type.type as `type`, category.Name as `gender`, price, img_path FROM shop_hw.product
inner join shop_hw.brand on product.brand_id = brand.id
inner join shop_hw.product_type on product.product_type_id = product_type.id
inner join shop_hw.category on product.category_id = category.id
;");

echo render('site/product_list',$data,true,'layout_products');

