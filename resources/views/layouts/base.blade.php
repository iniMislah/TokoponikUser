<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tokoponik</title>
    <link rel="shortcut icon" href="{{ url('assets/images/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('dist/output-scss.css') }}" />
    <link rel="stylesheet" href="{{ url('dist/output-tailwind.css') }}" />
</head>

<body>
    <div id="header" class="relative w-full style-nine">
        <div class="header-menu style-eight relative bg-white w-full md:h-[74px] h-[56px]">
            <div class="container mx-auto h-full">
                <div class="header-main flex items-center justify-between h-full">
                    <div class="menu-mobile-icon lg:hidden flex items-center">
                        <i class="icon-category text-2xl"></i>
                    </div>
                    <a href="index.html" class="flex items-center">
                        <div class="heading4">Tokoponik</div>
                    </a>
                    <div class="form-search w-2/3 pl-8 flex items-center h-[44px] max-lg:hidden">
                        <div class="category-block relative h-full">
                            <div
                                class="category-btn bg-black relative flex items-center gap-6 py-2 px-4 h-full rounded-l w-fit cursor-pointer"
                                onclick="toggleCategoryMenu()">
                                <div class="text-button text-white whitespace-nowrap" id="selected-category">All Categories</div>
                                <i class="ph ph-caret-down text-white"></i>
                            </div>
                            <div id="sub-menu-category"
                                class="sub-menu-category hidden absolute top-[44px] left-0 right-0 px-4 py-3 h-max bg-white rounded-b-2xl">
                                <div class="item block">
                                    <a href="#" onclick="selectCategory('Seed')">Seed</a>
                                </div>
                                <div class="item block">
                                    <a href="#" onclick="selectCategory('Tools')">Tools</a>
                                </div>
                                <div class="item block">
                                    <a href="#" onclick="selectCategory('Vegetables')">Vegetables</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex items-center h-full">
                            <input type="text" id="search-input" class="search-input h-full px-4 w-full border border-line"
                                placeholder="What are you looking for today?" />
                            <button class="search-button button-main bg-black h-full flex items-center px-7 rounded-none rounded-r"
                                onclick="searchProducts()">Search</button>
                        </div>
                    </div>
                    <div class="right flex gap-12 z-[1]">
                        <div class="list-action flex items-center gap-4">
                            <div class="user-icon flex items-center justify-center cursor-pointer">
                                <i class="ph-bold ph-user text-2xl"></i>
                                <div class="login-popup absolute top-[74px] w-[320px] p-7 rounded-xl bg-white">
                                    <a href="/login" class="button-main w-full text-center">Login</a>
                                    <div class="text-secondary text-center mt-3 pb-4">
                                        Don’t have an account?
                                        <a href="/register" class="text-black pl-1 hover:underline">Register </a>
                                    </div>
                                    <a href="/myaccount" class="button-main bg-white text-black border border-black w-full text-center">Dashboard</a>
                                    <div class="bottom mt-4 pt-4 border-t border-line"></div>
                                    <a href="#!" class="body1 hover:underline">Support</a>
                                </div>
                            </div>
                            <div class="max-md:hidden wishlist-icon flex items-center relative cursor-pointer">
                                <i class="ph-bold ph-heart text-2xl"></i>
                                <span class="quantity wishlist-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-black w-4 h-4 flex items-center justify-center rounded-full">0</span>
                            </div>
                            <div class="max-md:hidden cart-icon flex items-center relative cursor-pointer">
                                <i class="ph-bold ph-handbag text-2xl"></i>
                                <span class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-black w-4 h-4 flex items-center justify-center rounded-full">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="top-nav-menu relative bg-white border-t border-b border-line h-[44px] max-lg:hidden z-10">
            <div class="container h-full">
                <div class="top-nav-menu-main flex items-center justify-between h-full">
                    <div class="left flex items-center h-full">

                        <div class="menu-main style-eight h-full pl-12 max-lg:hidden">
                            <ul class="flex items-center gap-8 h-full">

                                <li class="h-full">
                                    <!-- <a href="/shop"
                                        class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                        Shop </a> -->
                                    <div class="mega-menu absolute top-[44px] left-0 bg-white w-screen">
                                        <div class="container">
                                            <div class="flex justify-between py-8">

                                                <div class="recent-product pl-2.5 basis-1/3">
                                                    <!-- <div class="text-button-uppercase pb-2">Recent Products</div> -->
                                                    <div
                                                        class="list-product hide-product-sold grid grid-cols-2 gap-5 mt-3">
                                                        <div class="product-item grid-type" data-item="1">
                                                            <div class="product-main cursor-pointer block">
                                                                <div
                                                                    class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                                                    <div
                                                                        class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                                        New</div>
                                                                    <div
                                                                        class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                                                        <div
                                                                            class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                                                                Add To Wishlist</div>
                                                                            <i class="ph ph-heart text-lg"></i>
                                                                        </div>
                                                                        <div
                                                                            class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                                                                Compare Product</div>
                                                                            <i
                                                                                class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                                                            <i
                                                                                class="ph ph-check-circle text-lg checked-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-img w-full h-full aspect-[3/4]">
                                                                        <img class="w-full h-full object-cover duration-700"
                                                                            src="./assets/images/product/1000x1000.png"
                                                                            alt="img" />
                                                                        <img class="w-full h-full object-cover duration-700"
                                                                            src="./assets/images/product/1000x1000.png"
                                                                            alt="img" />
                                                                    </div>
                                                                    <div
                                                                        class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                                                        <div
                                                                            class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                                                            Quick View</div>
                                                                        <div
                                                                            class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                                                            Add To Cart</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-infor mt-4 lg:mb-7">
                                                                    <div class="product-sold sm:pb-4 pb-2">
                                                                        <div
                                                                            class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                                                            <div
                                                                                class="progress-sold bg-red absolute left-0 top-0 h-full">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                                                            <div class="text-button-uppercase">
                                                                                <span
                                                                                    class="text-secondary2 max-sm:text-xs">Sold:
                                                                                </span>
                                                                                <span class="max-sm:text-xs">12</span>
                                                                            </div>
                                                                            <div class="text-button-uppercase">
                                                                                <span
                                                                                    class="text-secondary2 max-sm:text-xs">Available:
                                                                                </span>
                                                                                <span class="max-sm:text-xs">88</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-name text-title duration-300">
                                                                        Faux-leather trousers</div>
                                                                    <div
                                                                        class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                                                        <div
                                                                            class="color-item bg-black w-8 h-8 rounded-full duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                                                                Black</div>
                                                                        </div>
                                                                        <div
                                                                            class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                                                                Green</div>
                                                                        </div>
                                                                        <div
                                                                            class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                                                                Red</div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                                                        <div class="product-price text-title">$40.00
                                                                        </div>
                                                                        <div
                                                                            class="product-origin-price caption1 text-secondary2">
                                                                            <del>$50.00</del>
                                                                        </div>
                                                                        <div
                                                                            class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                                            -20%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item grid-type" data-item="3">
                                                            <div class="product-main cursor-pointer block">
                                                                <div
                                                                    class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                                                    <div
                                                                        class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                                                        New</div>
                                                                    <div
                                                                        class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                                                        <div
                                                                            class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                                                                Add To Wishlist</div>
                                                                            <i class="ph ph-heart text-lg"></i>
                                                                        </div>
                                                                        <div
                                                                            class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                                                                Compare Product</div>
                                                                            <i
                                                                                class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                                                            <i
                                                                                class="ph ph-check-circle text-lg checked-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-img w-full h-full aspect-[3/4]">
                                                                        <img class="w-full h-full object-cover duration-700"
                                                                            src="./assets/images/product/1000x1000.png"
                                                                            alt="img" />
                                                                        <img class="w-full h-full object-cover duration-700"
                                                                            src="./assets/images/product/1000x1000.png"
                                                                            alt="img" />
                                                                    </div>
                                                                    <div
                                                                        class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                                                        <div
                                                                            class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                                                            Quick View</div>
                                                                        <div
                                                                            class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                                                            Add To Cart</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-infor mt-4 lg:mb-7">
                                                                    <div class="product-sold sm:pb-4 pb-2">
                                                                        <div
                                                                            class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                                                            <div
                                                                                class="progress-sold bg-red absolute left-0 top-0 h-full">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                                                            <div class="text-button-uppercase">
                                                                                <span
                                                                                    class="text-secondary2 max-sm:text-xs">Sold:
                                                                                </span>
                                                                                <span class="max-sm:text-xs">12</span>
                                                                            </div>
                                                                            <div class="text-button-uppercase">
                                                                                <span
                                                                                    class="text-secondary2 max-sm:text-xs">Available:
                                                                                </span>
                                                                                <span class="max-sm:text-xs">88</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-name text-title duration-300">
                                                                        Off-the-Shoulder Blouse</div>
                                                                    <div
                                                                        class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                                                        <div
                                                                            class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                                                                Red</div>
                                                                        </div>
                                                                        <div
                                                                            class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                                                                yellow</div>
                                                                        </div>
                                                                        <div
                                                                            class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                                                            <div
                                                                                class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                                                                green</div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                                                        <div class="product-price text-title">$40.00
                                                                        </div>
                                                                        <div
                                                                            class="product-origin-price caption1 text-secondary2">
                                                                            <del>$50.00</del>
                                                                        </div>
                                                                        <div
                                                                            class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                                                            -20%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="h-full">
                                    <a href="/homepage"
                                        class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                        Home </a>
                                    <div class="mega-menu absolute top-[44px] left-0 bg-white w-screen">
                                        <div class="container">
                                            <div class="nav-link basis-2/3 flex justify-between py-8">
                                                <div class="nav-item">
                                                </div>
                                            </div>
                                </li>
                                <li class="h-full">
                                    <a href="/product"
                                        class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                        Product </a>
                                    <div class="mega-menu absolute top-[44px] left-0 bg-white w-screen">
                                        <div class="container">
                                            <div class="nav-link basis-2/3 flex justify-between py-8">
                                                <div class="nav-item">
                                                </div>
                                            </div>
                                </li>
                                <li class="h-full relative">
                                    <a href="/blog"
                                        class="text-button-uppercase duration-300 h-full flex items-center justify-center">
                                        Blog </a>
                                    <div class="sub-menu py-3 px-5 -left-10 absolute bg-white rounded-b-xl">
                                        <ul class="w-full">

                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="menu-mobile" class="">
            <div class="menu-container bg-white h-full">
                <div class="container h-full">
                    <div class="menu-main h-full overflow-hidden">
                        <div class="heading py-2 relative flex items-center justify-center">
                            <div
                                class="close-menu-mobile-btn absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-surface flex items-center justify-center">
                                <i class="ph ph-x text-sm"></i>
                            </div>
                            <a href="index.html" class="logo text-3xl font-semibold text-center">Tokoponik</a>
                        </div>
                        <div class="form-search relative mt-2">
                            <i
                                class="ph ph-magnifying-glass text-xl absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                            <input type="text" placeholder="What are you looking for?"
                                class="h-12 rounded-lg border border-line text-sm w-full pl-10 pr-4" />
                        </div>
                        <div class="list-nav mt-6">
                            <ul>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between">Demo
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full grid grid-cols-2 pt-2 pb-6">
                                            <ul>
                                                <li>
                                                    <a href="index.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 1 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion2.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 2 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion3.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 3 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion4.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 4 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion5.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 5 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion6.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 6 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion7.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 7 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion8.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 8 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion9.html"
                                                        class="nav-item-mobile link text-secondary duration-300 active">
                                                        Home Fashion 9 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion10.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 10 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion11.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Fashion 11 </a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="underwear.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Underwear </a>
                                                </li>
                                                <li>
                                                    <a href="cosmetic1.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Cosmetic 1 </a>
                                                </li>
                                                <li>
                                                    <a href="cosmetic2.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Cosmetic 2 </a>
                                                </li>
                                                <li>
                                                    <a href="cosmetic3.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Cosmetic 3 </a>
                                                </li>
                                                <li>
                                                    <a href="pet.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Pet Store </a>
                                                </li>
                                                <li>
                                                    <a href="jewelry.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Jewelry </a>
                                                </li>
                                                <li>
                                                    <a href="furniture.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Furniture </a>
                                                </li>
                                                <li>
                                                    <a href="watch.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Watch </a>
                                                </li>
                                                <li>
                                                    <a href="toys.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Toys Kid </a>
                                                </li>
                                                <li>
                                                    <a href="yoga.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Yoga </a>
                                                </li>
                                                <li>
                                                    <a href="organic.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Organic </a>
                                                </li>
                                                <li>
                                                    <a href="marketplace.html"
                                                        class="nav-item-mobile link text-secondary duration-300"> Home
                                                        Marketplace </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="text-xl font-semibold flex items-center justify-between mt-5">Features
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <div class="nav-link grid grid-cols-2 gap-5 gap-y-6">
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Men</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Starting From 50% Off </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Outerwear | Coats </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Sweaters | Cardigans </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Shirt | Sweatshirts </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 view-all-btn">
                                                                View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Skincare</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Faces Skin </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Eyes Makeup </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Lip Polish </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Hair Care </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 view-all-btn">
                                                                View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Health</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Cented Candle </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Health Drinks </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Yoga Clothes </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Yoga Equipment </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 view-all-btn">
                                                                View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Women</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Starting From 60% Off </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Dresses | Jumpsuits </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                T-shirts | Sweatshirts </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Accessories | Jewelry </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 view-all-btn">
                                                                View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Kid</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Kids Bed </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Boy's Toy </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Baby Blanket </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Newborn Clothing </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 view-all-btn">
                                                                View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Home</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Furniture | Decor </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Table | Living Room </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Chair | Work Room </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Lighting | Bed Room </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300 view-all-btn">
                                                                View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="text-xl font-semibold flex items-center justify-between mt-5">Shop
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <div class="nav-link grid grid-cols-2 gap-5 gap-y-6 justify-between">
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Shop Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb-img.html"
                                                                class="link text-secondary duration-300"> Shop
                                                                Breadcrumb IMG </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb1.html"
                                                                class="link text-secondary duration-300"> Shop
                                                                Breadcrumb 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb2.html"
                                                                class="link text-secondary duration-300"> Shop
                                                                Breadcrumb 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-collection.html"
                                                                class="link text-secondary duration-300"> Shop
                                                                Collection </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Shop Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-filter-canvas.html"
                                                                class="link text-secondary duration-300"> Shop Filter
                                                                Canvas </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-filter-options.html"
                                                                class="link text-secondary duration-300"> Shop Filter
                                                                Options </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-filter-dropdown.html"
                                                                class="link text-secondary duration-300"> Shop Filter
                                                                Dropdown </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar-list.html"
                                                                class="link text-secondary duration-300"> Shop Sidebar
                                                                List </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Shop Layout</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-default.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Shop Default </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-default-grid.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Shop Default Grid </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-default-list.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Shop Default List </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-fullwidth.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Shop Full Width </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-square.html"
                                                                class="link text-secondary duration-300"> Shop Square
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Pages</div>
                                                    <ul>
                                                        <li>
                                                            <a href="/wishlist"
                                                                class="link text-secondary duration-300"> Wish List </a>
                                                        </li>
                                                        <li>
                                                            <a href="search-result.html"
                                                                class="link text-secondary duration-300"> Search Result
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/cart"
                                                                class="link text-secondary duration-300"> Shopping Cart
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/login"
                                                                class="link text-secondary duration-300"> Login/Register
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="forgot-password.html"
                                                                class="link text-secondary duration-300"> Forgot
                                                                Password </a>
                                                        </li>
                                                        <li>
                                                            <a href="order-tracking.html"
                                                                class="link text-secondary duration-300"> Order Tracking
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="/myaccount"
                                                                class="link text-secondary duration-300"> My Account
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="text-xl font-semibold flex items-center justify-between mt-5">Product
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <div class="nav-link grid grid-cols-2 gap-5 gap-y-6 justify-between">
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-default.html"
                                                                class="link text-secondary duration-300"> Products
                                                                Defaults </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-sale.html"
                                                                class="link text-secondary duration-300"> Products Sale
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-countdown-timer.html"
                                                                class="link text-secondary duration-300"> Products
                                                                Countdown Timer </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grouped.html"
                                                                class="link text-secondary duration-300"> Products
                                                                Grouped </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-bought-together.html"
                                                                class="link text-secondary duration-300"> Frequently
                                                                Bought Together </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-out-of-stock.html"
                                                                class="link text-secondary duration-300"> Products Out
                                                                Of Stock </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-variable.html"
                                                                class="link text-secondary duration-300"> Products
                                                                Variable </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-external.html"
                                                                class="link text-secondary duration-300"> Products
                                                                External </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-on-sale.html"
                                                                class="link text-secondary duration-300"> Products On
                                                                Sale </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-discount.html"
                                                                class="link text-secondary duration-300"> Products With
                                                                Discount </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-sidebar.html"
                                                                class="link text-secondary duration-300"> Products With
                                                                Sidebar </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-fixed-price.html"
                                                                class="link text-secondary duration-300"> Products Fixed
                                                                Price </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Layout</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-thumbnail-left.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Thumbnails Left </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-thumbnail-bottom.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Thumbnails Bottom </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-one-scrolling.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Grid 1 Scrolling </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-two-scrolling.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Grid 2 Scrolling </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-combined-one.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Combined 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-combined-two.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Combined 2 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Styles</div>
                                                    <ul>
                                                        <li>
                                                            <a href="/product-style1.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Style 01 </a>
                                                        </li>
                                                        <li>
                                                            <a href="/product-style2.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Style 02 </a>
                                                        </li>
                                                        <li>
                                                            <a href="/product-style3.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Style 03 </a>
                                                        </li>
                                                        <li>
                                                            <a href="/product-style4.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Style 04 </a>
                                                        </li>
                                                        <li>
                                                            <a href="/product-style5.html"
                                                                class="link text-secondary duration-300 cursor-pointer">
                                                                Products Style 05 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="text-xl font-semibold flex items-center justify-between mt-5">Blog
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <ul class="w-full">
                                                <li>
                                                    <a href="blog-default.html"
                                                        class="link text-secondary duration-300"> Blog Default </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list.html" class="link text-secondary duration-300">
                                                        Blog List </a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html" class="link text-secondary duration-300">
                                                        Blog Grid </a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail1.html"
                                                        class="link text-secondary duration-300"> Blog Detail 1 </a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail2.html"
                                                        class="link text-secondary duration-300"> Blog Detail 2 </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="text-xl font-semibold flex items-center justify-between mt-5">Pages
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <ul class="w-full">
                                                <li>
                                                    <a href="about.html" class="link text-secondary duration-300"> About
                                                        Us </a>
                                                </li>
                                                <li>
                                                    <a href="contact.html" class="link text-secondary duration-300">
                                                        Contact Us </a>
                                                </li>
                                                <li>
                                                    <a href="store-list.html" class="link text-secondary duration-300">
                                                        Store List </a>
                                                </li>
                                                <li>
                                                    <a href="page-not-found.html"
                                                        class="link text-secondary duration-300"> 404 </a>
                                                </li>
                                                <li>
                                                    <a href="faqs.html" class="link text-secondary duration-300"> FAQs
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="coming-soon.html" class="link text-secondary duration-300">
                                                        Coming Soon </a>
                                                </li>
                                                <li>
                                                    <a href="customer-feedbacks.html"
                                                        class="link text-secondary duration-300"> Customer Feedbacks
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu bar -->
        <div class="menu_bar fixed bg-white bottom-0 left-0 w-full h-[70px] sm:hidden z-[101]">
            <div class="menu_bar-inner grid grid-cols-4 items-center h-full">
                <a href="index.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <span class="ph-bold ph-house text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Home</span>
                </a>
                <a href="shop-filter-canvas.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <span class="ph-bold ph-list text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Category</span>
                </a>
                <a href="search-result.html" class="menu_bar-link flex flex-col items-center gap-1">
                    <span class="ph-bold ph-magnifying-glass text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Search</span>
                </a>
                <a href="/cart" class="menu_bar-link flex flex-col items-center gap-1">
                    <div class="cart-icon relative">
                        <span class="ph-bold ph-handbag text-2xl block"></span>
                        <span
                            class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-black w-4 h-4 flex items-center justify-center rounded-full">0</span>
                    </div>
                    <span class="menu_bar-title caption2 font-semibold">Cart</span>
                </a>
            </div>
        </div>

        <!-- Slider -->
        @yield('head')
    </div>


    @yield('content')



    <div id="footer" class="footer">
        <div class="footer-main bg-surface">
            <div class="container">
                <div class="content-footer md:py-[60px] py-10 flex justify-between flex-wrap gap-y-8">
                    <div class="company-infor basis-1/4 max-lg:basis-full pr-7">
                        <a href="index.html" class="logo inline-block">
                            <div class="heading3 w-fit"><img src="./assets/images/logo.png" width="70%" alt="" srcset=""></div>
                        </a>
                        <div class="flex gap-3 mt-3">
                        </div>
                    </div>
                    <div class="right-content flex flex-wrap gap-y-8 basis-3/4 max-lg:basis-full">
                        <div class="list-nav flex justify-between basis-2/3 max-md:basis-full gap-4">
                            <div class="item flex flex-col basis-1/3">
                                <div class="text-button-uppercase pb-3">Infomation</div>
                                <a class="caption1 has-line-before duration-300 w-fit" href="contact.html">Contact us
                                </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2" href="#!"> Career </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2" href="my-account.html"> My
                                    Account</a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2" href="order-tracking.html">
                                    Order & Returns</a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2" href="faqs.html">FAQs </a>
                            </div>
                            <div class="item flex flex-col basis-1/3">
                                <div class="text-button-uppercase pb-3">Quick Shop</div>
                                <a class="caption1 has-line-before duration-300 w-fit"
                                    href="shop-breadcrumb1.html">Women</a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2"
                                    href="shop-breadcrumb1.html">Men </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2"
                                    href="shop-breadcrumb1.html">Clothes </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2"
                                    href="shop-breadcrumb1.html"> Accessories </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2"
                                    href="blog-default.html">Blog </a>
                            </div>
                            <div class="item flex flex-col basis-1/3">
                                <div class="text-button-uppercase pb-3">Customer Services</div>
                                <a class="caption1 has-line-before duration-300 w-fit" href="faqs.html">FAQs </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2" href="faqs.html">Shipping
                                </a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2" href="faqs.html">Privacy
                                    Policy</a>
                                <a class="caption1 has-line-before duration-300 w-fit pt-2"
                                    href="order-tracking.html">Return & Refund</a>
                            </div>
                        </div>
                        <div class="newsletter basis-1/3 pl-7 max-md:basis-full max-md:pl-0">
                            <div class="text-button-uppercase">Newletter</div>
                            <div class="caption1 mt-3">Sign up for our newsletter and get 10% off your first purchase
                            </div>
                            <div class="input-block w-full h-[52px] mt-4">
                                <form class="w-full h-full relative" action="post">
                                    <input type="email" placeholder="Enter your e-mail"
                                        class="caption1 w-full h-full pl-4 pr-14 rounded-xl border border-line"
                                        required />
                                    <button
                                        class="w-[44px] h-[44px] bg-black flex items-center justify-center rounded-xl absolute top-1 right-1">
                                        <i class="ph ph-arrow-right text-xl text-white"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="list-social flex items-center gap-6 mt-4">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <div class="icon-facebook text-2xl text-black"></div>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <div class="icon-instagram text-2xl text-black"></div>
                                </a>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <div class="icon-twitter text-2xl text-black"></div>
                                </a>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <div class="icon-youtube text-2xl text-black"></div>
                                </a>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <div class="icon-pinterest text-2xl text-black"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="footer-bottom py-3 flex items-center justify-between gap-5 max-lg:justify-center max-lg:flex-col border-t border-line">
                    <div class="left flex items-center gap-8">
                    </div>
                    <div class="right flex items-center gap-2">
                        <div class="caption1 text-secondary">Payment:</div>
                        <div class="payment-img">
                            <img src="./assets/images/payment/Frame-0.png" alt="payment" class="w-9" />
                        </div>
                        <div class="payment-img">
                            <img src="./assets/images/payment/Frame-1.png" alt="payment" class="w-9" />
                        </div>
                        <div class="payment-img">
                            <img src="./assets/images/payment/Frame-2.png" alt="payment" class="w-9" />
                        </div>
                        <div class="payment-img">
                            <img src="./assets/images/payment/Frame-3.png" alt="payment" class="w-9" />
                        </div>
                        <div class="payment-img">
                            <img src="./assets/images/payment/Frame-4.png" alt="payment" class="w-9" />
                        </div>
                        <div class="payment-img">
                            <img src="./assets/images/payment/Frame-5.png" alt="payment" class="w-9" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top-btn" href="#top-nav"><i class="ph-bold ph-caret-up"></i></a>

    <div class="modal-search-block">
        <div class="modal-search-main md:p-10 p-6 rounded-[32px]">
            <div class="form-search relative w-full">
                <i class="ph ph-magnifying-glass absolute heading5 right-6 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                <input type="text" placeholder="Searching..."
                    class="text-button-lg h-14 rounded-2xl border border-line w-full pl-6 pr-12" />
            </div>
            <div class="keyword mt-8">
                <div class="heading5">Feature keywords Today</div>
                <div class="list-keyword flex items-center flex-wrap gap-3 mt-4">
                    <button
                        class="item px-4 py-1.5 border border-line rounded-full cursor-pointer duration-300 hover:bg-black hover:text-white">Dress</button>
                    <button
                        class="item px-4 py-1.5 border border-line rounded-full cursor-pointer duration-300 hover:bg-black hover:text-white">T-shirt</button>
                    <button
                        class="item px-4 py-1.5 border border-line rounded-full cursor-pointer duration-300 hover:bg-black hover:text-white">Underwear</button>
                    <button
                        class="item px-4 py-1.5 border border-line rounded-full cursor-pointer duration-300 hover:bg-black hover:text-white">Top</button>
                </div>
            </div>
            <div class="list-recent mt-8">
                <div class="heading6">Recently viewed products</div>
                <div
                    class="list-product pb-5 hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 mt-4">
                    <div class="product-item grid-type" data-item="14">
                        <div class="product-main cursor-pointer block">
                            {{-- <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div
                                    class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                    New</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div
                                        class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div
                                        class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                </div>
                                <div
                                    class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div
                                        class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                        Quick View</div>
                                    <div
                                        class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                        Add To Cart</div>
                                </div>
                            </div> --}}
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-sold sm:pb-4 pb-2">
                                    <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                        <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">12</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">88</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Faux-leather trousers</div>
                                <div
                                    class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item bg-black w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Black</div>
                                    </div>
                                    <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Green</div>
                                    </div>
                                    <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Red</div>
                                    </div>
                                </div>

                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$40.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$50.00</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                        -20%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item grid-type" data-item="13">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div
                                    class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                    New</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div
                                        class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div
                                        class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                </div>
                                <div
                                    class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div
                                        class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                        Quick View</div>
                                    <div
                                        class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                        Add To Cart</div>
                                </div>
                            </div>
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-sold sm:pb-4 pb-2">
                                    <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                        <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">12</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">88</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Faux-leather trousers</div>
                                <div
                                    class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item bg-black w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Black</div>
                                    </div>
                                    <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Green</div>
                                    </div>
                                    <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Red</div>
                                    </div>
                                </div>

                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$40.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$50.00</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                        -20%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item grid-type" data-item="12">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div
                                    class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                    New</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div
                                        class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div
                                        class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                </div>
                                <div
                                    class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div
                                        class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                        Quick View</div>
                                    <div
                                        class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                        Add To Cart</div>
                                </div>
                            </div>
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-sold sm:pb-4 pb-2">
                                    <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                        <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">12</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">88</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                                <div
                                    class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Red</div>
                                    </div>
                                    <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            yellow</div>
                                    </div>
                                    <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            green</div>
                                    </div>
                                </div>

                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$40.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$50.00</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                        -20%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item grid-type" data-item="11">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div
                                    class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">
                                    New</div>
                                <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                    <div
                                        class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Add To Wishlist</div>
                                        <i class="ph ph-heart text-lg"></i>
                                    </div>
                                    <div
                                        class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                            Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                        <i class="ph ph-check-circle text-lg checked-icon"></i>
                                    </div>
                                </div>
                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                    <img class="w-full h-full object-cover duration-700"
                                        src="./assets/images/product/1000x1000.png" alt="img" />
                                </div>
                                <div
                                    class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                    <div
                                        class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                        Quick View</div>
                                    <div
                                        class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                        Add To Cart</div>
                                </div>
                            </div>
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-sold sm:pb-4 pb-2">
                                    <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                        <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                            <span class="max-sm:text-xs">12</span>
                                        </div>
                                        <div class="text-button-uppercase">
                                            <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                            <span class="max-sm:text-xs">88</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                                <div
                                    class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                    <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            Red</div>
                                    </div>
                                    <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            yellow</div>
                                    </div>
                                    <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            green</div>
                                    </div>
                                </div>

                                <div
                                    class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">$40.00</div>
                                    <div class="product-origin-price caption1 text-secondary2">
                                        <del>$50.00</del>
                                    </div>
                                    <div
                                        class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                                        -20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal-wishlist-block">
        <div class="modal-wishlist-main py-6">
            <div class="heading px-6 pb-3 flex items-center justify-between relative">
                <div class="heading5">Wishlist</div>
                <div
                    class="close-btn absolute right-6 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                    <i class="ph ph-x text-sm"></i>
                </div>
            </div>
            <div class="list-product px-6"></div>
            <div class="footer-modal p-6 border-t bg-white border-line absolute bottom-0 left-0 w-full text-center">
                <a href="/wishlist" class="button-main w-full text-center uppercase"> View All Wish List</a>
                <div
                    class="text-button-uppercase continue mt-4 text-center has-line-before cursor-pointer inline-block">
                    Or continue shopping</div>
            </div>
        </div>
    </div>

    <div class="modal-cart-block">
        <div class="modal-cart-main py-6">
            <div class="right cart-block md:w-1/2 w-full py-6 relative overflow-hidden">
                <div class="heading px-6 pb-3 flex items-center justify-between relative">
                    <div class="heading5">Shopping Cart</div>
                    <div
                        class="close-btn absolute right-6 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                        <i class="ph ph-x text-sm"></i>
                    </div>
                </div>
                    <div id="list-cart" class="tow-bar-block mt-3">
                    </div>
                </div>
                <div class="list-product px-6"></div>
                <div class="footer-modal bg-white absolute bottom-0 left-0 w-full">
                    <div class="items-center justify-between pt-6 px-6">
                        <div class="heading5"></div>
                        <div class="heading5 total-cart"></div>
                    </div>
                    <div class="block-button text-center p-6">
                        <div class="flex items-center gap-4">
                            <a href="/cart"
                                class="button-main basis-1/2 bg-white border border-black text-black text-center uppercase">
                                View cart </a>
                            <a href="/checkout" class="button-main basis-1/2 text-center uppercase"> Check Out </a>
                        </div>
                            <a href ="/homepage" class="text-button-uppercase continue mt-4 text-center has-line-before cursor-pointer inline-block">
                            Or continue shopping</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-sizeguide-block">
        <div class="modal-sizeguide-main md:p-10 p-6 rounded-[32px]">
            <div
                class="close-btn absolute right-5 top-5 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                <i class="ph ph-x text-sm"></i>
            </div>
            <div class="heading3">Size guide</div>
            <div class="md:mt-8 mt-6 progress">
                <div class="flex md:items-center gap-10 justify-between max-md:flex-col gap-y-5 max-md:pr-3">
                    <div class="flex items-center flex-shrink-0 gap-8">
                        <span class="flex-shrink-0 md:w-14">Height</span>
                        <div
                            class="flex items-center justify-center w-20 gap-1 py-2 border border-line rounded-lg flex-shrink-0">
                            <span class="height">200</span>
                            <span class="caption1 text-secondary">Cm</span>
                        </div>
                    </div>
                    <div class="filter-price filter-height w-full">
                        <div class="tow-bar-block">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input class="range-max" type="range" min="0" max="200" value="200" />
                        </div>
                    </div>
                </div>
                <div class="flex md:items-center gap-10 justify-between max-md:flex-col gap-y-5 max-md:pr-3 mt-5">
                    <div class="flex items-center gap-8 flex-shrink-0">
                        <span class="flex-shrink-0 md:w-14">Weight</span>
                        <div
                            class="flex items-center justify-center w-20 gap-1 py-2 border border-line rounded-lg flex-shrink-0">
                            <span class="weight">90</span>
                            <span class="caption1 text-secondary">Kg</span>
                        </div>
                    </div>
                    <div class="filter-price filter-weight w-full">
                        <div class="tow-bar-block">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input class="range-max" type="range" min="0" max="90" value="90" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="heading6 mt-8">suggests for you:</div>
            <div class="list-size-block flex items-center gap-2 flex-wrap mt-3">
                <div
                    class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    XS</div>
                <div
                    class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    S</div>
                <div
                    class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    M</div>
                <div
                    class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    L</div>
                <div
                    class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    XL</div>
                <div
                    class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                    2XL</div>
            </div>
            <table>
                <tr>
                    <th>Size</th>
                    <th>Bust</th>
                    <th>Waist</th>
                    <th>Low Hip</th>
                </tr>
                <tr>
                    <td>XS</td>
                    <td>32</td>
                    <td>24-25</td>
                    <td>33-34</td>
                </tr>
                <tr>
                    <td>S</td>
                    <td>34-35</td>
                    <td>26-27</td>
                    <td>35-36</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>36-37</td>
                    <td>28-29</td>
                    <td>38-40</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>38-39</td>
                    <td>30-31</td>
                    <td>42-44</td>
                </tr>
                <tr>
                    <td>XL</td>
                    <td>40-41</td>
                    <td>32-33</td>
                    <td>45-47</td>
                </tr>
                <tr>
                    <td>2XL</td>
                    <td>42-43</td>
                    <td>34-35</td>
                    <td>48-50</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="modal-compare-block">
        <div class="modal-compare-main py-6">
            <div
                class="close-btn absolute 2xl:right-6 right-4 2xl:top-6 md:-top-4 top-3 lg:w-10 w-6 lg:h-10 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                <i class="ph ph-x body1"></i>
            </div>
            <div class="container h-full flex items-center w-full">
                <div class="content-main flex items-center justify-between xl:gap-10 gap-6 w-full max-md:flex-wrap">
                    <div class="heading5 flex-shrink-0 max-md:w-full">Compare <br class="max-md:hidden" />Products</div>
                    <div class="list-product flex items-center w-full gap-4"></div>
                    <div class="block-button flex flex-col gap-4 flex-shrink-0">
                        <a href="compare.html" class="button-main whitespace-nowrap"> Compare Products</a>
                        <div class="button-main clear whitespace-nowrap border border-black bg-white text-black">Clear
                            All Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-quickview-block">
        <div class="modal-quickview-main py-6">
            <div class="flex h-full max-md:flex-col-reverse gap-y-6">
                <div class="left lg:w-[388px] md:w-[300px] flex-shrink-0 px-6">
                    <div class="list-img max-md:flex items-center gap-4">
                        <div
                            class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item"
                                class="w-full h-full object-cover" />
                        </div>
                        <div
                            class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item"
                                class="w-full h-full object-cover" />
                        </div>
                        <div
                            class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item"
                                class="w-full h-full object-cover" />
                        </div>
                        <div
                            class="bg-img w-full aspect-[3/4] max-md:w-[150px] max-md:flex-shrink-0 rounded-[20px] overflow-hidden md:mt-6">
                            <img src="./assets/images/product/1000x1000.png" alt="item"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
                <div class="right w-full px-6">
                    <div class="heading pb-6 flex items-center justify-between relative">
                        <div class="heading5">Quick View</div>
                        <div
                            class="close-btn absolute right-0 top-0 w-6 h-6 rounded-full bg-surface flex items-center justify-center duration-300 cursor-pointer hover:bg-black hover:text-white">
                            <i class="ph ph-x text-sm"></i>
                        </div>
                    </div>
                    <div class="product-infor">
                        <div class="flex justify-between">
                            <div>
                                <div class="category caption2 text-secondary font-semibold uppercase">fashion</div>
                                <div class="name heading4 mt-1">Off-the-Shoulder Blouse</div>
                            </div>
                            <div
                                class="add-wishlist-btn w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-lg duration-300 hover:bg-black hover:text-white">
                                <i class="ph ph-heart text-xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-3">
                            <div class="rate flex">
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i><i
                                    class="ph-fill ph-star text-sm text-yellow"></i>
                            </div>
                            <span class="caption1 text-secondary">(1.234 reviews)</span>
                        </div>
                        <div class="flex items-center gap-1 gap-y-3 flex-wrap mt-3">
                            <div class="text-xs font-semibold bg-black text-white uppercase py-1 px-3 rounded-full">best
                                seller</div>
                            <div class="flex items-center gap-1">
                                <i class="ph-fill ph-lightning text-red text-xl"></i>
                                <div class="caption1 text-secondary">Selling fast! 22 people have this in their carts.
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                            <div class="product-price heading5">$20.00</div>
                            <div class="w-px h-4 bg-line"></div>
                            <div class="product-origin-price font-normal text-secondary2">
                                <del>$32.00</del>
                            </div>
                            <div
                                class="product-sale caption2 font-semibold bg-green px-3 py-0.5 inline-block rounded-full">
                                -19%</div>
                            <div class="desc text-secondary mt-3">Keep your clothes organized, yet elegant with storage
                                cabinets by Onita Patio Furniture. Traditionally designed, they are perfect to be used
                                in the any place where you need to store.</div>
                        </div>
                        <div class="list-action mt-6">
                            <div class="choose-color">
                                <div class="text-title">Colors: <span class="text-title color"></span></div>
                                <div class="list-color flex items-center gap-2 flex-wrap mt-3">
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative active">
                                        <img src="./assets/images/product/color/48x48.png" alt="color"
                                            class="rounded-xl" />
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            blue</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="./assets/images/product/color/48x48.png" alt="color"
                                            class="rounded-xl" />
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            red</div>
                                    </div>
                                    <div class="color-item w-12 h-12 rounded-xl duration-300 relative">
                                        <img src="./assets/images/product/color/48x48.png" alt="color"
                                            class="rounded-xl" />
                                        <div
                                            class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">
                                            black</div>
                                    </div>
                                </div>
                            </div>
                            <div class="choose-size mt-5">
                                <div class="heading flex items-center justify-between">
                                    <div class="text-title">Size: <span class="text-title size"></span></div>
                                    <div class="caption1 size-guide text-red underline">Size Guide</div>
                                </div>
                                <div class="list-size flex items-center gap-2 flex-wrap mt-3">
                                    <div
                                        class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                                        S</div>
                                    <div
                                        class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line active">
                                        M</div>
                                    <div
                                        class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                                        L</div>
                                    <div
                                        class="size-item w-12 h-12 flex items-center justify-center text-button rounded-full bg-white border border-line">
                                        XL</div>
                                </div>
                            </div>
                            <div class="text-title mt-5">Quantity:</div>
                            <div class="choose-quantity flex items-center flex-wrap lg:justify-between gap-5 mt-3">
                                <div
                                    class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[180px] w-[120px] flex-shrink-0">
                                    <i class="ph-bold ph-minus cursor-pointer body1"></i>
                                    <div class="quantity body1 font-semibold">1</div>
                                    <i class="ph-bold ph-plus cursor-pointer body1"></i>
                                </div>
                                <div
                                    class="add-cart-btn button-main w-full text-center bg-white text-black border border-black">
                                    Add To Cart</div>
                            </div>
                            <div class="button-block mt-5">
                                <a href="checkout.html" class="button-main w-full text-center">Buy It Now</a>
                            </div>
                        </div>
                        <div class="flex items-center flex-wrap lg:gap-20 gap-8 gap-y-4 mt-5">
                            <div class="compare flex items-center gap-3 cursor-pointer">
                                <div
                                    class="compare-btn md:w-12 md:h-12 w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-xl duration-300 hover:bg-black hover:text-white">
                                    <i class="ph-fill ph-arrows-counter-clockwise cursor-pointer heading6"></i>
                                </div>
                                <span>Compare</span>
                            </div>
                            <div class="share flex items-center gap-3 cursor-pointer">
                                <div
                                    class="share-btn md:w-12 md:h-12 w-10 h-10 flex items-center justify-center border border-line cursor-pointer rounded-xl duration-300 hover:bg-black hover:text-white">
                                    <i class="ph-fill ph-share-network cursor-pointer heading6"></i>
                                </div>
                                <span>Share Products</span>
                            </div>
                        </div>
                        <div class="more-infor mt-6">
                            <div class="flex items-center gap-4 flex-wrap">
                                <div class="flex items-center gap-1">
                                    <i class="ph ph-arrow-clockwise cursor-pointer body1"></i>
                                    <div class="text-title">Delivery & Return</div>
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="ph ph-question cursor-pointer body1"></i>
                                    <div class="text-title">Ask A Question</div>
                                </div>
                            </div>
                            <div class="flex items-center flex-wrap gap-1 mt-3">
                                <i class="ph ph-timer cursor-pointer body1"></i>
                                <span class="text-title">Estimated Delivery:</span>
                                <span class="text-secondary">14 January - 18 January</span>
                            </div>
                            <div class="flex items-center flex-wrap gap-1 mt-3">
                                <i class="ph ph-eye cursor-pointer body1"></i>
                                <span class="text-title">38</span>
                                <span class="text-secondary">people viewing this product right now!</span>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">SKU:</div>
                                <div class="text-secondary">53453412</div>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">Categories:</div>
                                <div class="list-category text-secondary">fashion, women</div>
                            </div>
                            <div class="flex items-center gap-1 mt-3">
                                <div class="text-title">Tag:</div>
                                <div class="list-tag text-secondary">dress</div>
                            </div>
                        </div>
                        <div class="list-payment mt-7">
                            <div
                                class="main-content lg:pt-8 pt-6 lg:pb-6 pb-4 sm:px-4 px-3 border border-line rounded-xl relative max-md:w-2/3 max-sm:w-full">
                                <div
                                    class="heading6 px-5 bg-white absolute -top-[14px] left-1/2 -translate-x-1/2 whitespace-nowrap">
                                    Guranteed safe checkout</div>
                                <div class="list grid grid-cols-6">
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-0.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-1.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-2.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-3.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-4.png" alt="payment" class="w-full" />
                                    </div>
                                    <div class="item flex items-center justify-center lg:px-3 px-1">
                                        <img src="./assets/images/payment/Frame-5.png" alt="payment" class="w-full" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/phosphor-icons.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/header.js"></script>
    <script>
        let selectedCategory = 'All Categories';

        // Toggle category menu visibility
        function toggleCategoryMenu() {
            const menu = document.getElementById('sub-menu-category');
            menu.classList.toggle('hidden');
        }

        // Select a category and update the UI
        function selectCategory(category) {
            selectedCategory = category;
            document.getElementById('selected-category').innerText = category;
            toggleCategoryMenu();
            fetchProductsByCategory(category);
        }

        // Handle product search
        async function searchProducts() {
            const query = document.getElementById('search-input').value;
            const url = `/api/products?search=${encodeURIComponent(query)}&type=${encodeURIComponent(selectedCategory)}`;
            try {
                const response = await fetch(url);
                const data = await response.json();

                if (response.status === 200) {
                    console.log(data);
                    alert(`Success: ${data.message}`);
                    // Implement navigation or display results
                } else {
                    alert('Failed to fetch products');
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }

        // Fetch products by category
        async function fetchProductsByCategory(category) {
            if (category === 'All Categories') {
                category = ''; // Fetch all products
            }
            const url = `/api/products?type=${encodeURIComponent(category)}`;
            try {
                const response = await fetch(url);
                const data = await response.json();

                if (response.status === 200) {
                    console.log(data);
                    alert(`Success: Products fetched for category ${category}`);
                    // Implement navigation or display results
                } else {
                    alert('Failed to fetch products by category');
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }
    </script>

    @yield('js')
</body>

</html>
