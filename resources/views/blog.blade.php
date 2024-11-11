@extends('layouts.base')


@section('head')
<div class="breadcrumb-block style-shared">
                <div class="breadcrumb-main bg-linear overflow-hidden">
                    <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                        <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                            <div class="text-content">
                                <div class="heading2 text-center">Blog Tokoponik</div>
                                <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                    <a href="index.html">Homepage</a>
                                    <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                    <div class="text-secondary2 capitalize">Blog</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
@endsection

@section('content')

<div class="blog grid md:py-20 py-10">
            <div class="container">
                <div class="list-blog grid lg:grid-cols-3 sm:grid-cols-2 md:gap-[42px] gap-8" data-item="9">
                    <!-- Blog Items -->
                </div>
                <div class="list-pagination w-full flex items-center justify-center gap-4 md:mt-10 mt-6"></div>
            </div>
        </div>
@endsection

@section('js')
<script src="./assets/js/phosphor-icons.js"></script>
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script src="./assets/js/main.js"></script>
        <script src="./assets/js/blog.js"></script>
@endsection