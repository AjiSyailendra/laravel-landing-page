<div class="navbar fixed lg:px-20 backdrop-blur-xl bg-yellow-400/70 z-50" style="">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                @foreach ($navdata->navbar_menus as $item)
                    <li><a href="{{ $item->menu_link }}" class="font-bold">{{ $item->menu_text }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="w-24">
            <img src="{{ asset('storage/'. $navdata->img_logo) }}" alt="">
        </div>
        {{-- <a class=" normal-case text-2xl text-blue-950 ms-2 font-extrabold">GAS</a> --}}
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            @foreach ($navdata->navbar_menus as $item)
                <li><a href="{{ $item->menu_link }}" class="font-bold">{{ $item->menu_text }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="navbar-end">
        <a href="{{ $navdata->btn_link }}" class="normal-case btn btn-outline">{{ $navdata->btn_text }}</a>
    </div>
</div>
