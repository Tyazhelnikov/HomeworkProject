<header>
    <nav>
        <div class="search_menu_wrap">
            <div class="brand_logo">
                <a href="index.php">
                    <img src="images/Group2.jpg">
                </a>
            </div>
            <div class="brand_name">
                <a href="index.php">
                    <img src="images/BRAND.png">
                </a>
            </div>
            <div class="search_form_wrap">
                <div class="search_form_wrap__details_wrap">
                    <details  class="search_form_wrap__details_wrap__browse">
                        <summary class="search_form_wrap__details_wrap__browse__summary">browse</summary>
                        <ul class="search_form__ul"> <p>women</p>
                            <li> <a href="#">tops</a> </li>
                            <li> <a href="#">sweaters/knifts</a> </li>
                            <li> <a href="#">jackets/coats</a> </li>
                            <li> <a href="#">blazers</a> </li>
                            <li> <a href="#">denim</a> </li>
                            <li> <a href="#">leggins/pants</a> </li>
                            <li> <a href="#">skirts/shorts</a> </li>
                            <li> <a href="#">accessories</a> </li>
                        </ul>
                        <ul class="search_form__ul"><p>men</p>
                            <li> <a href="#">tees/tank tops</a> </li>
                            <li> <a href="#">shirts/polos</a> </li>
                            <li> <a href="#">sweaters</a> </li>
                            <li> <a href="#">sweatshirts/hoodies</a> </li>
                            <li> <a href="#">blazers</a> </li>
                            <li> <a href="#">jackets/vests</a> </li>
                        </ul>
                    </details>
                </div>
                <form class="search_form" method="get" action="#">
                    <input class="search_form_field" type="search" placeholder="Search for item">
                    <button class="search_form_field__btn" type="submit" value="">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="buy_box">
                <img src="images/Forma1.png">

            </div>
            <div class="buy_form_wrap">
                <details>
                    <summary>My account</summary>
                </details>

            </div>
        </div>
        <div class="top_menu_wrap">
            <div class="top_menu">
                <div class="top_menu__home">
                    <a href="index.php">home</a>
                    <div class="top_menu__home__indicator"></div>
                </div>
                <div class="top_menu__man">
                    <a href="index.php">man</a>
                    <div class="top_menu__man__indicator"></div>
                </div>
                <div class="top_menu__woman">
                    <a href="index.php">woman</a>
                    <div class="top_menu__woman__indicator"></div>
                </div>
                <div class="top_menu__kids">
                    <a href="index.php">kids</a>
                    <div class="top_menu__kids__indicator"></div>
                </div>
                <div class="top_menu__accessories">
                    <a href="index.php">accessories</a>
                    <div class="top_menu__accessories__indicator"></div>
                </div>
                <div class="top_menu__featured">
                    <a href="index.php">featured</a>
                    <div class="top_menu__featured__indicator"></div>
                </div>
                <div class="top_menu__hot_deals">
                    <a href="index.php">hot deals</a>
                    <div class="top_menu__hot_deals__indicator"></div>

                </div>
            </div>
        </div>
    </nav>
    <div class="new_arrivals">
        <p class="new_arrivals__descriptioin">new arrivals</p>
        <div class="new_arrivals__menu">
            <ul>
                <li><a class="new_arrivals__menu__home" href="#">home</a> </li>
                <li><a class="new_arrivals__menu__men" href="#">men</a> </li>
                <li><a class="new_arrivals__menu__new" href="#">new arrivals</a></li>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="main_content_wrap">
        <div class="carousel_wrap">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $data['element_content']['img_path']?>" alt="Third slide">

                    </div>
                    <!--<div class="carousel-item">
                        <img class="d-block w-100" src="images/Layer42.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/Layer42.png" alt="Third slide">
                    </div>-->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="women_collection_buy_wrap">
            <a href="#" class="women_collection_buy_wrap_header">
                women collection
                <div class="women_collection_buy_wrap_header__indicator"></div>
            </a>
            <span class="women_collection_buy_wrap_header__unit">moschino cheap and chick</span>
            <p class="women_collection_buy_wrap_header__description">Compellingly actualize fully researched
                processes before proactive outsourcing. Progressively syndicate<br> collaborative architectures
                before cutting-edge services. Completely visualize parallel core competencies<br>
                rather than exceptional portals.
            </p>
            <span class="women_collection_buy_wrap_header__description__material">
                    material:<span class="women_collection_buy_wrap_header__description__material__unit">cotton</span>
                </span>
            <span class="women_collection_buy_wrap_header__description__designer">
                    designer:<span class="women_collection_buy_wrap_header__description__designer__unit">bin burhan</span>
                </span>
            <p class="women_collection_buy_sum"> <?=  $data['element_content']['type'] . ' ' . $data['element_content']['brand'] ?></p>
            <p class="women_collection_buy_sum">Price <?= (int) $data['element_content']['price']?>$</p>
            <div class="women_collection_form_wrap">
                <form action="#" method="post">
                    <div class="women_collection_form__color">
                        <label for="color">choose color</label><br>
                        <select required id="color" name="color">
                            <option>red</option>
                            <option>green</option>
                            <option>blue</option>
                        </select>
                    </div>
                    <div class="women_collection_form__size">
                        <label for="size">choose size</label><br>
                        <select required id="size" name="size">
                            <option>xs</option>
                            <option>s</option>
                            <option>m</option>
                            <option>l</option>
                            <option>xl</option>
                            <option>xxl</option>
                            <option>xxxl</option>
                        </select>
                    </div>
                    <div class="women_collection_form__quanity">
                        <label for="quanity">quanity</label><br>
                        <input id="quanity" name="quanity" type="number" max="50" min="1" required>
                    </div>
                    <input class="women_collection_form__btn" type="submit" value="add to cart">
                </form>
            </div>
        </div>
        <div class="form_control_wrap">
            <form enctype="multipart/form-data" action="product_unit.php"  method="post" class="control" >
                <p>Select a brand name</p>
                <select name="brand" class="form-select" aria-label="Default select example">
                    <?php foreach ($data['brand'] as $key => $value){ ?>
                    <option value="<?= $value['id']?>"><?= $value['type']?></option>
                    <?php } ?>
                </select>
                <p>Select a product type</p>
                <select name="product_type" class="form-select" aria-label="Default select example">
                    <?php foreach ($data['product_type'] as $key => $value){ ?>
                        <option value="<?= $value['id']?>"><?= $value['type']?></option>
                    <?php } ?>
                </select>
                <p>Select a product category</p>
                <select name="category" class="form-select" aria-label="Default select example">
                    <?php foreach ($data['category'] as $key => $value){ ?>
                        <option value="<?= $value['id']?>"><?= $value['Name']?></option>
                    <?php } ?>
                </select><br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input name="price" type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input name="product_img" class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <button name="add"  type="submit" class="btn btn-primary">Add Product</button>
                <button name="update"  value="<?= $data['element_content']['id'] ?>" type="submit" class="btn btn-success">Update product</button>
                <button name="remove" value="<?= $data['element_content']['id'] ?>" type="submit" class="btn btn-danger">Delete product</button>
            </form>
        </div>

        <hr>
        <p class="also_like">you may like also</p>
        <div class="product_wrap">
            <div class="product_container">
                <img src="images/Layer44.jpg">
                <p class="mango_tshirt">blaze leggins</p>
                <p class="price">$52.00</p>
            </div>
            <div class="product_container">
                <img src="images/Layer45.jpg">
                <p class="mango_tshirt">alexa sweater</p>
                <p class="price">$52.00</p>
            </div>
            <div class="product_container">
                <img src="images/Layer46.jpg">
                <p class="mango_tshirt">agnes top</p>
                <p class="price">$52.00</p>
            </div>
            <div class="product_container">
                <img src="images/Layer47.jpg">
                <p class="mango_tshirt">silva sweater</p>
                <p class="price">$52.00</p>
            </div>
        </div>

    </div>
</main>
<footer>
    <div class="footer_wrap">
        <div class="footer_subscribe">
            <img src="images/Subscribe.jpg">
            <div class="footer_subscribe__logo">
                <img src="images/Layer40.png">
            </div>
            <div class="footer_subscribe__quote">
                        <span>Vestibulum quis porttitor dui! Quisque viverra nunc mi,<br>
                        a pulvinar purus condimentum a. Aliquam condimentum <br>
                        mattis neque sed pretium”</span>
                <p>bin burhan</p>
                <span>Dhaka,Bd </span>
            </div>
            <div class="footer_subscribe__header">
                <p>subscribe</p>
                <span>for our newsteller and promotion</span>
            </div>
            <div class="footer_subscribe__form">
                <form method="post" action="index.php">
                    <input class="footer_subscribe__form__field" type="email" placeholder="enter your email">
                    <input class="footer_subscribe__form__btm" value="Subscribe" type="submit">
                </form>
            </div>
        </div>
        <div class="footer_menu_wrap">
            <div class="brand_logo">
                <a href="index.php">
                    <img src="images/Logo_copy.png">
                </a>

            </div>
            <div class="underbrand_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto atque expedita facilis
                molestias natus obcaecati provident reiciendis. Deleniti dolores eos explicabo fuga in ipsum iusto
                labore maxime natus necessitatibus nisi, obcaecati odit omnis porro quasi quod reprehenderit saepe
                sapiente suscipit tempora temporibus veniam vitae voluptate. Nihil sed tempora temporibus.
            </div>
            <div class="company">
                <p>company</p>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="index.php">shop</a></li>
                    <li><a href="index.php">about</a></li>
                    <li><a href="index.php">how it works</a></li>
                    <li><a href="index.php">contact</a></li>
                </ul>
            </div>
            <div class="information">
                <p>information</p>
                <ul>
                    <li><a href="index.php">terms & conditions</a></li>
                    <li><a href="index.php">privacy pollicy</a></li>
                    <li><a href="index.php">how to buy</a></li>
                    <li><a href="index.php">how to sell</a></li>
                    <li><a href="index.php">promotion</a></li>
                </ul>
            </div>
            <div class="shop_category">
                <p>shop category</p>
                <ul>
                    <li><a href="index.php">men</a></li>
                    <li><a href="index.php">women</a></li>
                    <li><a href="index.php">child</a></li>
                    <li><a href="index.php">apparel</a></li>
                    <li><a href="index.php">browse all</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_social_wrap">
            <p class="copyright">&#169; 2017 brand all rights reserved</p>
            <div class="social_icon__wrap">
                <div class="social_icon">
                    <a class="facebook" href="https://www.facebook.com/">
                        <img src="images/facebook.png">
                    </a>
                </div>
                <div class="social_icon">
                    <a class="twitter" href="https://twitter.com/?lang=ru">
                        <img src="images/twitter.png">
                    </a>
                </div>
                <div class="social_icon">
                    <a class="insta" href="https://www.instagram.com/">
                        <img src="images/in.png">
                    </a>
                </div>
                <div class="social_icon">
                    <a class="pin" href="https://ru.pinterest.com/">
                        <img src="images/p.png">
                    </a>
                </div>
                <div class="social_icon">
                    <a class="gplus" href="https://plus.google.com/discover">
                        <img src="images/gplus.png">
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>
