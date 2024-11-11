@extends('layouts.base')

@section('content')


<div class="breadcrumb-block style-img">
            <div class="breadcrumb-main bg-linear overflow-hidden">
                <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                    <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                        <div class="text-content">
                            <div class="heading2 text-center">Shop</div>
                            <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                <a href="index.html">Homepage</a>
                                <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                <div class="text-secondary2 capitalize">Shop</div>
                            </div>
                        </div>
                        <div class="filter-type menu-tab flex flex-wrap items-center justify-center gap-y-5 gap-8 lg:mt-[70px] mt-12 overflow-hidden">
                            <div class="item tab-item text-button-uppercase cursor-pointer has-line-before line-2px" data-item="t-shirt">t-shirt</div>
                            <div class="item tab-item text-button-uppercase cursor-pointer has-line-before line-2px" data-item="dress">dress</div>
                            <div class="item tab-item text-button-uppercase cursor-pointer has-line-before line-2px" data-item="top">top</div>
                            <div class="item tab-item text-button-uppercase cursor-pointer has-line-before line-2px" data-item="swimwear">swimwear</div>
                            <div class="item tab-item text-button-uppercase cursor-pointer has-line-before line-2px" data-item="shirt">shirt</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-square">
            <div class="shop-product lg:py-20 md:py-14 py-10">
                <div class="container">
                    <div class="list-product-block style-grid relative">
                        <div class="filter-heading flex items-center justify-between gap-5 flex-wrap">
                            <div class="left flex has-line items-center flex-wrap gap-5">
                                <div class="filter-sidebar-btn flex items-center gap-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M4 21V14" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4 10V3" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 21V12" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 8V3" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20 21V16" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20 12V3" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 14H7" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 8H15" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17 16H23" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>Filters</span>
                                </div>
                                <div class="choose-layout menu-tab flex items-center gap-2">
                                    <div class="item tab-item three-col p-2 border border-line rounded flex items-center justify-center cursor-pointer">
                                        <div class="flex items-center gap-0.5">
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                        </div>
                                    </div>
                                    <div class="item tab-item four-col p-2 border border-line rounded flex items-center justify-center cursor-pointer active">
                                        <div class="flex items-center gap-0.5">
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                        </div>
                                    </div>
                                    <div class="item tab-item five-col p-2 border border-line rounded flex items-center justify-center cursor-pointer">
                                        <div class="flex items-center gap-0.5">
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                            <span class="w-[3px] h-4 bg-secondary2 rounded-sm"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="check-sale flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" name="filterSale" id="filter-sale" class="border-line" />
                                    <label for="filter-sale" class="cation1 cursor-pointer">Show only products on sale</label>
                                </div>
                            </div>
                            <div class="sort-product right flex items-center gap-3">
                                <label for="select-filter" class="caption1 capitalize">Sort by</label>
                                <div class="select-block relative">
                                    <select id="select-filter" name="select-filter" class="caption1 py-2 pl-3 md:pr-20 pr-10 rounded-lg border border-line">
                                        <option value="Sorting">Sorting</option>
                                        <option value="soldQuantityHighToLow">Best Selling</option>
                                        <option value="discountHighToLow">Best Discount</option>
                                        <option value="priceHighToLow">Price High To Low</option>
                                        <option value="priceLowToHigh">Price Low To High</option>
                                    </select>
                                    <i class="ph ph-caret-down absolute top-1/2 -translate-y-1/2 md:right-4 right-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar style-dropdown bg-white grid md:grid-cols-4 grid-cols-2 md:gap-[30px] gap-6">
                            <div class="filter-type-block">
                                <div class="heading6">Products Type</div>
                                <div class="list-type filter-type menu-tab mt-4">
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="t-shirt">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">t-shirt</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="dress">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">dress</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="top">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">top</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="swimwear">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">swimwear</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="shirt">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">shirt</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="underwear">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">underwear</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="sets">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">sets</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                    <div class="item tab-item flex items-center justify-between cursor-pointer" data-item="accessories">
                                        <div class="type-name text-secondary has-line-before hover:text-black capitalize">accessories</div>
                                        <div class="text-secondary2 number">6</div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="filter-size">
                                    <div class="heading6">Size</div>
                                    <div class="list-size flex items-center flex-wrap gap-3 gap-y-4 mt-4">
                                        <div class="size-item text-button w-[44px] h-[44px] flex items-center justify-center rounded-full border border-line" data-item="XS">XS</div>
                                        <div class="size-item text-button w-[44px] h-[44px] flex items-center justify-center rounded-full border border-line" data-item="S">S</div>
                                        <div class="size-item text-button w-[44px] h-[44px] flex items-center justify-center rounded-full border border-line" data-item="M">M</div>
                                        <div class="size-item text-button w-[44px] h-[44px] flex items-center justify-center rounded-full border border-line" data-item="L">L</div>
                                        <div class="size-item text-button w-[44px] h-[44px] flex items-center justify-center rounded-full border border-line" data-item="XL">XL</div>
                                        <div class="size-item text-button w-[44px] h-[44px] flex items-center justify-center rounded-full border border-line" data-item="2XL">2XL</div>
                                        <div class="size-item text-button px-4 py-2 flex items-center justify-center rounded-full border border-line" data-item="freesize">Freesize</div>
                                    </div>
                                </div>
                                <div class="filter-price mt-8">
                                    <div class="heading6">Price Range</div>
                                    <div class="tow-bar-block mt-5">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input">
                                        <input class="range-min" type="range" min="0" max="300" value="0" />
                                        <input class="range-max" type="range" min="0" max="300" value="300" />
                                    </div>
                                    <div class="price-block flex items-center justify-between flex-wrap mt-4">
                                        <div class="min flex items-center gap-1">
                                            <div>Min price:</div>
                                            <div class="min-price">$0</div>
                                        </div>
                                        <div class="min flex items-center gap-1">
                                            <div>Max price:</div>
                                            <div class="max-price">$300</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-color">
                                <div class="heading6">colors</div>
                                <div class="list-color flex items-center flex-wrap gap-3 gap-y-4 mt-4">
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="pink">
                                        <div class="color bg-[#F4C5BF] w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">pink</div>
                                    </div>
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="red">
                                        <div class="color bg-red w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">red</div>
                                    </div>
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="green">
                                        <div class="color bg-green w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">green</div>
                                    </div>
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="yellow">
                                        <div class="color bg-yellow w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">yellow</div>
                                    </div>
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="purple">
                                        <div class="color bg-purple w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">purple</div>
                                    </div>
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="black">
                                        <div class="color bg-black w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">black</div>
                                    </div>
                                    <div class="color-item px-3 py-[5px] flex items-center justify-center gap-2 rounded-full border border-line" data-item="white">
                                        <div class="color bg-[#F6EFDD] w-5 h-5 rounded-full"></div>
                                        <div class="caption1 capitalize">white</div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-brand">
                                <div class="heading6">Brands</div>
                                <div class="list-brand mt-4">
                                    <div class="brand-item flex items-center justify-between" data-item="adidas">
                                        <div class="left flex items-center cursor-pointer">
                                            <div class="block-input">
                                                <input type="checkbox" name="adidas" id="adidas" />
                                                <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                            </div>
                                            <label for="adidas" class="brand-name capitalize pl-2 cursor-pointer">adidas</label>
                                        </div>
                                        <div class="text-secondary2 number">12</div>
                                    </div>
                                    <div class="brand-item flex items-center justify-between" data-item="hermes">
                                        <div class="left flex items-center cursor-pointer">
                                            <div class="block-input">
                                                <input type="checkbox" name="hermes" id="hermes" />
                                                <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                            </div>
                                            <label for="hermes" class="brand-name capitalize pl-2 cursor-pointer">hermes</label>
                                        </div>
                                        <div class="text-secondary2 number">12</div>
                                    </div>
                                    <div class="brand-item flex items-center justify-between" data-item="zara">
                                        <div class="left flex items-center cursor-pointer">
                                            <div class="block-input">
                                                <input type="checkbox" name="zara" id="zara" />
                                                <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                            </div>
                                            <label for="zara" class="brand-name capitalize pl-2 cursor-pointer">zara</label>
                                        </div>
                                        <div class="text-secondary2 number">12</div>
                                    </div>
                                    <div class="brand-item flex items-center justify-between" data-item="nike">
                                        <div class="left flex items-center cursor-pointer">
                                            <div class="block-input">
                                                <input type="checkbox" name="nike" id="nike" />
                                                <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                            </div>
                                            <label for="nike" class="brand-name capitalize pl-2 cursor-pointer">nike</label>
                                        </div>
                                        <div class="text-secondary2 number">12</div>
                                    </div>
                                    <div class="brand-item flex items-center justify-between" data-item="gucci">
                                        <div class="left flex items-center cursor-pointer">
                                            <div class="block-input">
                                                <input type="checkbox" name="gucci" id="gucci" />
                                                <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                            </div>
                                            <label for="gucci" class="brand-name capitalize pl-2 cursor-pointer">gucci</label>
                                        </div>
                                        <div class="text-secondary2 number">12</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-filtered flex items-center gap-3 flex-wrap"></div>

                        <div class="list-product hide-product-sold grid sm:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-7" data-item="12"></div>

                        <div class="list-pagination w-full flex items-center justify-center gap-4 mt-10"></div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
<script src="./assets/js/phosphor-icons.js"></script>
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script src="./assets/js/shop.js"></script>
        <script src="./assets/js/main.js"></script>
@endsection