@extends('component.layout')
@section('title', 'Home - Watch Online Movies & TV Shows')
@section('body')
<header class=" bg-zinc-900 h-16 p-5 text-sm flex justify-between shadow-2xl">
    <div class="flex items-center">
        <button class="open-side-bar" title="Open Menu"><i class="fa-solid fa-bars fa-xl"></i></button>
        <span class="-translate-y-1 translate-x-3"><img src="{{asset('assets/image/logo/logo_pink_nobg.png')}}" alt="Movie Online" class="w-20 h-15"></span>
    </div>
    <nav id="side-bar" class="bg-zinc-800 p-5 fixed h-full top-0 -left-96 shadow-2xl duration-500">
        <section class="p-5 text-lg font-thin">
            <ul class="p-2 pl-3">
                <li class="mt-5"><a href="{{route('homepage')}}">Home</a></li>
                <li class="drp-genre mt-5">Movies<i class="fa-solid fa-angle-down ml-1 cursor-pointer"></i></li>
                <li class="mt-5"><a href="">Trending</a></li>
                <li class="mt-5"><a href="">Latest Release</a></li>
            </ul>
        </section>
        <div class="w-full h-9 relative">
            <input type="text" name="search" id="search" placeholder="Search a movie..." class="w-full h-full rounded-lg px-11 bg-yellow-500 opacity-75 text-yellow-950 font-medium text-md placeholder:text-yellow-950 outline-offset-3 outline-yellow-400 outline-8">
            <button class="absolute inset-y-0 left-0 p-3 flex items-center text-gray-400 bg-yellow-600 rounded-l-lg">
                <i class="fa-solid fa-magnifying-glass text-yellow-950"></i>
            </button>
        </div>
        <div class="absolute top-5 -right-5">
            <button class="close-side-bar" title="Close Menu"><i class="fa-solid fa-circle-left fa-2xl"></i></button>
        </div>
    </nav>
    <div class="relative hidden md:flex" id="nav-bar">
        <div class="ml-auto navigation-tab">
            <ul class="flex gap-7">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li class="drp-genre">Movies<i class="fa-solid fa-angle-down ml-1 cursor-pointer"></i>
                <div class="movies-genre hidden text-slate-400 p-3 w-screen mt-1 absolute -right-5 top-10 bg-slate-800">
                    <div class="genres-content flex justify-center flex-col items-start md:flex-row">
                        <div class="p-3">
                            <h4 class="text-lg font-semibold mb-2">Genre</h4>
                            <div class="flex ml-10">
                                <ul class="ul-genre">
                                    <li><a href="">Action</a></li>
                                    <li><a href="">Adventure</a></li>
                                    <li><a href="">Comedy</a></li>
                                    <li><a href="">Drama</a></li>
                                    <li><a href="">Family</a></li>
                                    <li><a href="">Fantasy</a></li>
                                    <li><a href="">Horror</a></li>
                                </ul>
                                <ul class="ul-genre ml-5">
                                    <li><a href="">Mystery</a></li>
                                    <li><a href="">Romance</a></li>
                                    <li><a href="">Sci-Fi</a></li>
                                    <li><a href="">Sports</a></li>
                                    <li><a href="">Suspense</a></li>
                                    <li><a href="">Thriller</a></li>
                                    <li><a href="">Musical</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-lg font-semibold">Top Rated Movies</h4>
                            <div class="flex ml-10">
                                <div class="top-rated border mt-5 grid grid-cols-2">
                                    @for($i = 0; $i < 4; $i++)
                                        <img src="{{asset('assets/image/empty_image/placeholder.jpg')}}" alt="Alt Here" class="border-2">
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-lg font-semibold mb-2">Country</h4>
                            <div class="flex ml-10">
                                <ul class="ul-genre">
                                    <li><a href="">Australia</a></li>
                                    <li><a href="">Brazil</a></li>
                                    <li><a href="">China</a></li>
                                    <li><a href="">Cuba</a></li>
                                    <li><a href="">France</a></li>
                                    <li><a href="">Hong Kong</a></li>
                                    <li><a href="">India</a></li>
                                </ul>
                                <ul class="ul-genre ml-5">
                                    <li><a href="">Indonesia</a></li>
                                    <li><a href="">Japan</a></li>
                                    <li><a href="">Korea</a></li>
                                    <li><a href="">Malaysia</a></li>
                                    <li><a href="">Philippines</a></li>
                                    <li><a href="">Singapore</a></li>
                                    <li><a href="">Taiwan</a></li>
                                </ul>
                                <ul class="ul-genre ml-5">
                                    <li><a href="">Thailand</a></li>
                                    <li><a href="">United Kingdom</a></li>
                                    <li><a href="">United States</a></li>
                                    <li><a href="">Vietnam</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                <li><a href="">Trending</a></li>
                <li><a href="">Latest Release</a></li>
            </ul>
        </div>
    </div>
</header>
<script src="{{asset('assets/animation/aniJS.js')}}"></script>
<script>

</script>
@endsection
