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
                        <div class="time countdown-cart bg-green py-3 px-5 flex items-center rounded-lg">
                            <div class="heding5">🔥</div>
                            <div class="caption1 pl-2">
                                Your cart will expire in
                                <span class="min text-red text-button fw-700"><span class="minute">10</span> : <span class="second">00</span></span>
                                <span> minutes! Please checkout now before your items sell out!</span>
                            </div>
                        </div>
                        <div class="heading banner mt-5">
                            <div class="text">
                                Buy
                                <span class="text-button"> $<span class="more-price">250</span>.00 </span>
                                <span>more to get </span>
                                <span class="text-button">freeship</span>
                            </div>
                            <div class="tow-bar-block mt-4">
                                <div class="progress-line" style="width: 50%"></div>
                            </div>
                        </div>
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
                                <div class="list-product-main w-full mt-3"></div>
                            </div>
                        </div>
                        <div class="input-block discount-code w-full h-12 sm:mt-7 mt-5">
                            <form class="w-full h-full relative">
                                <input type="text" placeholder="Add voucher discount" class="w-full h-full bg-surface pl-4 pr-14 rounded-lg border border-line" required />
                                <button class="button-main absolute top-1 bottom-1 right-1 px-5 rounded-lg flex items-center justify-center">Apply Code</button>
                            </form>
                        </div>
                        <div class="list-voucher flex items-center gap-5 flex-wrap sm:mt-7 mt-5">
                            <div class="item border border-line rounded-lg py-2">
                                <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                                    <div class="left">
                                        <div class="caption1">Discount</div>
                                        <div class="caption1 font-bold">10% OFF</div>
                                    </div>
                                    <div class="right">
                                        <div class="caption1">For all orders <br />from 200$</div>
                                    </div>
                                </div>
                                <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                                    <div class="text-button-uppercase">Code: AN6810</div>
                                    <div class="button-main py-1 px-2.5 capitalize text-xs">Apply Code</div>
                                </div>
                            </div>
                            <div class="item border border-line rounded-lg py-2">
                                <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                                    <div class="left">
                                        <div class="caption1">Discount</div>
                                        <div class="caption1 font-bold">15% OFF</div>
                                    </div>
                                    <div class="right">
                                        <div class="caption1">For all orders <br />from 300$</div>
                                    </div>
                                </div>
                                <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                                    <div class="text-button-uppercase">Code: AN6810</div>
                                    <div class="button-main py-1 px-2.5 capitalize text-xs">Apply Code</div>
                                </div>
                            </div>
                            <div class="item border border-line rounded-lg py-2">
                                <div class="top flex gap-10 justify-between px-3 pb-2 border-b border-dashed border-line">
                                    <div class="left">
                                        <div class="caption1">Discount</div>
                                        <div class="caption1 font-bold">20% OFF</div>
                                    </div>
                                    <div class="right">
                                        <div class="caption1">For all orders <br />from 400$</div>
                                    </div>
                                </div>
                                <div class="bottom gap-6 items-center flex justify-between px-3 pt-2">
                                    <div class="text-button-uppercase">Code: AN6810</div>
                                    <div class="button-main py-1 px-2.5 capitalize text-xs">Apply Code</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-1/3 xl:pl-12 w-full">
                        <div class="checkout-block bg-surface p-6 rounded-2xl">
                            <div class="heading5">Order Summary</div>
                            <div class="total-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Subtotal</div>
                                <div class="text-title">$<span class="total-product">136</span><span>.00</span></div>
                            </div>
                            <div class="discount-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Discounts</div>
                                <div class="text-title"><span>-$</span><span class="discount">0</span><span>.00</span></div>
                            </div>
                            <div class="ship-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Shipping</div>
                                <div class="choose-type flex gap-12">
                                    <div class="left">
                                        <div class="type">
                                            <input id="shipping" type="radio" name="ship" />
                                            <label class="pl-1" for="shipping">Free Shipping:</label>
                                        </div>
                                        <div class="type mt-1">
                                            <input id="local" type="radio" name="ship" value="{30}" />
                                            <label class="text-on-surface-variant1 pl-1" for="local">Local:</label>
                                        </div>
                                        <div class="type mt-1">
                                            <input id="flat" type="radio" name="ship" value="{40}" />
                                            <label class="text-on-surface-variant1 pl-1" for="flat">Flat Rate:</label>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="ship">$0.00</div>
                                        <div class="local text-on-surface-variant1 mt-1">$30.00</div>
                                        <div class="flat text-on-surface-variant1 mt-1">$40.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="total-cart-block pt-4 pb-4 flex justify-between">
                                <div class="heading5">Total</div>
                                <div class=""><span class="heading5">$</span><span class="total-cart heading5">116</span><span class="heading5">.00</span></div>
                            </div>
                            <div class="block-button flex flex-col items-center gap-y-4 mt-5">
                                <a href="checkout.html" class="checkout-btn button-main text-center w-full"> Process To Checkout</a>
                                <a class="text-button hover-underline" href="/shop-breadcrumb1.html">Continue shopping </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
<script src="./assets/js/phosphor-icons.js"></script>
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script src="./assets/js/main.js"></script>

@endsection