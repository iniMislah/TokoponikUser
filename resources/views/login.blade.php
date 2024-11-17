@extends('layouts.base')

@section('head')

<div class="breadcrumb-block style-shared">
                <div class="breadcrumb-main bg-linear overflow-hidden">
                    <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                        <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                            <div class="text-content">
                                <div class="heading2 text-center">Login</div>
                                <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                    <a href="homepage.html">Homepage</a>
                                    <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                    <div class="text-secondary2 capitalize">Login</div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('content')

<div class="login-block md:py-20 py-10">
        <div class="container">
            <div class="content-main flex gap-y-8 max-md:flex-col">
                <div class="left md:w-1/2 w-full lg:pr-[60px] md:pr-[40px] md:border-r border-line">
                    <div class="heading4">Login</div>
                    <form id="loginForm" class="md:mt-7 mt-4">
                        <div class="email">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="username" type="text" placeholder="Username or email address *" required />
                        </div>
                        <div class="pass mt-5">
                            <input class="border-line px-4 pt-3 pb-3 w-full rounded-lg" id="password" type="password" placeholder="Password *" required />
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <div class="flex items-center">
                                <div class="block-input">
                                    <input type="checkbox" name="remember" id="remember" />
                                    <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                </div>
                                <label for="remember" class="pl-2 cursor-pointer">Remember me</label>
                            </div>
                            <a href="forgot-password.html" class="font-semibold hover:underline">Forgot Your Password?</a>
                        </div>
                        <div class="block-button md:mt-7 mt-4">
                            <button class="button-main">Login</button>
                        </div>
                    </form>
                </div>
                <div class="right md:w-1/2 w-full lg:pl-[60px] md:pl-[40px] flex items-center">
                    <div class="text-content">
                        <div class="heading4">New Customer</div>
                        <div class="mt-2 text-secondary">Be part of our growing family of new customers! Join us today and unlock a world of exclusive benefits, offers, and personalized experiences.</div>
                        <div class="block-button md:mt-7 mt-4">
                            <a href="/register" class="button-main">Register</a>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(event) {
                event.preventDefault();

                const username = $('#username').val();
                const password = $('#password').val();

                $.ajax({
                    url: 'https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/login',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        username: username,
                        password: password
                    }),
                    success: function(response) {
                        if (response.status === 200) {
                            // Simpan token ke localStorage atau session storage
                            localStorage.setItem('token', response.data.token);

                            alert(response.message);  // Tampilkan pesan sukses
                            window.location.href = '/homepage';  // Arahkan pengguna ke halaman dashboard
                        } else {
                            alert('Login failed: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('An error occurred while logging in.');
                    }
                });
            });
        });

</script>

@endsection
