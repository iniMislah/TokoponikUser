@extends('layouts.base')

@section('head')
<div class="breadcrumb-block style-img">
            <div class="breadcrumb-main bg-linear overflow-hidden">
                <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                    <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                        <div class="text-content">
                            <div class="heading2 text-center">Product</div>
                            <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                <a href="/">Homepage</a>
                                <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                <div class="text-secondary2 capitalize">Product</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('content')
<div class="shop-product lg:py-20 md:py-14 py-10">
            <div class="container" id="product-container">
                
            </div>
        </div>
@endsection


@section('js')


<script>
       async function fetchProducts() {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/auth/products', {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer 3|t1znAbkxeIskt9rt125nmiqeIyiFmikKwMe5LGth14ec4357',
                'Content-Type': 'application/json'
            }
        });
        
        const result = await response.json();

        if (result.status === 200 && Array.isArray(result.data)) {
            renderProducts(result.data);
        } else {
            console.error("Failed to fetch product data.");
        }
    } catch (error) {
        console.error("Error fetching data:", error);
    }
}


        function renderProducts(products) {
            const productContainer = document.getElementById('product-container');
            productContainer.innerHTML = ''; // Clear container

            products.forEach(product => {
                const productItem = `
                    <div class="product-item grid-type style-5" data-item="${product.id}">
                        <div class="product-main cursor-pointer block">
                            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                <div class="product-tag text-button-uppercase text-white bg-red px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">Sale</div>

                                <div class="product-img w-full h-full aspect-[3/4]">
                                    <img class="w-full h-full object-cover duration-700" src="./assets/images/product/1000x1000.png" alt="${product.name}" />
                                    <img class="w-full h-full object-cover duration-700" src="./assets/images/product/1000x1000.png" alt="${product.name}" />
                                </div>
                                
                                <div class="countdown-time-block py-1.5 flex items-center justify-center">
                                    <div class="text-xs font-semibold uppercase text-red">
                                        <span class="countdown-day">24</span>
                                        <span>D : </span>
                                        <span class="countdown-hour">14</span>
                                        <span>H : </span>
                                        <span class="countdown-minute">36</span>
                                        <span>M : </span>
                                        <span class="countdown-second">51</span>
                                        <span>S</span>
                                    </div>
                                </div>
                                <div class="list-action flex items-center justify-center gap-3 px-5 absolute w-full bottom-5">
                                    <div class="add-wishlist-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                        <i class="ph ph-heart text-xl"></i>
                                    </div>
                                    <div class="compare-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                        <i class="ph ph-arrow-counter-clockwise text-xl compare-icon"></i>
                                        <i class="ph ph-check-circle text-xl checked-icon"></i>
                                    </div>
                                    <div class="quick-view-btn sm:w-9 w-8 sm:h-9 h-8 flex items-center justify-center rounded-full bg-white duration-300 relative flex-shrink-0">
                                        <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Quick View</div>
                                        <i class="ph ph-eye text-xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product-infor mt-4 lg:mb-7">
                                <div class="product-name text-title duration-300">${product.name}</div>
                                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                    <div class="product-price text-title">Rp ${parseFloat(product.price).toLocaleString()}</div>
                                </div>
                                <div class="quick-shop-btn text-button-uppercase py-2.5 text-center mt-2 rounded-full duration-300 bg-white border border-black hover:bg-black hover:text-white">Quick Shop</div>
                            </div>
                        </div>
                    </div>
                `;
                productContainer.innerHTML += productItem;
            });
        }

        // Call fetchProducts on page load
        fetchProducts();
    </script>


    
@endsection

@section('js')
<script src="./assets/js/phosphor-icons.js"></script>
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script src="./assets/js/shop.js"></script>
        <script src="./assets/js/main.js"></script>
@endsection