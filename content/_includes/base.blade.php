<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/markdown-it/7.0.0/markdown-it.min.js" ></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/prism.css">
    <link rel="stylesheet" href="/assets/css/all.css">
</head>

<body>

@if($currentUrlPath == '/')
    <div class="wow">
        <img src="@url('/assets/logo.png')"
             alt="Laravel Frontend Presets">
        <h1>Laravel Frontend Presets</h1>
        <h2>A collection of custom presets for Laravel 5.5</h2>
        <a href="https://github.com/laravel-frontend-presets">
            GitHub
        </a>
        <i>&nbsp&nbsp.&nbsp&nbsp</i>
        <a href="https://packagist.org/packages/laravel-frontend-presets">
            Packagist
        </a>
    </div>
@else
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="@url('/')">
                        <img src="@url('/assets/logo.png')"
                             alt="Laravel Frontend Presets">
                    </a>

                    <h1><a href="@url('/')">Laravel Frontend Presets</a></h1>
                </div>
                <div class="col-md-6 text-right buttons">
                    <a href="https://github.com/laravel-frontend-presets">
                        <span>GitHub</span>
                    </a>

                    <a href="https://packagist.org/packages/laravel-frontend-presets/">
                        <span>Packagist</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">

    <div class="row">
        <div class="col-md-2">
            @include('_includes.sidebar')
        </div>
        <div class="col-md-10 realContent">
            @yield('body')
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="content">
            &copy; Copyright {{date('Y')}} Laravel Frontend Presets
        </div>
    </div>
</footer>

<script src="/assets/prism.js"></script>
</body>
</html>
