
<!doctype html>
<html lang="en" class="font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$post->subject}}</title>

    <link rel="alternate" type="application/atom+xml" title="The Laravel Blog" href="/feed">

    <meta name="theme-color" content="#011627">

    <meta name="twitter:title" content="Laravel Snippet #19: Laracon VIII, Laravel UI, Passport, Authentication - The Laravel Blog ">
    <meta name="og:title" content="Laravel Snippet #19: Laracon VIII, Laravel UI, Passport, Authentication - The Laravel Blog ">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Topics: Laracon VIII, Laravel UI, Passport, Authentication.">
    <meta name="twitter:site" content="@themsaid">
    <meta name="twitter:image" content="https://blog.laravel.com/social-share.jpg">

    <meta name="og:site_name" content="The Laravel Blog">
    <meta name="og:image" content="https://blog.laravel.com/social-share.jpg">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="en_US">

    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Merriweather" rel="stylesheet">

    <link rel="icon" type="image/png" href="https://laravel.com/favicon.png">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">

    <!-- Styles -->
    <link href="/css/article_theme.css" rel="stylesheet">

    <!-- Google analytics tracking code goes here -->

</head>
<body>

<header class="py-5 mb-10">
    <div class="container mx-auto px-5 lg:max-w-screen">
        <div class="flex items-center flex-col lg:flex-row">
            <a href="/" class="flex items-center no-underline text-brand">
                <img class="text-xl ml-3 w-24" src="https://www.revenuearchitects.com/wp-content/uploads/2017/02/Blog_pic-705x399.png" alt="">
            </a>

            <div class="lg:ml-auto mt-10 lg:mt-0 flex items-center">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Admin panel</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>

<div class="container mx-auto px-5 lg:max-w-screen-sm mt-20">
    <h1 class="mb-5 font-sans">{{$post->subject}}</h1>

    <div class="flex items-center text-sm text-light">
        <span>{{$post->created_at}}</span>
    </div>

    <div class="mt-5 leading-loose flex flex-col justify-center items-center post-body font-serif">
        {{$post->text}}
    </div>

{{--    @foreach($author as $authors)--}}
    <div class="mt-10 lg:flex items-center p-5 border border-lighter  rounded">
        <div class="w-full lg:w-1/6 text-center lg:text-left">
            <img src="https://download-cs.net/steam/download_avatar/3434" class="rounded-full">
        </div>
        <div class="lg:pl-5 leading-loose text-text-color w-full lg:w-5/6">
            <span class="font-bold">{{$post->author}}</span>
            <div class="text-sm"><p>Автор</p></div>
        </div>
    </div>
{{--    @endforeach--}}
</div>

<div class="border-t border-lighter mt-20">
    <div class="container mx-auto px-5 lg:max-w-screen">
        <div class="text-muted py-10 text-center">
            Blog <a href="#">2020</a>.
        </div>
    </div>
</div>
</body>
</html>


