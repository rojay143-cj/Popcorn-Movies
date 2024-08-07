<div class="sidebar col-span-1 p-5  bg-zinc-800 text-slate-300 text-sm">
    <div class="flex flex-col h-full">
        @if(Auth::check())
            <div class="w-28 h-24 self-center">
                <img src="{{asset(auth()->user()->profile_img)}}" alt="Admin Profile Picture"
                    class="object-cover h-full w-full rounded-md">
            </div>
        @else
            <span>
                Unable to load image, Please login
            </span>
        @endif
        <ul class="flex flex-col gap-8 flex-grow mt-10">
            <li><a href=""><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
            <li><a href=""><i class="fa-solid fa-user-plus"></i> Production</a></li>
            <li><a href=""><i class="fa-solid fa-globe"></i> Country</a></li>
            <li><a href=""><i class="fa-solid fa-mask"></i> Genre</a></li>
            <li><a href=""><i class="fa-solid fa-film"></i> Movies</a></li>
            <li><a href=""><i class="fa-solid fa-star-and-crescent"></i> Cast</a></li>
            <li><a href=""><i class="fa-solid fa-tv"></i> Series</a></li>
            <li><a href=""><i class="fa-solid fa-photo-film"></i> Video & Image</a></li>
        </ul>
        <div class="mt-auto flex justify-end relative">
            <span class="cursor-pointer setting"><i class="fa-solid fa-gear"></i> Settings</span>
            <div class="settings absolute bottom-7 right-0 bg-slate-800 shadow-sm shadow-slate-900 p-5 hidden">
                <ul class="flex flex-col gap-3">
                    <li><a href="">Profile</a></li>
                    <li><a href="">Dark Mod</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>