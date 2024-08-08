<section class="flex justify-center items-center mt-10">
    @if(session()->has('nuetral-error'))
        <div class="alert alert-error flex items-center gap-3">
            <span><i class="fa-solid fa-volume-xmark text-orange-500 text-lg"></i></span>
            <span class="text-xs">{{ session('nuetral-error') }}</span>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-error flex items-center gap-3">
            <span><i class="fa-solid fa-volume-xmark text-red-600 text-lg"></i></span>
            <span class="text-xs">{{ session('error') }}</span>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-error flex items-center gap-3">
            <span><i class="fa-solid fa-volume-xmark text-green-700 text-lg"></i></span>
            <span class="text-xs">{{ session('success') }}</span>
        </div>
    @endif
</section>