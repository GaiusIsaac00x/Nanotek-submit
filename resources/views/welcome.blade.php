{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta description="We are the leading TECH EDUCATION company in Sub-Saharan Africa that helps people learn premium technology skills virtually and help companies hire the best talents">
    <meta keywords="kivalearn, learn online, virtual, training, remote learning, tech skills, Africans, Global skill gap, tech, technology, brykiva, empowering, tech talents, technovate, web development, front-end, back-end, graphics, digital marketing">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Home: Kivalearn-Learn Digital Skills</title>
    <link rel="icon" type="{{ asset('image/x-icon')}}" href="/images/kivaicon3.png">
    <link rel="stylesheet" href="{{asset('assets/carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carousel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/carousel/css/test.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./vendors/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('kiva.css')}}">
</head>
<body class="bg3">
    @include('includes.navbar')

<section class="section-padding colz">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h2 class="Build mt-5">Learn Tech Skills and Excel Globally</h2>
                <p class="my-3">An online learning platform where individuals and groups can access 
                 course contents, live classes and communities across different tech groups and sectors. We are improving the modern day teaching and learning system with technology.
                </p>
                <div class="row my-5">
                  <div class="col-6 col-lg-4 col-md-4 col-sm-4 mt-5">
                    <div class="">
                      <a href="/register" class="btn-get-startedP">Get Started</a>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-md-4 col-sm-4 mt-5">
                    <div class="">
                      <a href="courses.html" class="btn-get-startedP">Programmes</a>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-md-4 col-sm-4 mt-5">
                    <a href="https://chat.whatsapp.com/KILWxUHt7ZD5LcVtMjZkEx" class="btn-get-startedP">Community</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 position-relative zindex-2 py-lg-4 ">
              <div class="row">
                <div class="col-lg-6">
                  <span class="circle"></span>
                  <span class="circle2"></span>
                  <img src="/images/TestD.jpg" alt="" class="img-fluid para1 ml-3"> 
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                  <img src="/images/AB.jpg" alt="Layer" class="img-fluid para2">
                  <img src="/images/AD.jpg" alt="Layer" class="img-fluid para2 mt-3">
                </div>
              </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding digital" style="background-color:white;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-3">
          <h2 class="text-center">Empowering Global Tech Talents</h2>
          <p class="text-justify">
            We are a technology talent development company connecting people to quality tech trainings online at affordable rate. Kivalearn is partnering with various technology experts across Africa to help connect more individuals who desire to learn technological skills with virtual access to quality and affordable technology education. 
          </p>
          <p class="text-center mt-5">  <span><a href="aboutus.html" class="btn-get-startedabout ml-3">About Us<i class="fa fa-arrow-right ml-1"></i> </a>
          </span> </p>
        </div>
      </div>
    </div>
  </section>

    
    <section class="growth section-padding" style="background-color:#0b0b3d;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
            <h2 class="text-white text-center">Improving Technology Education</h2>
          </div>
        </div>
        <div class="row">
          <div class="box-growth">
              <div class="box-3 text-center" style="background-color: skyblue;">
                <h3>300+</h3>
                <p>Students Trained</p>
              </div>
              <div class="box-2">
                  <img src="images/New.jpg" class="" width="270px" height="305px"  alt="">
              </div>
              <div class="box-3 text-center" style="background-color: skyblue;">
                <h3>90%</h3>
                <p>Completion rate of Kivalearners</p>
              </div>
              <div class="box-2">
                <img src="images/AR.jpg" class="" width="270px" height="305px"  alt="">
              </div>
          </div>
          <div class="col-lg-12">
            <p class="text-white pt-4">We are a platform that helps you learn tech skills from various expert qualitatively even at an affordable rate. </p>
            <a href="getstarted.php" class="btn btn-get-startedC mb-5 mt-3">Get Started &nbsp;<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section style="background-color:#f2f2f2">
      <div class="container py-5" >
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <img src="./images/AF.jpg" class="img-fluid" alt="">
                  <div class="card-body">
                    <h4 class="Easy"> <b> Cohort Based Learning </b> </h4>
                    <p class="">Our approach is a cohort based learning pattern. 
                      A collaboration-focused program where Kivalearners work together to complete task and projects. 
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <img src="./images/AG.jpg" class="img-fluid" alt="">
                  <div class="card-body">
                    <h4 class="Easy"> <b> Instructor-led and Mentoring</b> </h4>
                    <p class="">
                      Kivalearners engage with instructors and the learning community. Receive mentorship and reviews
                      on how to go about completing tasks and projects for courses.</p>
                       
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <h1 class="start mt-3">Why Kivalearn?</h1>
            <p class="mt-3">Kivalearn offers learners quality, swift and convenient technology skills programs to learn how to succeed globally 
                            in the tech space. Our platform allows technology experts to share their 
                            bank of knowledge and resources to people who needs it using live sessions, trainings, courses and communities. </p>

              <p class=""> Kivalearn is repositioning Africa for constructive success through global talent development. 
                           Kivalearn seeks to transform more lives
                           virtually using quality education from certified industry experts across Africa. 
                           We are providing a medium for verified tech professionals to easily do what they love doing best, 
                           communicating their wealth of technical expertise to people who desires to learn from them. 
                </p>
                <a href="getstarted.php" class="btn btn-get-startedC">  Get Started&nbsp;<i class="fas fa-arrow-right"></i></a>
          </div>
          
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-center py-2 mt-4">Courses </h1>

          </div>
        </div>
      </div>

      <div class="container py-5" >
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-md-4">
                <div class="card" id="firstCard" style="position:relative;">
                  <img src="./images/AI.jpg" class="weight" alt="" >
                  <div class="card-body">
                    <a href=""><p class="priceTagB p-1 text-center"> <b>$25.0 <s> $50.0 </s> </b> </p></a>
                    <h4 class="Easy"> <b> Graphic Designs </b> </h4>
                    <p class="py-1"> 
                      Learn how to come up with creative designs that will strengthen brand visibility with ease using photoshop, corel draw and other design specific softwares used in varying fields. 
                      </p>
                       <a href="graphics.html" class="btn-get-startedP">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" id="firstCard" style="position:relative;">
                  <img src="./images/AH.jpg" class="weight" alt="">
                  <div class="card-body">
                    <a href=""><p class="priceTagB p-1 text-center"> <b>$25.0 <s> $50.0 </s> </b> </p></a>
                    <h4 class="Easy"> <b> Digital Marketing </b> </h4>
                    <p class="py-1">This course teaches you how to leverage various technological platform in creating  quality, 
                      persuading messages even while delivery amazing reach using SEO, Social Medias, Email etc. </p>
                       <a href="digitalmarket.html" class="btn-get-startedP">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="card" id="firstCard" style="position:relative;">
                <img src="./images/BA.jpg" class="weight" alt="">
                <div class="card-body">
                  <a href=""><p class="priceTagA p-1 text-center"> <b>$25.0 <s> $50.0 </s> </b> </p></a>
                  <h4 class="Easy"> <b> Front-End Development </b> </h4>
                  <p class="py-1">Explore project based learning on with HTML, CSS , Javascript and learn all you need to know about Front-End development.
                    </p>
                     <a href="frontendpage.html" class="btn-get-startedP">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                </div>
              </div>
                <!-- <div class="card" id="firstCard" style="position:relative;">
                    <img src="./images/AE.jpg" class="weight" alt="" >
                    <div class="card-body">
                      <a href=""><p class="priceTag p-1 text-center"> <b>$100 <s> $180 </s> </b> </p></a>
                      <h4 class="Easy"> <b> Data Analysis </b> </h4>
                      <p class="py-1">Unlock your potential in data analytics. Build job-ready skills for a data analyst career. Gain job-ready skills for an entry-level data analyst role with this Data Analyst course.</p>
                         <a href="dataanalysis.html" class="btn-get-startedB">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <a href="courses.html" class="btn btn-get-startedC mb-3"> More Courses&nbsp;<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </section>


    
    <section class="mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 text-center"> 
            <p style="font-size:4.5vw;"><b>
            WHAT <span style="color:#0b0b3d"> OUR USERS </span> SAY ABOUT US 
          </b></p>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
            <div class="owl-testimonial owl-theme text-center">
                  <div class="item" style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> Brykiva is the best tech-institute in terms of teaching with well respect values</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/kivaicon2.png"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Odion Kelly Igiogbe</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> Brykiva set me on the path to becoming a CTO.
                            Their frontend development course was my first introduction to programming and it was great.</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Gaius1.jpg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Isaac Gaius</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i>Brykiva has impacted a lot in me in terms of programming I can boast anywhere with what I have learnt from Brykiva.
                        </i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Patrick.jpeg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Aiyohuyin Patrick</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i>Brykiva gave me the real foundation to Information technology,
                            now am doing my masters in Data Analyse because of them</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Greg.jpeg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Tsado Gregory</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> I am a proud woman in the tech field, thanks to Brykiva. </i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Peace.jpeg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Peace Osayuwa</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item" style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> Brykiva has helped me become familiar with the world of tech. 
                           They were always ready to support in any way possible to ensure I got the best.</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Destiny.JPG"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Destiny Erhieme</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
            </div>
       </div>
        </div>

      </div>
    </section>
  
   
   <section class="partner section-padding mt-3" style="background-color: white;">
    <div class="container">
        <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>Partner organizations</h2> 
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                   <div class="owl-carousel owl-theme text-center">
                         <div class="item">
                             <img src="./images/slack-removebg-preview.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                         </div>
                         <div class="item">
                             <img src="./images/brykiva-removebg-preview.png"  class="img-fluid" alt="" style="width: 70%; height:70%;">
                         </div>
                         <div class="item">
                             <img src="./images/github.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                         </div>
                         <div class="item">
                             <img src="./images/googlemeet.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                         </div>
                         <div class="item">
                          <img src="./images/iwere.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                      </div>
                   </div>
              </div>
        </div>
    </div>
  </section>
  

  <footer class="section-padding footer">
    <div class="container mt-2 py-2">
      <div class="row">
        <div class="col-lg-4">
          <h2 style="color:#0b0b3d;">Kivalearn</h2>
          <p class="pb-3">
            We are the leading TECH EDUCATION company 
            in Sub-Saharan Africa that helps people learn premium technology 
            skills virtually and help companies hire the best talents.
          </p>
          <a href="#"><i class="fab fa-facebook icon footericon"></i></a>
          <a href="#"><i class="fab fa-instagram icon footericon"></i></a>
          <a href="#"><i class="fab fa-linkedin icon footericon"></i></a>
          <a href="#"><i class="fab fa-youtube icon footericon"></i></a>
          <a href="#"><i class="fab fa-twitter icon footericon"></i></a>
        </div>
        <div class="col-lg-3">
          <h6 class="footer-head">Company</h6>
          <p><a href="index.html" class="footer-head2">Home</a></p>
          <p><a href="aboutus.html" class="footer-head2">Why Kivalearn?</a></p>
          <p><a href="howitworks.html" class="footer-head2">How it works?</a></p>
          <p><a href="getstarted.php" class="footer-head2">Get Started</a></p>
          <p><a href=" contactus.html" class="footer-head2">Contact Us</a></p>
          <p><a href="https://chat.whatsapp.com/KILWxUHt7ZD5LcVtMjZkEx" class="footer-head2">Join Community</a></p>
        </div>
        <div class="col-lg-3">
          <h6 class="footer-head">Programs</h6>
          <p><a href="frontendpage.html" class="footer-head2">Front-End Web development</a></p>
          <p><a href="backend.html" class="footer-head2">Back-End Web development</a></p>
          <!--   <p><a href="mobileappdevelopment.html" class="footer-head2">Mobile App Development</a></p> -->
          <p><a href="digitalmarket.html" class="footer-head2">Digital Marketing</a></p>
          <!-- <p><a href="userinterface.html" class="footer-head2">UI/UX Design</a></p> -->
          <p><a href="courses.html" class="footer-head2">All Programs</a></p>

                        


        </div>

        <div class="col-lg-2">
          <h6 class="footer-head">Contact</h6>
          <p><a href="#"  class="footer-head2"> <i class="far fa-envelope footericon"></i> info@kivalearn.com</a></p>
          <p><a href="#"  class="footer-head2"> <i class="fas fa-phone footericon"></i> +234 908 129 8812</a></p>
          <p><a href="#"  class="footer-head2"> <i class="fas fa-phone footericon"></i> +234 916 478 2607</a></p>

        </div>
      </div>
    </div>

    <div class="container  mt-5">
      <div class="row">
        <div class="col-lg-12">
          <p class="text-muted peace">
            Kivalearn is an Edutech platform powered by Brykiva Technology Institute, 
            a subsidiary business of <a href="https://brykiva.com"> <b>Brykiva Solutions</b>. </a> 
            Registered with the Nigerian Corporate Affairs Commission with <b> (RC 2807444)</b>. 
            An Educationn and innovation company with over 5 years experience in the empowerment of tech talents
             and professionals working with series of technology brands accross the world.
          </p>
          <p class="text-muted peace">
            We empower individuals with 21st century technology skills, through trainings, webinars, 
            events, mentorship, community and interactive collaboration among peers and learners while learning digital skills. 
            We are offering life changing opportunities and easy-to-use tools for personal development.
          </p>
          <p class="text-muted ehis">
            Registered Address: Efex 02, 96 Benin-Lagos, Uselu-Shell, Benin-City, Edo State 32800 Nigeria 🇳🇬
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-3 text-center">
      <div class="row">
        <div class="col-lg-12">
          <p>© 2022 Kivalearn. All right reserved.</p>
        </div>
      </div>
    </div>
  </footer>



  
  <script src="{{asset('assets/carousel/js/jquery.2.3.1.min.js')}}"></script>
  <script src="{{asset('assets/carousel/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/carousel/js/app.js')}}"></script>
  <script src="{{asset('./vendors/js/jquery.js')}}"></script>
  <script src="{{asset('./vendors/fontawesome/js/all.js')}}"></script>
  <script src="{{asset('./vendors/js/bootstrap.js')}}"></script>
  </body>
  </html>
