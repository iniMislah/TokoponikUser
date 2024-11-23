@extends('layouts.base')
@section('head')
<div class="breadcrumb-block style-shared">
                <div class="breadcrumb-main bg-linear overflow-hidden">
                    <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                        <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                            <div class="text-content">
                                <div class="heading2 text-center">My Account</div>
                                <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                    <a href="index.html">Homepage</a>
                                    <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                    <div class="text-secondary2 capitalize">My Account</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('content')
<div class="my-account-block md:py-20 py-10">
            <div class="container">
                <div class="content-main lg:px-[60px] md:px-4 flex gap-y-8 max-md:flex-col w-full">
                    <div class="left md:w-1/3 w-full xl:pr-[3.125rem] lg:pr-[28px] md:pr-[16px]">
                        <div class="user-infor bg-surface md:px-8 px-5 md:py-10 py-6 md:rounded-[20px] rounded-xl">
                            <div class="heading flex flex-col items-center justify-center">
                                <div class="name heading6 mt-4 text-center" class="/auth/users/id/info" ></div>
                            </div>
                                <a href="#!" class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5" data-item="orders">
                                    <span class="ph ph-package text-xl"></span>
                                    <strong class="heading6">History Orders</strong>
                                </a>
                                <a href="#!" class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5" data-item="address">
                                    <span class="ph ph-tag text-xl"></span>
                                    <strong class="heading6">My Address</strong>
                                </a>
                                {{-- <a href="#!" class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5" data-item="setting">
                                    <span class="ph ph-gear-six text-xl"></span>
                                    <strong class="heading6">Setting</strong>
                                </a> --}}
                                <a href="/login" class="category-item flex items-center gap-3 w-full px-5 py-4 rounded-lg cursor-pointer duration-300 hover:bg-white mt-1.5">
                                    <span class="ph ph-sign-out text-xl"></span>
                                    <strong class="heading6">Logout</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-content w-full p-7 border border-line rounded-xl" data-item="address">
                        <form id="address-form">
                            <button type="button" class="tab_btn flex items-center justify-between w-full pb-1.5 border-b border-line active" data-item="billing">
                                <strong class="heading6">Billing Address</strong>
                                <span class="ph ph-caret-down text-2xl ic_down duration-300"></span>
                            </button>
                            <div class="form_address active" data-item="billing">
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                    <!-- First Name -->
                                    <div class="first-name">
                                        <label for="billingFirstName" class="caption1 capitalize">First Name <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingFirstName" type="text" required />
                                    </div>

                                    <!-- Last Name -->
                                    <div class="last-name">
                                        <label for="billingLastName" class="caption1 capitalize">Last Name <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingLastName" type="text" required />
                                    </div>

                                    <!-- Note -->
                                    <div class="note">
                                        <label for="billingNote" class="caption1 capitalize">Note (optional)</label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingNote" type="text" />
                                    </div>

                                    <!-- Province -->
                                    <div class="province">
                                        <label for="billingProvince" class="caption1 capitalize">Province / Provinsi <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingProvince" type="text" required />
                                    </div>

                                    <!-- Street Address -->
                                    <div class="street">
                                        <label for="billingStreet" class="caption1 capitalize">Street Address <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingStreet" type="text" required />
                                    </div>

                                    <!-- City -->
                                    <div class="city">
                                        <label for="billingCity" class="caption1 capitalize">Town / Kota <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCity" type="text" required />
                                    </div>

                                    <!-- Subdistrict -->
                                    <div class="subdistrict">
                                        <label for="billingSubdistrict" class="caption1 capitalize">Subdistrict / Kecamatan <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingSubdistrict" type="text" required />
                                    </div>

                                    <!-- Postcode -->
                                    <div class="postcode">
                                        <label for="billingZip" class="caption1 capitalize">Postcode <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingZip" type="text" required />
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-full mt-4">Add Address</button>
                        </form>
                    </div>



                        </div>
                    <div class="right list-filter md:w-2/3 w-full pl-2.5">
                        <div class="filter-item text-content w-full active" data-item="dashboard">
                            <div class="overview grid sm:grid-cols-3 gap-5">
                            </div>
                        </div>
                        <div class="filter-item tab_order text-content overflow-hidden w-full p-7 border border-line rounded-xl" data-item="orders">
                            <h6 class="heading6">Your Orders</h6>
                            <div class="w-full overflow-x-auto">
                                <div class="menu-tab relative grid grid-cols-5 max-lg:w-[500px] max-md:max-w-max border-b border-line mt-3">
                                    <div class="indicator absolute bottom-0 w-1/5 h-0.5 bg-black duration-500"></div>
                                    <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black active">all</button>
                                    <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">pending</button>
                                    <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">delivery</button>
                                    <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">completed</button>
                                    <button class="tab-item relative px-3 py-2.5 text-button text-secondary text-center duration-300 hover:text-black">canceled</button>
                                </div>
                            </div>
                            <div class="list_order">
                                <div class="order_item mt-5 border border-line rounded-lg box-shadow-xs">
                                    <div class="flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line">
                                        <div class="flex items-center gap-2">
                                            <strong class="text-title">Order Number:</strong>
                                            <strong class="order_number text-button uppercase">s184989823</strong>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <strong class="text-title">Order status:</strong>
                                            <span class="tag px-4 py-1.5 rounded-full bg-opacity-10 bg-purple text-purple caption1 font-semibold">Delivery</span>
                                        </div>
                                    </div>
                                    <div class="list_prd px-5">
                                        <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                            <a href="product-default.html" class="flex items-center gap-5">
                                                <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                                    <img src="./assets/images/product/1000x1000.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                                </div>
                                                <div>
                                                    <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                                    <div class="caption1 text-secondary mt-2">
                                                        <span class="prd_size uppercase">XL</span>
                                                        <span>/</span>
                                                        <span class="prd_color capitalize">Yellow</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="text-title">
                                                <span class="prd_quantity">1</span>
                                                <span> X </span>
                                                <span class="prd_price">$45.00</span>
                                            </div>
                                        </div>
                                        <div class="prd_item flex flex-wrap items-center justify-between gap-3 py-5 border-b border-line">
                                            <a href="product-default.html" class="flex items-center gap-5">
                                                <div class="bg-img flex-shrink-0 md:w-[100px] w-20 aspect-square rounded-lg overflow-hidden">
                                                    <img src="./assets/images/product/1000x1000.png" alt="Contrasting sheepskin sweatshirt" class="w-full h-full object-cover" />
                                                </div>
                                                <div>
                                                    <div class="prd_name text-title">Contrasting sheepskin sweatshirt</div>
                                                    <div class="caption1 text-secondary mt-2">
                                                        <span class="prd_size uppercase">XL</span>
                                                        <span>/</span>
                                                        <span class="prd_color capitalize">White</span>
                                                    </div>
                                                </div>
                                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item tab_address text-content w-full p-7 border border-line rounded-xl" data-item="address">
                            <form>
                                <button type="button" class="tab_btn flex items-center justify-between w-full pb-1.5 border-b border-line active" data-item="billing">
                                    <strong class="heading6">Billing address</strong>
                                    <span class="ph ph-caret-down text-2xl ic_down duration-300"></span>
                                </button>
                                <div class="form_address active" data-item="billing">
                                    <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                        <div class="first-name">
                                            <label for="billingFirstName" class="caption1 capitalize">First Name <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingFirstName" type="text" required />
                                        </div>
                                        <div class="last-name">
                                            <label for="billingLastName" class="caption1 capitalize">Last Name <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingLastName" type="text" required />
                                        </div>
                                        <div class="company">
                                            <label for="billingCompany" class="caption1 capitalize">Company name (optional)</label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCompany" type="text" required />
                                        </div>
                                        <div class="country">
                                            <label for="billingCountry" class="caption1 capitalize">Country / Region <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCountry" type="text" required />
                                        </div>
                                        <div class="street">
                                            <label for="billingStreet" class="caption1 capitalize">street address <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingStreet" type="text" required />
                                        </div>
                                        <div class="city">
                                            <label for="billingCity" class="caption1 capitalize">Town / city <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingCity" type="text" required />
                                        </div>
                                        <div class="state">
                                            <label for="billingState" class="caption1 capitalize">state <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingState" type="text" required />
                                        </div>
                                        <div class="zip">
                                            <label for="billingZip" class="caption1 capitalize">ZIP <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingZip" type="text" required />
                                        </div>
                                        <div class="phone">
                                            <label for="billingPhone" class="caption1 capitalize">Phone <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingPhone" type="text" required />
                                        </div>
                                        <div class="email">
                                            <label for="billingEmail" class="caption1 capitalize">Email <span class="text-red">*</span></label>
                                            <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="billingEmail" type="email" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="block-button lg:mt-10 mt-6">
                                    <button type="submit" class="button-main bg-black">Update Address</button>
                                </div>
                            </form>
                        </div>
                        <div class="filter-item text-content w-full p-7 border border-line rounded-xl" data-item="setting">
                            <form>
                                <div class="heading5 pb-4">Information</div>
                                <div class="upload_image col-span-full">
                                    <label for="uploadImage">Upload Avatar: <span class="text-red">*</span></label>
                                    <div class="flex flex-wrap items-center gap-5 mt-3">
                                        <div class="bg_img flex-shrink-0 relative w-[7.5rem] h-[7.5rem] rounded-lg overflow-hidden bg-surface">
                                            <span class="ph ph-image text-5xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-secondary"></span>
                                            <img src="./assets/images/avatar/1.png" alt="avatar" class="upload_img relative z-[1] w-full h-full object-cover" />
                                        </div>
                                        <div>
                                            <strong class="text-button">Upload File:</strong>
                                            <p class="caption1 text-secondary mt-1">JPG 120x120px</p>
                                            <div class="upload_file flex items-center gap-3 w-[220px] mt-3 px-3 py-2 border border-line rounded">
                                                <label for="uploadImage" class="caption2 py-1 px-3 rounded bg-line whitespace-nowrap cursor-pointer">Choose File</label>
                                                <input type="file" name="uploadImage" id="uploadImage" accept="image/*" class="caption2 cursor-pointer" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm:grid-cols-2 gap-4 gap-y-5 mt-5">
                                    <div class="first-name">
                                        <label for="firstName" class="caption1 capitalize">First Name <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="firstName" type="text" value="Tony" placeholder="First name" required />
                                    </div>
                                    <div class="last-name">
                                        <label for="lastName" class="caption1 capitalize">Last Name <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="lastName" type="text" value="Nguyen" placeholder="Last name" required />
                                    </div>
                                    <div class="phone-number">
                                        <label for="phoneNumber" class="caption1 capitalize">Phone Number <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="phoneNumber" type="text" value="(+12) 345 678 910" placeholder="Phone number" required />
                                    </div>
                                    <div class="email">
                                        <label for="email" class="caption1 capitalize">Email Address <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="email" type="email" value="hi.avitex@gmail.com" placeholder="Email address" required />
                                    </div>
                                    <div class="gender">
                                        <label for="gender" class="caption1 capitalize">Gender <span class="text-red">*</span></label>
                                        <div class="select-block mt-2">
                                            <select class="border border-line px-4 py-3 w-full rounded-lg" id="gender" name="gender" value="default">
                                                <option value="default" disabled>Choose Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <span class="ph ph-caret-down arrow-down text-lg"></span>
                                        </div>
                                    </div>
                                    <div class="birth">
                                        <label for="birth" class="caption1">Day of Birth <span class="text-red">*</span></label>
                                        <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="birth" type="date" placeholder="Day of Birth" required />
                                    </div>
                                </div>
                                <div class="heading5 pb-4 lg:mt-10 mt-6">Change Password</div>
                                <div class="pass">
                                    <label for="password" class="caption1">Current password <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="password" type="password" placeholder="Password *" required />
                                </div>
                                <div class="new-pass mt-5">
                                    <label for="newPassword" class="caption1">New password <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="newPassword" type="password" placeholder="New Password *" required />
                                </div>
                                <div class="confirm-pass mt-5">
                                    <label for="confirmPassword" class="caption1">Confirm new password <span class="text-red">*</span></label>
                                    <input class="border-line mt-2 px-4 py-3 w-full rounded-lg" id="confirmPassword" type="password" placeholder="Confirm Password *" required />
                                </div>
                                <div class="block-button lg:mt-10 mt-6">
                                    <button class="button-main">Save Change</button>
                                </div>
                            </form>
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
        <script src="{{ url('assets/js/myaccount.js') }}"></script>
@endsection
