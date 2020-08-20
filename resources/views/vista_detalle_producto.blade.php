@extends('layout_detalle_producto')


@section('pagina')

<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="/">INICIO</a>
                    <i>|</i>
                </li>
                <li>Detalle</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

@endsection

@section('producto')



<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>P</span>roducto
            <span>V</span>enta</h3>
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/si1.jpg">
                                <div class="thumb-image">
                                    <img src="images/si1.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>
                            <li data-thumb="images/si2.jpg">
                                <div class="thumb-image">
                                    <img src="images/si2.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>
                            <li data-thumb="images/si3.jpg">
                                <div class="thumb-image">
                                    <img src="images/si3.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3">NOMBRE PRODUCTO</h3>
                <p class="mb-3">
                    <span class="item_price">$200.00</span>
                    <del class="mx-2 font-weight-light">$280.00</del>
                    <label>CODIGO PRODUCTO</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li class="mb-3">
                            ALMACEN
                        </li>
                        <li class="mb-3">
                            CATEGORIO
                        </li>
                        <li class="mb-3">
                            FABRICANTE
                        </li>
                        <li class="mb-3">
                            DESCRIPCIÓN
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <p class="my-3">
                        <i class="far fa-hand-point-right mr-2"></i>
                        <label>1 Year</label>Manufacturer Warranty</p>
                    <ul>
                        <li class="mb-1">
                            MODELO
                        </li>
                        <li class="mb-1">
                            5.5 inch Full HD Display
                        </li>
                        <li class="mb-1">
                            13MP Rear Camera | 8MP Front Camera
                        </li>
                        <li class="mb-1">
                            3300 mAh Battery
                        </li>
                        <li class="mb-1">
                            Exynos 7870 Octa Core 1.6GHz Processor
                        </li>
                    </ul>
                    <p class="my-sm-4 my-3">
                        <i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
                        
                        <div class="entry value">
                                <span>160</span>
                            </div>                    
                    <strong>Artículos disponibles</strong>
                    <br>
                    <br>
                                                
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime" />
                                <input type="hidden" name="amount" value="200.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <h3 class="mb-3">MODELOS COMPATIBLES</h3>
        <br>
        <div class="table-responsive">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>MARCA</th>
                        <th>MODELO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="rem1">
                        <td class="invert">Toyota</td>
                        <td class="invert">Camry</td>
                    </tr>
                    <tr class="rem1">
                        <td class="invert">Volkswagen</td>
                        <td class="invert">Passat Diessel 2.0 272 ( 2020 )</td>
                    </tr>
                    <tr class="rem1">
                        <td class="invert">Volkswagen</td>
                        <td class="invert">Golf</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <h3 class="mb-3">PRODUCTOS SIMILARES</h3>
        <br>

        <!-- second section -->
        <div class="">
            <h3 class="heading-tittle text-center font-italic"></h3>
            <div class="row">
                <div class="col-md-3 product-men mt-3">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="images/m4.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="single.html">Sony 80 cm (32 inches)</a>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">$320.00</span>
                                <del>$340.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
                                        <input type="hidden" name="amount" value="320.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men mt-3">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="images/m5.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="single.html">Artis Speaker</a>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">$349.00</span>
                                <del>$399.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Artis Speaker" />
                                        <input type="hidden" name="amount" value="349.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men mt-3">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="images/m6.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="single.html">Philips Speakers</a>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">$249.00</span>
                                <del>$300.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Philips Speakers" />
                                        <input type="hidden" name="amount" value="249.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men mt-3">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <img src="images/m6.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <a href="single.html">Philips Speakers</a>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">$249.00</span>
                                <del>$300.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Philips Speakers" />
                                        <input type="hidden" name="amount" value="249.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //second section -->

    </div>
</div>
<!-- //Single Page -->

@endsection