<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link CSS --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <header>
        @include('partial.header.nav')
        @includeWhen((request()->is('welcome')), 'partial.header.subheading1', ['status' => 'complete'])
        @includeWhen((request()->is('about')), 'partial.header.subheading2', ['status' => 'complete'])
        @includeWhen((request()->is('services')), 'partial.header.subheading3', ['status' => 'complete'])
    </header>
    <main>
        @yield('body')
    </main>
    @include('partial.footer.footer')
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
