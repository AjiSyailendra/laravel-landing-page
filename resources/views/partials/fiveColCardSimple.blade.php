<div id="{{ $data->link_section }}" class="bg-gray-50 px-20">
    <div class="mb-7">
        <h1 class="text-4xl text-center text-gray-900 font-extrabold mb-1">{{ $data->title }}</h1>
        <p class=" text-center text-gray-900 mb-2">{{ $data->subtitle }}</p>
    </div>

    <div class="grid lg:grid-cols-5 lg:px-20">
        @foreach ($data->card as $item)
            @include('components.cardSimple', [
                'text' => $item->title,
                'image' => $item->img
            ])
        @endforeach
    </div>
</div>
