<?php /* var_dump($data['content']);*/?>
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
    <div class="content_wrap">
        <div class="main_content_product_menu_wrap">
            <ul class="main_content_product_menu__category"><span>category</span>
                <li><a href="#">accessories</a></li>
                <li><a href="#">bags</a></li>
                <li><a href="#">denim</a></li>
                <li><a href="#">hoodies & sweatshirts</a></li>
                <li><a href="#">jackets & coats</a></li>
                <li><a href="#">pants</a></li>
                <li><a href="#">polos</a></li>
                <li><a href="#">shirts</a></li>
                <li><a href="#">shoes</a></li>
                <li><a href="#">shorts</a></li>
                <li><a href="#">sweaters & knits</a></li>
                <li><a href="#">t-shirts</a></li>
                <li><a href="#">tanks</a></li>
            </ul>
            <ul class="main_content_product_menu__category"><span>brand</span></ul>
            <ul class="main_content_product_menu__category"><span>designer</span></ul>
        </div>
        <div class="main_content_wrap">
            <div class="main_content_form_wrap">
                <div class="main_content_form_btnz">
                    <form action="#" method="post">
                        <p>trending now</p>
                        <button value="bohemian">bohemian</button>
                        <button value="floral">floral</button>
                        <button value="lace">lace</button>
                        <button value="floral">floral</button>
                        <button value="lace">lace</button>
                        <button value="bohemian">bohemian</button>
                    </form>
                </div>
                <div class="main_content_form_checkbox">
                    <form class="main_content_form_checkbox" method="post" action="#">
                        <p>size</p>
                        <input id="xxs" type="checkbox" value="xxs">
                        <label for="xxs">xxs</label>
                        <input id="xs" type="checkbox" value="xs">
                        <label for="xs">xs</label>
                        <input id="s" type="checkbox" value="s">
                        <label for="s">s</label>
                        <input id="m" type="checkbox" value="m">
                        <label for="m">m</label>
                        <input id="l" type="checkbox" value="l">
                        <label for="l">l</label>
                        <input id="xl" type="checkbox" value="xl">
                        <label for="xl">xl</label>
                        <input id="xxl" type="checkbox" value="xxl">
                        <label for="xxl">xxl</label>
                    </form>
                </div>
                <div class="main_content_form_range">
                    <form oninput="result.value=(price.value)" class="main_content_form_range" method="post" action="#">
                        <p>price</p>
                        <input name="price" id="price" type="range" step="1" value="52" max="500" min="0">
                        <p>$
                            <output name="result" for="price">52</output>
                        </p>
                    </form>
                </div>
                <div class="main_content_form_settings">
                    <form action="#" method="post">
                        <label for="sort_by">sort by</label>
                        <select id="sort_by">
                            <option>name</option>
                        </select>
                    </form>
                    <form action="#" method="post">
                        <label for="show">show</label>
                        <select id="show">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="product_page_product_wap">
                <?php foreach ($data['content'] as $key => $value) {  ?>
                <div id="<?=$value['id'] ?>" class="product_container_2">
                    <a target="_blank" href="product_unit.php?id=<?=$value['id']?>">
                    <img src="<?=$value['img_path'] ?>"></a>
                    <p class="mango_tshirt"><?=$value['type'] . "  " . $value['brand'] . "  " . mb_substr($value['gender'], 0,3) ?></p>
                    <p class="price"><?=(int) $value['price'] .  "$" ?></p>
                </div>
                <?php }?>
            </div>
            <div class="pagination">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <button>view all</button>
            </div>
        </div>
    </div>
    <div class="prefooter_offers">
        <div class="top_container_1">
            <img src="images/lorry.png">
            <p class="sider_head">free delivery</p>
            <p class="sider_bot">Worldwide delivery on all. Autorit<br>
                tively morph next-generation innov<br>
                ation with extensive models
            </p>
        </div>
        <div class="middle_container_1">
            <img src="images/crown.png">
            <p class="sider_head">sales & discounts</p>
            <p class="sider_bot">Worldwide delivery on all. Autorit<br>
                tively morph next-generation innov<br>
                ation with extensive models
            </p>
        </div>
        <div class="bottom_container_1">
            <img src="images/star.png">
            <p class="sider_head">quality assurance</p>
            <p class="sider_bot">Worldwide delivery on all. Autorit<br>
                tively morph next-generation innov<br>
                ation with extensive models
            </p>
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
