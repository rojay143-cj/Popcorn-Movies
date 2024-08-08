<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/animation/datatable/admin-dt.css')}}">
    <script src="{{asset('assets/animation/datatable/datatable.js')}}"></script>
    <title>@yield('title','Popmovies')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 text-zinc-800 overflow-x-hidden overflow-y-scroll scrollbar tracking-wide min-w-96">
    @yield('body')
    
    <script src="{{asset('assets/animation/admin.js')}}"></script>
</body>
</html>