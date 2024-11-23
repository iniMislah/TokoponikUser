@extends('layouts.base')

@section('head')

@endsection
@section('content')
    <div class="shop-product lg:py-20 md:py-14 py-10">
        <div id="product-container" class="list-product " style="display: flex; flex-wrap: wrap; gap: 30px;justify-content: center;">

        </div>
    </div>
@endsection


@section('js')
    <script src="./assets/js/phosphor-icons.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    {{-- <script src="./assets/js/shop.js"></script> --}}
    <script src="./assets/js/main.js"></script>

    <script>
        async function fetchProducts() {
            try {
                var token = localStorage.getItem("token");
                const response = await fetch('https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/products', {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
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

            let wishlist = JSON.parse(localStorage.getItem("wishlistStore")) || [];

// Ambil semua ID dan buat array satu dimensi
            let wishlistIds = wishlist.map((item) => item.id);

            products.forEach(product => {
                var dataJson = JSON.stringify(product)
                const productItem = `
            <div style="width:300px" class="product-item"  data-item="1">
                <div class="product-main cursor-pointer block">
                    <div
                        class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                        <div
                            class="list-action-right absolute top-3 right-3 max-lg:hidden">
                            <div data-product='${dataJson}'
                                class=" ${wishlistIds.includes(product.id) ? 'active' : ''} add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                <div
                                    class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                    Add To Wishlist</div>
                                <i class="${wishlistIds.includes(product.id) ? 'ph-fill' : 'ph'} ph-heart text-lg"></i>
                            </div>
                        </div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700"
                                src=${product.product_pics}
                                alt="img" />
                        </div>
                            <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                            <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                            <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Add To Cart</div>
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
                            </div>
                        </div>
                        <div class="product-name text-title duration-300">
                        ${product.name}</div>
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
                        </div>
                        <div
                            class="product-price-block flex items-center gap-1 flex-wrap mt-1 duration-300 relative z-[1]">
                            Rp. ${product.price}</div>
                        </div>
                         <div
                            class="product-description-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                            ${product.description}</div>
                        </div>
                </div>
            </div>

                <div class="next-pre flex items-center justify-between md:mt-20 mt-5 py-6 border-y border-line"></div>
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
@endsection
