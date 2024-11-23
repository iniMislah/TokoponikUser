@extends('layouts.base')

@section('head')
<div class="breadcrumb-block style-shared">
    <div class="breadcrumb-main bg-linear overflow-hidden">
        <div class="container lg:pt-[134px] pt-24 pb-10 relative">
            <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                <div class="text-content">
                    <div class="heading2 text-center">Cart</div>
                    <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                        <a href="index.html">Homepage</a>
                        <i class="ph ph-caret-right text-sm text-secondary2"></i>
                        <div class="text-secondary2 capitalize">Cart</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="cart-block md:py-20 py-10">
    <div class="container">
        <div class="content-main flex justify-between max-xl:flex-col gap-y-8">
            <div class="xl:w-2/3 xl:pr-3 w-full">
                <div class="list-product w-full sm:mt-7 mt-5">
                    <div class="w-full">
                        <div class="heading bg-surface bora-4 pt-4 pb-4">
                            <div class="flex">
                                <div class="w-1/2">
                                    <div class="text-button text-center">Products</div>
                                </div>
                                <div class="w-1/12">
                                    <div class="text-button text-center">Price</div>
                                </div>
                                <div class="w-1/6">
                                    <div class="text-button text-center">Quantity</div>
                                </div>
                                <div class="w-1/6">
                                    <div class="text-button text-center">Total Price</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product-main w-full mt-3" id="cart-items">
                            <!-- Cart items will be dynamically inserted here -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:w-1/3 xl:pl-12 w-full">
                <div class="checkout-block bg-surface p-6 rounded-2xl">
                    <div class="heading5">Order Summary</div>
                    <div class="total-block py-5 flex justify-between border-b border-line">
                        <div class="text-title">Subtotal</div>
                        <div class="text-title">Rp<span class="total-product" id="subtotal">0</span><span>.00</span></div>
                    </div>
                    <div class="total-cart-block pt-4 pb-4 flex justify-between">
                        <div class="heading5">Total</div>
                        <div class=""><span class="heading5">Rp</span><span class="total-cart heading5" id="total-price">0</span><span class="heading5">.00</span></div>
                    </div>
                    <div class="block-button flex flex-col items-center gap-y-4 mt-5">
                        <a href="/checkout" class="checkout-btn button-main text-center w-full"> Process To Checkout</a>
                        <a class="text-button hover-underline" href="/product">Continue shopping </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // Fetch and display the cart items from localStorage
    function displayCartItems() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartItemsContainer = document.getElementById('cart-items');
        let subtotal = 0;

        cartItemsContainer.innerHTML = '';

        cart.forEach(item => {
            subtotal += item.price * item.quantity;
            const itemElement = document.createElement('div');
            itemElement.classList.add('cart-item');
            itemElement.innerHTML = `
                <div class="flex justify-between items-center">
                    <div class="w-1/2">${item.name}</div>
                    <div class="w-1/12">Rp${item.price}</div>
                    <div class="w-1/6 flex items-center justify-between">
                        <button class="decrease-btn" data-id="${item.id}">-</button>
                        <span>${item.quantity}</span>
                        <button class="increase-btn" data-id="${item.id}">+</button>
                    </div>
                    <div class="w-1/6">Rp${(item.price * item.quantity).toFixed(2)}</div>
                    <div class="w-1/6">
                        <button class="remove-btn" data-id="${item.id}">Remove</button>
                    </div>
                </div>
            `;
            cartItemsContainer.appendChild(itemElement);
        });

        // Update subtotal and total
        document.getElementById('subtotal').innerText = subtotal.toFixed(2);
        const shippingCost = document.querySelector('input[name="ship"]:checked') ? parseFloat(document.querySelector('input[name="ship"]:checked').value) : 0;
        const total = subtotal + shippingCost;
        document.getElementById('total-price').innerText = total.toFixed(2);
    }

    // Handle quantity increase, decrease, and remove product
    document.getElementById('cart-items').addEventListener('click', (event) => {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const productId = event.target.getAttribute('data-id');

        if (event.target.classList.contains('increase-btn')) {
            const product = cart.find(item => item.id === parseInt(productId));
            product.quantity++;
        } else if (event.target.classList.contains('decrease-btn')) {
            const product = cart.find(item => item.id === parseInt(productId));
            if (product.quantity > 1) product.quantity--;
        } else if (event.target.classList.contains('remove-btn')) {
            const index = cart.findIndex(item => item.id === parseInt(productId));
            cart.splice(index, 1);
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        displayCartItems(); // Update cart display
    });

    // Initial call to display cart items
    displayCartItems();
</script>
@endsection
