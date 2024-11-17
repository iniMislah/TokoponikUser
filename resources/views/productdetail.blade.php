@extends('layouts.base')
@section('content')
<div class="product-detail default">
    <div class="featured-product underwear filter-product-img md:py-20 py-14">
        <div class="container flex justify-between gap-y-6 flex-wrap">
            <div class="list-img md:w-1/2 md:pr-[45px] w-full flex-shrink-0">

            </div>
            <div class="flex w-full gap-10">
                <div>
                <img src="{{ url('assets/images/product/1000x1000.png') }}" alt="img" class="w-[400px] aspect-square rounded-lg" />

                </div>
                <div id="product-detail">

                </div>
            </div>

        </div>
    </div>
    <div class="desc-tab md:pb-20 pb-10">
        <div class="container">
            <div class="flex items-center justify-center w-full">
                <div class="menu-tab flex items-center md:gap-[60px] gap-8"></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('js')
<script src="{{ url('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ url('assets/js/main.js') }}"></script>


<script>
    async function fetchDetailProduct() {
        try {
            var token = localStorage.getItem("token");
            const response = await fetch('http://127.0.0.1:8000/api/products/'+ @json($id), {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });

            const result = await response.json();

            if (result.status == 200) {
                document.getElementById('product-detail').innerHTML = `<div class="product-item product-infor md:w-1/8 w-full lg:pl-[20px] md:pl-4">
                <div class="flex justify-between">
                    <div>
                        <div class="product-type caption2 text-secondary font-semibold uppercase">fashion</div>
                        <div class="product-name heading4 mt-1">${result.data.name}</div>
                    </div>
                    <div class="add-wishlist-btn w-10 h-10 flex-shrink-0 flex items-center justify-center border border-line cursor-pointer rounded-lg duration-300 hover:bg-black hover:text-white">
                        <i class="ph ph-heart text-xl"></i>
                    </div>
                </div>
                <div class="flex items-center gap-1 mt-3">
                    <div class="rate flex">
                        <i class="ph-fill ph-star text-sm text-yellow"></i>
                        <i class="ph-fill ph-star text-sm text-yellow"></i>
                        <i class="ph-fill ph-star text-sm text-yellow"></i>
                        <i class="ph-fill ph-star text-sm text-yellow"></i><i class="ph-fill ph-star text-sm text-yellow"></i>
                    </div>
                    <span class="caption1 text-secondary">(1.234 reviews)</span>
                </div>
                <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                    <div class="product-price heading5">  </div>
                    <div class="w-px h-4 bg-line"></div>
                    <div class="product-description text-secondary mt-3"> </div>
                </div>
                <div class="list-action mt-6">
                    <div class="text-title mt-5">Quantity:</div>
                    <div class="choose-quantity flex items-center max-xl:flex-wrap lg:justify-between gap-5 mt-3">
                        <div class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[140px] w-[120px] flex-shrink-0">
                            <i class="ph-bold ph-minus cursor-pointer body1"></i>
                            <div class="quantity body1 font-semibold">1</div>
                            <i class="ph-bold ph-plus cursor-pointer body1"></i>
                        </div>
                        <div class="add-cart-btn button-main whitespace-nowrap w-full text-center bg-white text-black border border-black">Add To Cart</div>
                    </div>
                    <div class="button-block mt-5">
                        <a href="/checkout" class="button-main w-full text-center">Buy It Now</a>
                    </div>

                </div>
                <div class="get-it mt-6 pb-8 border-b border-line">
                    <div class="heading5">Get it today</div>
                    <div class="item flex items-center gap-3 mt-4">
                        <div class="icon-delivery-truck text-4xl"></div>
                        <div>
                            <div class="text-title">Free shipping</div>
                            <div class="caption1 text-secondary mt-1">Free shipping on orders over $75.</div>
                        </div>
                    </div>
                    <div class="item flex items-center gap-3 mt-4">
                        <div class="icon-phone-call text-4xl"></div>
                        <div>
                            <div class="text-title">Support everyday</div>
                            <div class="caption1 text-secondary mt-1">Support from 8:30 AM to 10:00 PM everyday</div>
                        </div>
                    </div>
                    <div class="item flex items-center gap-3 mt-4">
                        <div class="icon-return text-4xl"></div>
                        <div>
                            <div class="text-title">100 Day Returns</div>
                            <div class="caption1 text-secondary mt-1">Not impressed? Get a refund. You have 100 days to break our hearts.</div>
                        </div>
                    </div>
                </div>
            </div>`;
            } else {
                console.error("Failed to fetch product data.");
            }
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    fetchDetailProduct();
</script>
@endsection
