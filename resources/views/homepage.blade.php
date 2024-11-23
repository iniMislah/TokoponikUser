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
                                <div class="text-sub-display"></div>
                                <div class="heading1 md:mt-5 mt-2"></div>

                            </div>
                            <div class="sub-img absolute xl:w-[33%] sm:w-[38%] w-[60%] xl:right-[100px] sm:right-[20px] -right-5 bottom-0">
                                <img src="./assets/images/slider/bg9-1.png" alt="bg9-1" class="w-full" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full flex items-center bg-[#F2E9E9] relative">
                            <div class="text-content md:pl-16 pl-5 basis-1/2">
                                <div class="text-sub-display"></div>
                                <div class="heading1 md:mt-5 mt-2"></div>

                            </div>
                            <div class="sub-img absolute xl:w-[35%] sm:w-[40%] w-[62%] xl:right-[80px] sm:right-[20px] -right-5 bottom-0">
                                <img src="./assets/images/slider/bg9-2.png" alt="bg9-2" class="w-full" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item h-full w-full flex items-center bg-[#E4EADD] relative">
                            <div class="text-content md:pl-16 pl-5 basis-1/2">
                                <div class="text-sub-display"></div>
                                <div class="heading1 md:mt-5 mt-2"></div>

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
        <div id="news-container"
            class="list-blog grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 justify-items-stretch items-stretch">
            <!-- News items will be rendered here by JavaScript -->
        </div>
    </div>
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
        const response = await fetch('https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/products', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json'
            }
        });

        const result = await response.json();
        // Tambahkan log untuk melihat struktur data
        console.log("API Response:", result);

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
        // Gunakan operator OR untuk memberikan fallback image jika gambar tidak tersedia
        const imageUrl = product.image || product.image_url || '/assets/images';

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
                        <img class="w-full h-full object-cover duration-700"
                             src="${imageUrl}"
                             alt="${product.name}"
                             />
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
        </a>`;

        productContainer.innerHTML += productItem;
    });
}

    fetchHomepageProducts();
</script>
<script
// Tambahkan fungsi fetch berita
async function fetchNews() {
    try {
        var token = localStorage.getItem("token");
        const response = await fetch('https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/news', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json'
            }
        });

        const result = await response.json();
        console.log("News API Response:", result); // Untuk debugging

        if (result.status === 200 && Array.isArray(result.data)) {
            renderNews(result.data);
        } else {
            console.error("Failed to fetch news data.");
        }
    } catch (error) {
        console.error("Error fetching news:", error);
    }
}

// Fungsi untuk render berita
function renderNews(newsItems) {
    const newsContainer = document.getElementById('news-container');
    newsContainer.innerHTML = '';

    newsItems.forEach(news => {
        const imageUrl = news.image || news.image_url || '/assets/images/slider/bg9-1.png';

        const newsItem = `
            <div class="news-item flex flex-col bg-white rounded-lg shadow-md overflow-hidden">
                <img src="${imageUrl}"
                     alt="${news.title}"
                     class="w-full h-[200px] object-cover"
                     onerror="this.onerror=null; this.src='/assets/images/slider/bg9-1.png';">
                <div class="p-4 flex flex-col justify-between h-full">
                    <h3 class="text-lg font-semibold text-title truncate">${news.title}</h3>
                    <p class="mt-2 text-secondary2 text-sm">${news.description || news.content}</p>
                    <a href="/news/${news.id}" class="mt-auto text-button-primary text-sm font-semibold">Read More</a>
                </div>
            </div>
        `;

        newsContainer.innerHTML += newsItem;
    });
}

// Panggil fungsi fetch saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    fetchNews();
});
</script>
@endsection
