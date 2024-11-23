@extends('layouts.base')
@section('content')
<div class="product-detail default">
    <div class="featured-product underwear filter-product-img md:py-20 py-14">
        <div class="container flex justify-between gap-y-6 flex-wrap">
            <div class="list-img md:w-1/2 md:pr-[45px] w-full flex-shrink-0">
            </div>
            <div class="flex w-full gap-10">
                <div>
                    <!-- Gambar akan diperbarui melalui JavaScript -->
                    <img id="product-img" src="{{ url('assets/images/product/placeholder.png') }}" alt="Product Image" class="w-[400px] aspect-square rounded-lg" />
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
@endsection

@section('js')
<script src="{{ url('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ url('assets/js/main.js') }}"></script>

<script>
    async function fetchDetailProduct() {
        try {
            const token = localStorage.getItem("token");
            const response = await fetch('https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/products/' + @json($id), {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });

            const result = await response.json();

            if (result.status === 200) {
                // Update image source
                const productImage = result.data.image_url
                    ? `https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/products${result.data.image_url}`
                    : '{{ url("assets/images/product/placeholder.png") }}';
                document.getElementById('product-img').src = productImage;

                // Handle image error
                document.getElementById('product-img').addEventListener('error', () => {
                    document.getElementById('product-img').src = '{{ url("assets/images/product/placeholder.png") }}';
                });

                // Update product details
                document.getElementById('product-detail').innerHTML = `
                    <div class="product-item product-infor md:w-1/8 w-full lg:pl-[20px] md:pl-4">
                        <div class="flex justify-between">
                            <div>
                                <div class="product-type caption2 text-secondary font-semibold uppercase">fashion</div>
                                <div class="product-name heading4 mt-1">${result.data.name}</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 mt-3">
                            <div class="rate flex">
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                                <i class="ph-fill ph-star text-sm text-yellow"></i>
                            </div>
                            <span class="caption1 text-secondary"></span>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap mt-5 pb-6 border-b border-line">
                            <div class="product-price heading5">${result.data.price}</div>
                            <div class="w-px h-4 bg-line"></div>
                            <div class="product-description text-secondary mt-3">${result.data.description}</div>
                        </div>
                        <div class="list-action mt-6">
                            <div class="text-title mt-5">Quantity:</div>
                            <div class="choose-quantity flex items-center max-xl:flex-wrap lg:justify-between gap-5 mt-3">
                                <div class="quantity-block md:p-3 max-md:py-1.5 max-md:px-3 flex items-center justify-between rounded-lg border border-line sm:w-[140px] w-[120px] flex-shrink-0">
                                    <i class="ph-bold ph-minus cursor-pointer body1" id="decrease"></i>
                                    <div class="quantity body1 font-semibold" id="quantity">1</div>
                                    <i class="ph-bold ph-plus cursor-pointer body1" id="increase"></i>
                                </div>
                                <div class="add-cart-btn button-main whitespace-nowrap w-full text-center bg-white text-black border border-black" id="add-to-cart">Add To Cart</div>
                            </div>
                            <div class="button-block mt-5">
                                <a href="/checkout" class="button-main w-full text-center">Buy It Now</a>
                            </div>
                        </div>
                    </div>`;

                // Quantity adjustment logic
                let quantity = 1;
                document.getElementById('increase').addEventListener('click', () => {
                    quantity++;
                    document.getElementById('quantity').innerText = quantity;
                });

                document.getElementById('decrease').addEventListener('click', () => {
                    if (quantity > 1) {
                        quantity--;
                        document.getElementById('quantity').innerText = quantity;
                    }
                });

                // Add to Cart functionality
                document.getElementById('add-to-cart').addEventListener('click', () => {
                    let cart = JSON.parse(localStorage.getItem('cart')) || [];
                    const product = {
                        id: result.data.id,
                        name: result.data.name,
                        price: result.data.price,
                        quantity: quantity,
                    };

                    const existingProduct = cart.find(item => item.id === product.id);
                    if (existingProduct) {
                        existingProduct.quantity += quantity;
                    } else {
                        cart.push(product);
                    }

                    localStorage.setItem('cart', JSON.stringify(cart));
                    alert("Product added to cart!");
                });

            } else {
                console.error("Failed to fetch product data.");
            }
        } catch (error) {
            console.error(error);
        }

    }

    fetchDetailProduct();
</script>
@endsection
