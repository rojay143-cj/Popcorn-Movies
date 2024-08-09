<div class="sidebar fixed z-10 top-0 left-0 h-full p-5 col-span-1 bg-zinc-800 text-slate-300 text-sm min-w-60 md:min-w-64">
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
            <li id="DASHBOARD" class="cursor-pointer"><i class="fa-solid fa-chart-line"></i> Dashboard</li>
            <li id="PRODUCTION" class="cursor-pointer"><i class="fa-solid fa-star-and-crescent"></i> Production</li>
            <li id="COUNTRY" class="cursor-pointer"><i class="fa-solid fa-globe"></i> Country</a></li>
            <li id="GENRE" class="cursor-pointer"><i class="fa-solid fa-mask"></i> Genre</a></li>
            <li id="MOVIES" class="cursor-pointer"><i class="fa-solid fa-film"></i> Movies</a></li>
            <li id="SERIES" class="cursor-pointer"><i class="fa-solid fa-tv"></i> Series</a></li>
            <li id="UPLOAD" class="cursor-pointer"><i class="fa-solid fa-photo-film"></i> Upload</a></li>
        </ul>
        <div class="mt-auto flex justify-end relative">
            <span class="cursor-pointer setting"><i class="fa-solid fa-gear"></i> Settings</span>
            <div class="settings absolute bottom-7 right-0 bg-slate-800 shadow-sm shadow-slate-900 p-5 hidden">
                <ul class="flex flex-col gap-3">
                    <li id="PROFILE">Profile</a></li>
                    <li id="DM">Dark Mode</a></li>
                    <li id="LOGOUT"><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>