@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="link">
        <a href="{{ route('home') }}">
            <img src="File/1-05.png" alt="">
        </a>
        <a href="{{ route('product') }}" style="transform: rotate(-10deg);">
            <img src="File/1-07.png" alt="">
        </a>
        <a href="{{ route('about') }}">
            <img src="File/1-06.png" alt="">
        </a>
        <a href="{{ route('neture_perks') }}">
            <img src="File/1-08.png" alt="">
        </a>
        <a href="{{ route('neture_gift') }}">
            <img src="File/1-09.png" alt="">
        </a>
        <a href="{{ route('contact') }}">
            <img src="File/1-10.png" alt="">
        </a>
    </div>
    <div class="cont" style="background-image: url(File/1-19.png);
background-size: cover;">

        <div class="search-bar">
            <input type="text" class="search-input" placeholder="search...">
            <i class="fas fa-search search-icon"></i>
        </div>
    </div>
    <div style="background-image: url(File/1-21.png);
background-size: cover;
height: 181px;
margin-top: -170px;
">
    </div>

    </div>
    <div class="featured-products">
        <h1>
            Our Featured Products
        </h1>
        <div class="product-container">
            <div class="product-card">
                <img id="imageKl150" alt="Natural Cleanser" height="250" src="assets/image/150Kl/150CenterKl.jpg"
                    width="250" />
                <div class="product-price">
                    0.00 AED
                </div>
                <div class="product-name" style="color: #00bcd4;">
                    Natural Cleanser
                </div>
                <div class="product-size">
                    <span class="size-150" id="changeKl150">
                        150 ml
                    </span>
                    <span class="size-250" id="changeKl250">
                        250 ml
                    </span>
                </div>

                <div class="icons">
                    <i class="fas fa-heart heart">
                    </i>
                    <a class="add-to-cart cleanser" href="#">
                        Add To Cart
                    </a>
                    <i class="fas fa-share-alt share">
                    </i>
                </div>
            </div>
            <div class="product-card">
                <img id="imageLo150" alt="Natural Lotion" height="250" src="assets/image/150Lo/150CenterLo.jpg"
                    width="250" />
                <div class="product-price">
                    0.00 AED
                </div>
                <div class="product-name" style="color: #9c27b0;">
                    Natural Lotion
                </div>
                <div class="product-size">
                    <span class="size-150-lotion" id="changeLo150">
                        150 ml
                    </span>
                    <span class="size-250-lotion"id="changeLo250">
                        250 ml
                    </span>
                </div>

                <div class="icons">
                    <i class="fas fa-heart heart-lotion">
                    </i>
                    <a class="add-to-cart lotion" href="#">
                        Add To Cart
                    </a>
                    <i class="fas fa-share-alt share-lotion">
                    </i>
                </div>
            </div>
            <div class="product-card">
                <img id="imageSh150" alt="Natural Shampoo" height="250" src="assets/image/150Sh/150centerSh.jpg"
                    width="250" />
                <div class="product-price">
                    0.00 AED
                </div>
                <div class="product-name" style="color: #ffeb3b;">
                    Natural Shampoo
                </div>
                <div class="product-size">
                    <span class="size-150-shampoo" id="changeSh150">
                        150 ml
                    </span>
                    <span class="size-250-shampoo" id="changeSh250">
                        250 ml
                    </span>
                </div>

                <div class="icons">
                    <i class="fas fa-heart heart-shampoo">
                    </i>
                    <a class="add-to-cart shampoo" href="#">
                        Add To Cart
                    </a>
                    <i class="fas fa-share-alt share-shampoo">
                    </i>
                </div>
            </div>

            <div class="product-card">
                <img id="imageKl150" alt="Natural Cleanser" height="250" src="assets/image/150Kl/150CenterKl.jpg"
                    width="250" />
                <div class="product-price">
                    0.00 AED
                </div>
                <div class="product-name" style="color: #00bcd4;">
                    Natural Cleanser
                </div>
                <div class="product-size">
                    <span class="size-150" id="changeKl150">
                        150 ml
                    </span>
                    <span class="size-250" id="changeKl250">
                        250 ml
                    </span>
                </div>

                <div class="icons">
                    <i class="fas fa-heart heart">
                    </i>
                    <a class="add-to-cart cleanser" href="#">
                        Add To Cart
                    </a>
                    <i class="fas fa-share-alt share">
                    </i>
                </div>
            </div>
            <div class="product-card">
                <img id="imageLo150" alt="Natural Lotion" height="250" src="assets/image/150Lo/150CenterLo.jpg"
                    width="250" />
                <div class="product-price">
                    0.00 AED
                </div>
                <div class="product-name" style="color: #9c27b0;">
                    Natural Lotion
                </div>
                <div class="product-size">
                    <span class="size-150-lotion" id="changeLo150">
                        150 ml
                    </span>
                    <span class="size-250-lotion"id="changeLo250">
                        250 ml
                    </span>
                </div>

                <div class="icons">
                    <i class="fas fa-heart heart-lotion">
                    </i>
                    <a class="add-to-cart lotion" href="#">
                        Add To Cart
                    </a>
                    <i class="fas fa-share-alt share-lotion">
                    </i>
                </div>
            </div>
            <div class="product-card">
                <img id="imageSh150" alt="Natural Shampoo" height="250" src="assets/image/150Sh/150centerSh.jpg"
                    width="250" />
                <div class="product-price">
                    0.00 AED
                </div>
                <div class="product-name" style="color: #ffeb3b;">
                    Natural Shampoo
                </div>
                <div class="product-size">
                    <span class="size-150-shampoo" id="changeSh150">
                        150 ml
                    </span>
                    <span class="size-250-shampoo" id="changeSh250">
                        250 ml
                    </span>
                </div>

                <div class="icons">
                    <i class="fas fa-heart heart-shampoo">
                    </i>
                    <a class="add-to-cart shampoo" href="#">
                        Add To Cart
                    </a>
                    <i class="fas fa-share-alt share-shampoo">
                    </i>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 300px"></div>
@endsection
