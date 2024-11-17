@extends('layouts.base')

@section('head')

    @endsection
@section('content')
<div class="blog blog-detail detail">
    <div class="bg-img md:mt-[74px] mt-14">
        <img src="{{ asset('assets/images/blog/1.png') }}" alt="img" class="blog-img w-full min-[1600px]:h-[800px] xl:h-[640px] lg:h-[520px] sm:h-[380px] h-[260px] object-cover" />
    </div>
    <div class="container md:pt-20 pt-10">
        <div class="blog-content flex items-center justify-center">
            <div class="main md:w-5/6 w-full">
                <div class="blog-tag bg-green py-1 px-2.5 rounded-full text-button-uppercase inline-block">Fashion</div>
                <div class="heading3 blog-title mt-3">Fashion Trends to Watch Out for in Summer 2024</div>
                <div class="author flex items-center gap-4 mt-4">
                    <div class="avatar w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                        <img src="{{ asset('assets/images/avatar/1.png') }}" alt="avatar" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="blog-author caption1 text-secondary">by Chris Evans</div>
                        <div class="line w-5 h-px bg-secondary"></div>
                        <div class="blog-date caption1 text-secondary">Dec 20, 2024</div>
                    </div>
                </div>
                <div class="content md:mt-8 mt-5">
                    <div class="blog-description body1">
                        Fashion is constantly evolving, and staying ahead of the trends can be both exciting and challenging.
                    </div>
                    <div class="body1 mt-3">
                        I've always been passionate about fashion and have a huge collection from over the years! When it comes to style, I could never find exactly what I was looking for and I would often mix and match pieces to create the perfect look.
                    </div>
                    <div class="list-img grid sm:grid-cols-2 gap-[30px] md:mt-8 mt-5">
                        <!-- Add your blog images here -->
                    </div>
                    <div class="heading4 md:mt-8 mt-5">Summer Fashion Trends 2024</div>
                    <div class="body1 mt-4">
                        This summer's fashion is all about comfort, sustainability, and bold expressions. From vibrant colors to sustainable materials, the trends are diverse and exciting.
                    </div>
                    <div class="body1 mt-4">
                        The key pieces for this season include oversized blazers, crop tops, wide-leg pants, and sustainable denim. These pieces can be mixed and matched to create various stylish looks.
                    </div>
                </div>

                <!-- Action Section -->
                <div class="action flex items-center justify-between flex-wrap gap-5 md:mt-8 mt-5">
                    <div class="left flex items-center gap-3 flex-wrap">
                        <p>Tag:</p>
                        <div class="list flex items-center gap-3 flex-wrap">
                            <a href="#" class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase cursor-pointer duration-300 hover:bg-black hover:text-white">fashion</a>
                            <a href="#" class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase cursor-pointer duration-300 hover:bg-black hover:text-white">summer</a>
                            <a href="#" class="tags bg-surface py-1.5 px-4 rounded-full text-button-uppercase cursor-pointer duration-300 hover:bg-black hover:text-white">trends</a>
                        </div>
                    </div>

                    <!-- Social Share Section -->
                    <div class="right flex items-center gap-3 flex-wrap">
                        <p>Share:</p>
                        <div class="list flex items-center gap-3 flex-wrap">
                            <a href="#" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <i class="ph ph-facebook-logo"></i>
                            </a>
                            <a href="#" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <i class="ph ph-instagram-logo"></i>
                            </a>
                            <a href="#" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                                <i class="ph ph-twitter-logo"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Navigation Section -->
                <div class="next-pre flex items-center justify-between md:mt-8 mt-5 py-6 border-y border-line">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/blog.js') }}"></script>
@endsection
