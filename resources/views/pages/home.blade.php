@extends('components.layout')
@section('title', 'Home - Watch Online Movies & TV Shows')
@section('body')
<x-header />
<section class="sliding_banner">
    <div class="relative flex slider">
        @foreach ($movies as $movie)
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
                        <dd class="text-sm line-clamp-4">{{$movie["Text"]}}</dd>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="absolute top-72 w-full z-50">
        <div class="flex justify-between px-5">
            <button class="left_"><i class="fa-solid fa-angle-left fa-2xl hover:text-red-800"></i></button>
            <button class="right_"><i class="fa-solid fa-angle-right fa-2xl hover:text-red-800"></i></button>
        </div>
    </div>
</section>
@endsection