<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content lg:pt-16 flex flex-col items-center justify-center">
        <!-- Page content here -->
        <div class="bg-base-200 w-full min-h-screen  lg:py-9 lg:px-10 px-3 py-28 ">
            @yield('container')
        </div>

    </div>
    <div class="drawer-side pt-16">
        <label for="my-drawer-2" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 h-full bg-base-100 text-base-content">
            <!-- Sidebar content here -->
            <li><a href="{{ route('navbar') }}">Navbar</a></li>
            <li><a href="{{ route('section') }}">Section</a></li>
            <li><a href="{{ route('footer') }}">Footer</a></li>
        </ul>

    </div>
</div>
