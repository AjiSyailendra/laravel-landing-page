<div class="navbar bg-base-100 shadow-xl fixed z-50">
    <div class="flex-none">
        <label for="my-drawer-2" class="btn btn-square btn-ghost drawer-button lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-5 h-5 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </label>
    </div>


    <div class="flex-1">
        <a class="normal-case text-xl">Welcome, {{ auth()->user()->name }}</a>
    </div>

    <div class="flex-none">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn normal-case btn-danger">Log Out
            </button>
        </form>
    </div>
</div>
