@extends("layouts.base")

@section("content")
<!-- Slider -->
<div class="slider-block style-nine lg:h-[480px] md:h-[400px] sm:h-[320px] h-[280px] w-full">
    <div class="container lg:pt-5 flex justify-center h-full w-full">
        <div class="slider-main lg:pl-5 h-full w-full">
            <div class="swiper swiper-slider h-full relative rounded-2xl overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full flex items-center bg-surface relative">
                            <div class="text-content md:pl-16 pl-5 basis-1/2">
                                <div class="text-sub-display">Sale! Up To 50% Off!</div>
                                <div class="heading1 md:mt-5 mt-2">Step into a World of Style</div>
                                <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3">Shop Now</a>
                            </div>
                            <div class="sub-img absolute xl:w-[33%] sm:w-[38%] w-[60%] xl:right-[100px] sm:right-[20px] -right-5 bottom-0">
                                <img src="./assets/images/slider/bg9-1.png" alt="bg9-1" class="w-full" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full flex items-center bg-[#F2E9E9] relative">
                            <div class="text-content md:pl-16 pl-5 basis-1/2">
                                <div class="text-sub-display">Sale! Up To 50% Off!</div>
                                <div class="heading1 md:mt-5 mt-2">Unveiling Fashion's Finest</div>
                                <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3">Shop Now</a>
                            </div>
                            <div class="sub-img absolute xl:w-[35%] sm:w-[40%] w-[62%] xl:right-[80px] sm:right-[20px] -right-5 bottom-0">
                                <img src="./assets/images/slider/bg9-2.png" alt="bg9-2" class="w-full" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full flex items-center bg-[#E4EADD] relative">
                            <div class="text-content md:pl-16 pl-5 basis-1/2">
                                <div class="text-sub-display">Sale! Up To 50% Off!</div>
                                <div class="heading1 md:mt-5 mt-2">Unleash Your Unique Style</div>
                                <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3">Shop Now</a>
                            </div>
                            <div class="sub-img absolute xl:w-[29%] sm:w-[33%] w-[46%] xl:right-[80px] sm:right-[20px] -right-3 bottom-0">
                                <img src="./assets/images/slider/bg9-3.png" alt="bg9-3" class="w-full" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Produk -->
<div class="tab-features-block filter-prodduct-block md:pt-20 pt-10">
    <div class="container">
        <div class="heading flex flex-col items-center text-center">
            <div class="menu-tab bg-surface rounded-2xl"></div>
        </div>
        <div id="homepage-product-container" class="list-product" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
            <!-- Produk akan dirender di sini -->
        </div>
    </div>
</div>

<!-- News Insight -->
<div class="news-block md:pt-16 pt-10 bg-surface">
    <div class="container mx-auto px-4">
        <div class="heading flex flex-col items-center text-center mb-8">
            <h2 class="heading3">News Insight</h2>
            <p class="text-secondary2 mt-2">Stay updated with our latest news</p>
        </div>
        <div id="news-container" class="list-blog grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
            <!-- Berita akan dirender di sini -->
        </div>
    </div>
</div>

<div class="brand-block md:py-[60px] py-[32px]">
    <div class="container"></div>
</div>
@endsection

@section('js')
<script src="./assets/js/phosphor-icons.js"></script>
<script src="./assets/js/swiper-bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
<script>
    async function fetchHomepageProducts() {
        try {
            var token = localStorage.getItem("token");
            const response = await fetch('http://127.0.0.1:8000/api/products', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });

            const result = await response.json();

            if (result.status === 200 && Array.isArray(result.data)) {
                renderHomepageProducts(result.data);
            } else {
                console.error("Failed to fetch product data.");
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    function renderHomepageProducts(products) {
        const productContainer = document.getElementById('homepage-product-container');
        productContainer.innerHTML = '';

        let wishlist = JSON.parse(localStorage.getItem("wishlistStore")) || [];
        let wishlistIds = wishlist.map(item => item.id);

        products.forEach(product => {
            const productImage = product.product_pics.length > 0 ? product.product_pics[0] : './assets/images/placeholder.png';

            const productItem = `
            <a href="/homepage/${product.id}" style="width:300px" class="product-item" data-item="1">
                <div class="product-main cursor-pointer block">
                    <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                        <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                            <div data-product='${JSON.stringify(product)}'
                                class="${wishlistIds.includes(product.id) ? 'active' : ''} add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">
                                    Add To Wishlist
                                </div>
                                <i class="${wishlistIds.includes(product.id) ? 'ph-fill' : 'ph'} ph-heart text-lg"></i>
                            </div>
                        </div>
                        <div class="product-img w-full h-full aspect-[3/4]">
                            <img class="w-full h-full object-cover duration-700" src="${productImage}" alt="${product.name}" />
                        </div>
                        <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5">
                            <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">
                                Quick View
                            </div>
                            <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">
                                Add To Cart
                            </div>
                        </div>
                    </div>
                    <div class="product-infor mt-4 lg:mb-7">
                        <div class="product-name text-title duration-300">${product.name}</div>
                        <div class="product-description text-secondary2">${product.description}</div>
                        <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                            <div class="product-price text-title">Rp. ${parseFloat(product.price).toLocaleString('id-ID')}</div>
                        </div>
                    </div>
                </div>
            </div>`;
            productContainer.innerHTML += productItem;
        });
    }

    fetchHomepageProducts();
</script>
@endsection
