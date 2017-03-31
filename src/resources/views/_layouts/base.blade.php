<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @section('head')
        @include('_partials.head')
    @show
    <title>@yield('meta.title', config('app.name', 'Laravel'))</title>
</head>
<body>

<div id="app">
    @yield('content', '')
</div>

@section('jslibs')
    @include('_partials.js')
@show

@yield('js','')
</body>
</html>
