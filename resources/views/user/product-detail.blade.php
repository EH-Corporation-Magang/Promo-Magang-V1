<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('parcial.styleuser')

</head>

<body>

    <!-- LOADER -->
    <div id="loader">
        <div class="position-center-center">
            <div class="ldr"></div>
        </div>
    </div>

    <!-- Wrap -->
    <div id="wrap">

        <!-- header -->
        <header>
            @include('parcial.navbaruser')
        </header>
        <!-- Content -->
        <div id="content">

            <!-- Popular Products -->
            <section class="padding-bottom-100">
                <div class="container">

                    <!-- SHOP DETAIL -->
                    <div class="shop-detail">
                        <div class="row">

                            <!-- Popular Images Slider -->
                            <div class="col-md-7">

                                @foreach($detail as $d)

                                <!-- Images Slider -->
                                <div class="images-slider">
                                    <ul class="slides">
                                        <li data-thumb="{{asset('image/' . $d->image)}}"> <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt=""> </li>
                                        <li data-thumb="{{asset('image/' . $d->image)}}"> <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt=""> </li>
                                        <li data-thumb="{{asset('image/' . $d->image)}}"> <img class="img-responsive" src="{{asset('image/' . $d->image)}}" alt=""> </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- COntent -->
                            <div class="col-md-5">
                                <h4>{{ $d->title}}</h4>
                                <span class="price"><small>Rp.</small>{{ $d->price}}</span>

                                <!-- Sale Tags -->
                                <div class="on-sale" style="margin-right: -40px;"> 10% <span>OFF</span> </div>
                                <ul class="item-owner">
                                    <li>Category Promo:
                                        <span>
                                            @foreach($d->Kategori as $item)
                                            {{$item->nama_kategori}}
                                            @endforeach
                                        </span>
                                    </li>
                                    <li>Category Goods:
                                        <span>
                                            @foreach($d->KategoriBarang as $item)
                                            {{$item->kategori_barang}}
                                            @endforeach
                                        </span>
                                    </li>
                                </ul>

                                <!-- Item Detail -->
                                <p>{{ $d->deskripsi}}</p>

                                @endforeach

                                <!-- Short By -->
                                <div class="some-info">
                                    <ul class="row margin-top-30">
                                        <li class="col-xs-4">
                                            <div class="quinty">
                                                <!-- QTY -->
                                                <select class="selectpicker">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="row">
                                        <!-- ADD TO CART -->
                                        <li class="col-xs-6"> <a href="#." class="btn">ADD TO CART</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--======= PRODUCT DESCRIPTION =========-->
                    <div class="item-decribe">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
                            <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                            <li role="presentation"><a href="#review" role="tab" data-toggle="tab">REVIEW (03)</a></li>
                            <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">INFORMATION</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content animate fadeInUp" data-wow-delay="0.4s">
                            <!-- DESCRIPTION -->
                            <div role="tabpanel" class="tab-pane fade in active" id="descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed lectus id nisi interdum mollis. Nam congue tellus quis elit mattis congue. Aenean eu massa sed mauris hendrerit ornare sed eget ante.
                                    Vestibulum id eros quam. Nunc volutpat at magna gravida eleifend. Phasellus sit amet nisi tempus, tincidunt elit ac, tempor metus. <br>
                                </p>
                                <h6>THE SIMPLE FACTS</h6>
                                <ul>
                                    <li>
                                        <p>Praesent faucibus, leo vitae maximus dictum,</p>
                                    </li>
                                    <li>
                                        <p> Donec porta ut lectus </p>
                                    </li>
                                    <li>
                                        <p> Phasellus maximus velit id nisl</p>
                                    </li>
                                    <li>
                                        <p> Quisque a tellus et sapien aliquam sus</p>
                                    </li>
                                    <li>
                                        <p> Donec porta ut lectus </p>
                                    </li>
                                    <li>
                                        <p> Phasellus maximus velit id nisl</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- REVIEW -->
                            <div role="tabpanel" class="tab-pane fade" id="review">
                                <h6>3 REVIEWS FOR SHIP YOUR IDEA</h6>

                                <!-- REVIEW PEOPLE 1 -->
                                <div class="media">
                                    <div class="media-left">
                                        <!--  Image -->
                                        <div class="avatar"> <a href="#"> <img class="media-object" src="asset/images/avatar-1.jpg" alt=""> </a> </div>
                                    </div>
                                    <!--  Details -->
                                    <div class="media-body">
                                        <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            labore et dolore magna aliqua.”</p>
                                        <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                                    </div>
                                </div>

                                <!-- REVIEW PEOPLE 1 -->

                                <div class="media">
                                    <div class="media-left">
                                        <!--  Image -->
                                        <div class="avatar"> <a href="#"> <img class="media-object" src="asset/images/avatar-2.jpg" alt=""> </a> </div>
                                    </div>
                                    <!--  Details -->
                                    <div class="media-body">
                                        <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            labore et dolore magna aliqua.”</p>
                                        <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                                    </div>
                                </div>

                                <!-- ADD REVIEW -->
                                <h6 class="margin-t-40">ADD REVIEW</h6>
                                <form>
                                    <ul class="row">
                                        <li class="col-sm-6">
                                            <label> *NAME
                                                <input type="text" value="" placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-6">
                                            <label> *EMAIL
                                                <input type="email" value="" placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-sm-12">
                                            <label> *YOUR REVIEW
                                                <textarea></textarea>
                                            </label>
                                        </li>
                                        <li class="col-sm-6">
                                            <!-- Rating Stars -->
                                            <div class="stars"> <span>YOUR RATING</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                        </li>
                                        <li class="col-sm-6">
                                            <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POST REVIEW</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>

                            <!-- TAGS -->
                            <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Popular Products -->
            <section class="light-gray-bg padding-top-150 padding-bottom-150">
                <div class="container">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>OTHER PROMO</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                            Sed feugiat, tellus vel tristique posuere, diam</span>
                    </div>

                    <!-- Popular Item Slide -->
                    <div class="papular-block block-slide">

                        @foreach($diskon as $j)

                        <!-- Item -->
                        <div class="item">
                            <!-- Item img -->
                            <div class="item-img"> <img class="img-1" src="{{asset('image/' . $j->image)}}" alt=""> <img class="img-2" src="{{asset('image/' . $j->image)}}" alt="">
                                <!-- Overlay -->
                                <div class="overlay">
                                    <div class="position-center-center">
                                        <div class="inn"><a href="{{asset('image/' . $j->image)}}" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#."><i class="icon-heart"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"> <a href="{{ url('/detailproduct/'. $j->id)}}">{{$j->title}}</a>
                                <p>{{$j->deskripsi}}</p>
                            </div>
                            <!-- Price -->
                            <span class="price"><small>Rp.</small>{{$j->price}}</span>
                        </div>

                        @endforeach

                    </div>
                </div>
            </section>

            <!-- About -->
            <section class="small-about padding-top-150 padding-bottom-150">
                <div class="container">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>about PAVSHOP</h4>
                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odio luctus non. Nulla lacinia,
                            eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                    </div>

                    <!-- Social Icons -->
                    <ul class="social_icons">
                        <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                        <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                        <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                    </ul>
                </div>
            </section>
        </div>

        <!--======= FOOTER =========-->
        @include('parcial.footer')

        <!--======= RIGHTS =========-->

    </div>

    @include('parcial.jsuser')

</body>

</html>
