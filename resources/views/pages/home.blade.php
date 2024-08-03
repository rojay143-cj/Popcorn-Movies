@extends('components.layout')
@section('title', 'Home - Watch Online Movies & TV Shows')
@section('body')
<x-header :message="$top_4" />
<main>
    <x-sliding_banner :message="$top_4" />
    <x-multi_media />
    <section class="action_moviesORtv">
        <div class="flex items-center gap-3 py-2 text-sm">
            <div class="ml-10 text-2xl font-thin underline underline-offset-8 decoration-zinc-700 text-zinc-300">
                <h5>Popular</h5>
            </div>
            <button class="btn_movies bg-yellow-400 text-zinc-800 rounded-md p-1"><i class="fa-solid fa-play text-sm">
                </i><i>Movies</i></button>
            <button class="btn_series bg-zinc-800 hover:shadow-md hover:shadow-zinc-500 text-zinc-500 rounded-md p-1"><i
                    class="fa-solid fa-sort text-sm">
                </i><i>TV Series</i></button>
        </div>
    </section>
    <section class="latest_movies">
        <div class="gap-5 mx-7 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 max-h-[44rem] overflow-hidden px-3 pb-6">
            @foreach ($latest as $new)
                <div class="w-full h-80 py-8">
                    <a href="">
                        <img src="{{$new['Img']}}" title="{{$new['Title']}}" alt="{{$new['Title']}}"
                            class="w-full h-full rounded-md object-cover shadow-sm shadow-zinc-200">
                    </a>
                    <div class="mt-2">
                        <a href="" class="hover:underline underline-offset-2">
                            <h1 class="text-md text-zinc-200 font-thin text-center line-clamp-1">{{$new['Title']}}</h1>
                        </a>
                        <p class="text-xs flex justify-between">
                            <span>{{\Carbon\Carbon::parse($new['Date'])->format('Y')}} • {{$new['Duration']}}</span>
                            <span>{{$new['Type']}}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="action_moviesORtv">
        <div class="flex items-center gap-3 py-2 text-sm">
            <div class="ml-10 text-2xl font-thin underline underline-offset-8 decoration-zinc-700 text-zinc-300">
                <h5>Latest</h5>
            </div>
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