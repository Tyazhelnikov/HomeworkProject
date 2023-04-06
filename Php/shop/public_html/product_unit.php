<?php

require '../config/main.php';
require '../engine/core.php';

var_dump($_POST, $_FILES);

function doFeedbackAction(){
    if (isset($_GET['id']) && $_GET['id'] !== ''){
        readProduct();
    }
    else if (isset($_POST['update'],$_POST['brand'], $_POST['product_type'],$_POST['category'],$_POST['price'])
        && ($_POST['brand'] !== '' && $_POST['product_type'] !== '' && $_POST['category'] !== '' && $_POST['price']) !== '' && $_POST['update'] !== ''){
        updateProduct();
       header("Location: /products.php ");
    }
    else if (isset($_POST['remove']) && $_POST['remove'] !== ''){
        $id = $_POST['remove'];
        $id = secureData($id);
        $id = (int)$id;
        $queryRemove = "DELETE FROM `shop_hw`.`product` WHERE (`id` = {$id});";
        execute($queryRemove);
        header("Location: /products.php ");
    }
    else if (isset($_POST['add'],$_POST['brand'], $_POST['product_type'],$_POST['category'],$_POST['price'])
        && ($_POST['brand'] !== '' && $_POST['product_type'] !== '' && $_POST['category'] !== '' && $_POST['price']) !== '' && $_POST['update'] !== ''){
        addProduct();
        header("Location: /products.php ");
    }
}
function readProduct(){
    $id = $_GET['id'];
    $id = secureData($id);
    $query = "SELECT product.id, brand.type as `brand`, product_type.type as `type`, category.Name as `gender`, price, img_path FROM shop_hw.product
inner join shop_hw.brand on product.brand_id = brand.id
inner join shop_hw.product_type on product.product_type_id = product_type.id
inner join shop_hw.category on product.category_id = category.id";
//where product.id = $id;";
    $queryBrand = "SELECT * FROM shop_hw.brand";
    $queryProductType = "SELECT * FROM shop_hw.product_type";
    $queryCategory = "SELECT * FROM shop_hw.category";
    $data['brand']  = getItemArray($queryBrand);
    $data['product_type'] = getItemArray($queryProductType);
    $data['category']  = getItemArray($queryCategory);
    $data['content'] = getItemArray($query);
    $data['element_content'] = getItem($query . " where product.id = $id");
    echo render('site/product_single',$data,true,'layout_products');
}

function updateProduct(){
    $id = $_POST['update'];
    $id = secureData($id);
    $id = (int)$id;
    $productBrand = $_POST['brand'];
    $productBrand = secureData($productBrand);
    $productType = $_POST['product_type'];
    $productType = secureData($productType);
    $productType = (int) $productType;
    $category = $_POST['category'];
    $category = secureData($category);
    $price = $_POST['price'];
    $price = secureData($price);
    $price = (int) $price;
    $queryUpdate = "UPDATE `shop_hw`.`product` SET `brand_id` = {$productBrand}, `product_type_id` = {$productType}, `category_id` = {$category}, `price` = {$price}  WHERE (`id` = {$id});";
    var_dump($queryUpdate);
    if (isset($_FILES['product_img']) && $_FILES['product_img']['size'] !== 0){
        move_uploaded_file($_FILES['product_img']['tmp_name'], "./images/uploaded/". $_FILES['product_img']['name']);
        $filePath = "'/images/uploaded/{$_FILES['product_img']['name']}'";

        $queryUpdateFile = "UPDATE `shop_hw`.`product` SET `brand_id` = {$productBrand}, `product_type_id` = {$productType}, `category_id` = {$category}, `price` = {$price}, `img_path` = {$filePath}  WHERE (`id` = {$id});";
        var_dump($queryUpdateFile);
        execute($queryUpdateFile);
        //readProduct();
    }
    else execute($queryUpdate);
   // readProduct();

}

function addProduct(){
    $productBrand = $_POST['brand'];
    $productBrand = secureData($productBrand);
    $productType = $_POST['product_type'];
    $productType = secureData($productType);
    $productType = (int) $productType;
    $category = $_POST['category'];
    $category = secureData($category);
    $price = $_POST['price'];
    $price = secureData($price);
    $price = (int) $price;
    if (isset($_FILES['product_img']) && $_FILES['product_img']['size'] !== 0){
        move_uploaded_file($_FILES['product_img']['tmp_name'], "./images/uploaded/". $_FILES['product_img']['name']);
        $filePath = "'/images/uploaded/{$_FILES['product_img']['name']}'";

        $queryAddFile = "INSERT INTO `shop_hw`.`product` (`brand_id`, `product_type_id`, `category_id`, `price`, `img_path`) VALUES ({$productBrand}, {$productType}, {$category}, {$price}, {$filePath});";
        var_dump($queryAddFile);
        execute($queryAddFile);

    } else echo "file is not found or incorrect !";
}

function secureData($data){
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}

doFeedbackAction();


//var_dump($data);

