<div id="{{ $data->link_section }}" class="bg-gray-50 py-32">
    <div class="mb-7">
        <h1 class="text-4xl text-center text-gray-900 font-extrabold mb-1">{{ $data->title }}</h1>
        <p class=" text-center text-gray-900 mb-2">{{ $data->subtitle }}</p>
    </div>

    <div class="grid lg:grid-cols-2 lg:px-20">
        @foreach ($data->card as $item)
            @include('components.cardImageOnSide', [
                'title' => $item->title,
                'subtitle' => $item->subtitle,
                'image' => $item->img,
            ])
        @endforeach
    </div>
</div>
