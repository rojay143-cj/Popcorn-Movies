@extends('components.layout')
@section('title', 'Home - Watch Online Movies & TV Shows')
@section('body')
<x-header :message="$top_4" />
<main>
    <section class="sliding_banner">
        <div class="relative flex slider">
            @foreach ($top_4 as $movie)
                <div class="w-screen h-[30rem] relative min-w-full">
                    <div class="w-full h-full">
                        <img src="{{asset($movie['Img'])}}" alt="ALT HERE" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black">
                        <button
                            class="watch_now bg-yellow-500 hover:bg-yellow-600 hover:border-2 text-zinc-800 text-lg font-bold py-2 px-4 rounded-xl translate-x-14 translate-y-72">Watch
                            Now <i class="fa-solid fa-circle-right fa-xl ml-2"></i></button>
                    </div>
                    <div class="details-wrapper absolute top-14 left-14">
                        <div class="title text-gray-200 font-bold opacity-55">
                            <h1 class="text-5xl">{{$movie['Title']}}</h1>
                            <h5 class="text-md">Release Date: {{$movie['Date']}}</h5>
                        </div>
                        <div class="description mt-10 text-gray-200  w-[36rem]">
                            <dd class="text-sm line-clamp-5 w-80 md:w-full md:line-clamp-4">{{$movie["Text"]}}</dd>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="absolute top-72 w-full z-20">
            <div class="flex justify-between px-5">
                <button class="left_"><i
                        class="fa-solid fa-angle-left fa-2xl hover:text-red-800 text-zinc-400"></i></button>
                <button class="right_"><i
                        class="fa-solid fa-angle-right fa-2xl hover:text-red-800 text-zinc-400"></i></button>
            </div>
        </div>
        <div class="w-full absolute top-[33rem] z-20">
            <div class="flex justify-center gap-10 sliding-label">
                <div class="h-1 w-12 rounded-md bg-yellow-600 cursor-pointer"></div>
                <div class="h-1 w-12 rounded-md bg-zinc-700 cursor-pointer"></div>
                <div class="h-1 w-12 rounded-md bg-zinc-700 cursor-pointer"></div>
                <div class="h-1 w-12 rounded-md bg-zinc-700 cursor-pointer"></div>
            </div>
        </div>
    </section>
    <section class="multimedia">
        <div
            class="relative p-3 grid gap-2 items-center justify-center mt-10 lg:flex grid-cols-2 sm:grid-cols-4 lg:grid-cols-8">
            <p class="absolute -top-8 lg:-top-3 translate-x-4 text-xs lg:-translate-x-48">
                <i class="fa-regular fa-flag text-sm pr-2"></i>Please think about recommending this website to your
                friends if you find it enjoyable. Thank you.
            </p>
            <div class="flex justify-center items-center mr-2">
                <i class="fa-solid fa-eye fa-xl"></i>
                <span class="text-xs">
                    <i>19k</i>
                    <br>
                    <i>Shares</i>
                </span>
            </div>
            <a href="">
                <div class="w-full px-10 h-8 flex justify-center items-center bg-blue-600">
                    <i class="fa-brands fa-facebook text-white text-xs"><i class="text-[0.5rem] ml-3">12k</i></i>
                </div>
            </a>
            <a href="">
                <div
                    class="w-full px-10 h-8 flex justify-center items-center bg-gradient-to-br from-pink-700 to-blue-700">
                    <i class="fa-brands fa-facebook-messenger text-white text-xs"><i
                            class="text-[0.5rem] ml-3">2.4k</i></i>
                </div>
            </a>
            <a href="">
                <div class="w-full px-10 h-8 flex justify-center items-center bg-black">
                    <i class="fa-brands fa-x-twitter text-white text-xs"><i class="text-[0.5rem] ml-3">3k</i></i>
                </div>
            </a>
            <a href="">
                <div class="w-full px-10 h-8 flex justify-center items-center bg-red-500">
                    <i class="fa-brands fa-reddit text-white text-xs"><i class="text-[0.5rem] ml-3">4.6k</i></i>
                </div>
            </a>
            <a href="">
                <div class="w-full px-10 h-8 flex justify-center items-center bg-green-500">
                    <i class="fa-brands fa-whatsapp text-white text-xs"><i class="text-[0.5rem] ml-3">7k</i></i>
                </div>
            </a>
            <a href="">
                <div
                    class="w-full px-10 h-8 flex justify-center items-center from-purple-800 to-yellow-600 bg-gradient-to-br">
                    <i class="fa-brands fa-instagram text-white text-xs"><i class="text-[0.5rem] ml-3">8.9k</i></i>
                </div>
            </a>
            <a href="">
                <div class="w-full px-10 h-8 flex justify-center items-center bg-blue-400">
                    <i class="fa-brands fa-telegram text-white text-xs"><i class="text-[0.5rem] ml-3">0.546</i></i>
                </div>
            </a>
        </div>
    </section>
    <section class="action_moviesORtv">
        <div class="flex items-center gap-3 py-2 text-sm">
            <div class="ml-10 text-2xl font-thin underline underline-offset-8 text-zinc-300">
                <h5>Trending</h5>
            </div>
            <button class="btn_movies bg-yellow-400 text-zinc-800 rounded-md p-1"><i class="fa-solid fa-play text-sm">
                </i><i>Movies</i></button>
            <button class="btn_series bg-zinc-800 hover:shadow-md hover:shadow-zinc-500 text-zinc-500 rounded-md p-1"><i
                    class="fa-solid fa-sort text-sm">
                </i><i>TV Series</i></button>
        </div>
    </section>
    <section class="trending_movies">
        <div class="gap-5 mx-7 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 max-h-[44rem] overflow-hidden px-3 pb-6">
            @foreach ($trending as $trend)
                <div class="w-full h-80 py-8">
                    <a href="">
                        <img src="{{$trend['Img']}}" title="{{$trend['Title']}}" alt="{{$trend['Title']}}"
                            class="w-full h-full rounded-md object-cover shadow-sm shadow-zinc-200">
                    </a>
                    <div class="mt-2">
                        <a href="" class="hover:underline underline-offset-2">
                            <h1 class="text-md text-zinc-200 font-thin text-center line-clamp-1">{{$trend['Title']}}</h1>
                        </a>
                        <p class="text-xs flex justify-between">
                            <span>{{\Carbon\Carbon::parse($trend['Date'])->format('Y')}} • {{$trend['Duration']}}</span>
                            <span>{{$trend['Type']}}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection