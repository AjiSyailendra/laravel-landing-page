<div id="{{ $data->link_section }}" class="bg-gray-50 w-full lg:h-screen h-full">
    <div class="grid lg:grid-cols-2 lg:pt-0 pt-20 h-full items-center justify-items-center">
        <div class="w-[80%]">
            <img src="{{ asset('storage/' . $data->img) }}" alt="hero">
        </div>
        <div class="lg:w-[70%] w-[90%] ">
            <h1
                class="lg:text-xl text-base lg:mb-5 mb:3 lg:p-2 p-1 bg-yellow-500 rounded-xl text-white text-center inline-block">
                {{ $data->title }}</h1>
            <h1 class="lg:text-5xl text-4xl text-gray-900 font-extrabold lg:mb-16 mb-10">{{ $data->subtitle }}</h1>
            <a href="{{ $data->btn_link }}" class="btn btn-neutral normal-case">{{ $data->btn_text }}</a>
        </div>
    </div>
</div>
