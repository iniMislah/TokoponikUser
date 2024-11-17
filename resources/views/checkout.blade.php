@extends("layouts.base")
@section("head")

<div class="breadcrumb-block style-shared">
                <div class="breadcrumb-main bg-linear overflow-hidden">
                    <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                        <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                            <div class="text-content">
                                <div class="heading2 text-center">Checkout</div>
                                <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                    <a href="index.html">Homepage</a>
                                    <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                    <div class="text-secondary2 capitalize">Checkout</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="checkout-block md:py-20 py-10">
            <div class="container">
                <div class="content-main flex max-lg:flex-col-reverse gap-y-10 justify-between">
                    <div class="left lg:w-1/2">
                        <div class="login bg-surface py-3 px-4 flex justify-between rounded-lg">
                            <div class="left flex items-center"><span class="text-on-surface-variant1 pr-4">Already have an account? </span><a href="/login" class="text-button text-on-surface hover-underline cursor-pointer hover:underline">Login</a></div>
                            <div class="right"><i class="ph ph-caret-down fs-20 cursor-pointer"></i></div>
                        </div>
                        <div class="form-login-block mt-3">
                            <form class="p-5 border border-line rounded-lg">
                                <div class="grid sm:grid-cols-2 gap-5">
                                    <div class="email">
                                        <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="username" type="email" placeholder="Username or email" required />
                                    </div>
                                    <div class="pass">
                                        <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="password" type="password" placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="block-button mt-3">
                                    <a href="/login" class="button-main button-blue-hover">Login</a>
                                </div>
                            </form>
                        </div>
                        <div class="information mt-5">
                            <div class="heading5">Information</div>
                            <div class="form-checkout mt-5">
                                <form>
                                    <div class="grid sm:grid-cols-2 gap-4 gap-y-5 flex-wrap">
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="firstName" type="text" placeholder="First Name *" required />
                                        </div>
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="lastName" type="text" placeholder="Last Name *" required />
                                        </div>
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="email" type="email" placeholder="Email Address *" required />
                                        </div>
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="phoneNumber" type="number" placeholder="Phone Numbers *" required />
                                        </div>
                                        <div class="col-span-full select-block">
                                            <select class="border border-line px-4 py-3 w-full rounded-lg" id="region" name="region">
                                                <option value="default">Choose Country/Region</option>
                                                <option value="India">India</option>
                                                <option value="France">France</option>
                                                <option value="Singapore">Singapore</option>
                                            </select>
                                            <i class="ph ph-caret-down arrow-down"></i>
                                        </div>
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="city" type="text" placeholder="Town/City *" required />
                                        </div>
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="apartment" type="text" placeholder="Street,..." required />
                                        </div>
                                        <div class="select-block">
                                            <select class="border border-line px-4 py-3 w-full rounded-lg" id="country" name="country">
                                                <option value="default">Choose State</option>
                                                <option value="India">India</option>
                                                <option value="France">France</option>
                                                <option value="Singapore">Singapore</option>
                                            </select>
                                            <i class="ph ph-caret-down arrow-down"></i>
                                        </div>
                                        <div class="">
                                            <input class="border-line px-4 py-3 w-full rounded-lg" id="postal" type="text" placeholder="Postal Code *" required />
                                        </div>
                                        <div class="col-span-full">
                                            <textarea class="border border-line px-4 py-3 w-full rounded-lg" id="note" name="note" placeholder="Write note..."></textarea>
                                        </div>
                                    </div>
                                    <div class="payment-block md:mt-10 mt-6">
                                        <div class="heading5">Choose payment Option:</div>
                                        <div class="list-payment mt-5">
                                            <div class="type bg-surface p-5 border border-line rounded-lg">
                                                <input class="cursor-pointer" type="radio" id="credit" name="payment" />
                                                <label class="text-button pl-2 cursor-pointer" for="credit">Credit Card</label>
                                                <div class="infor">
                                                    <div class="text-on-surface-variant1 pt-4">Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</div>
                                                    <div class="row">
                                                        <div class="col-12 mt-3">
                                                            <label for="cardNumberCredit">Card Numbers</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="cardNumberCredit" placeholder="ex.1234567290" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="dateCredit">Date</label>
                                                            <input class="border-line px-4 py-3 w-full rounded mt-2" type="date" id="dateCredit" name="date" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="ccvCredit">CCV</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="ccvCredit" placeholder="****" />
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2 mt-3">
                                                        <input type="checkbox" id="saveCredit" name="save" />
                                                        <label class="text-button" for="saveCredit">Save Card Details</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="type bg-surface p-5 border border-line rounded-lg mt-5">
                                                <input class="cursor-pointer" type="radio" id="delivery" name="payment" />
                                                <label class="text-button pl-2 cursor-pointer" for="delivery">Cash on delivery</label>
                                                <div class="infor">
                                                    <div class="text-on-surface-variant1 pt-4">Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</div>
                                                    <div class="row">
                                                        <div class="col-12 mt-3">
                                                            <label for="cardNumberDelivery">Card Numbers</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="cardNumberDelivery" placeholder="ex.1234567290" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="dateDelivery">Date</label>
                                                            <input class="border-line px-4 py-3 w-full rounded mt-2" type="date" id="dateDelivery" name="date" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="ccvDelivery">CCV</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="ccvDelivery" placeholder="****" />
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2 mt-3">
                                                        <input type="checkbox" id="saveDelivery" name="save" />
                                                        <label class="text-button" for="saveDelivery">Save Card Details</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="type bg-surface p-5 border border-line rounded-lg mt-5">
                                                <input class="cursor-pointer" type="radio" id="apple" name="payment" />
                                                <label class="text-button pl-2 cursor-pointer" for="apple">Apple Pay</label>
                                                <div class="infor">
                                                    <div class="text-on-surface-variant1 pt-4">Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</div>
                                                    <div class="row">
                                                        <div class="col-12 mt-3">
                                                            <label for="cardNumberApple">Card Numbers</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="cardNumberApple" placeholder="ex.1234567290" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="dateApple">Date</label>
                                                            <input class="border-line px-4 py-3 w-full rounded mt-2" type="date" id="dateApple" name="date" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="ccvApple">CCV</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="ccvApple" placeholder="****" />
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2 mt-3">
                                                        <input type="checkbox" id="saveApple" name="save" />
                                                        <label class="text-button" for="saveApple">Save Card Details</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="type bg-surface p-5 border border-line rounded-lg mt-5">
                                                <input class="cursor-pointer" type="radio" id="paypal" name="payment" />
                                                <label class="text-button pl-2 cursor-pointer" for="paypal">PayPal</label>
                                                <div class="infor">
                                                    <div class="text-on-surface-variant1 pt-4">Make your payment directly into our bank account. Your order will not be shipped until the funds have cleared in our account.</div>
                                                    <div class="row">
                                                        <div class="col-12 mt-3">
                                                            <label for="cardNumberPaypal">Card Numbers</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="cardNumberPaypal" placeholder="ex.1234567290" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="datePaypal">Date</label>
                                                            <input class="border-line px-4 py-3 w-full rounded mt-2" type="date" id="datePaypal" name="date" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="ccvPaypal">CCV</label>
                                                            <input class="cursor-pointer border-line px-4 py-3 w-full rounded mt-2" type="text" id="ccvPaypal" placeholder="****" />
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2 mt-3">
                                                        <input type="checkbox" id="savePaypal" name="save" />
                                                        <label class="text-button" for="savePaypal">Save Card Details</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-button md:mt-10 mt-6">
                                        <button class="button-main w-full">Payment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="right lg:w-5/12">
                        <div class="checkout-block">
                            <div class="heading5 pb-3">Your Order</div>
                            <div class="list-product-checkout"></div>
                            <div class="discount-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Discounts</div>
                                <div class="text-title">-$<span class="discount">0</span><span>.00</span></div>
                            </div>
                            <div class="ship-block py-5 flex justify-between border-b border-line">
                                <div class="text-title">Shipping</div>
                                <div class="text-title">Free</div>
                            </div>
                            <div class="total-cart-block pt-5 flex justify-between">
                                <div class="heading5">Total</div>
                                <div class="heading5 total-cart">$0.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
