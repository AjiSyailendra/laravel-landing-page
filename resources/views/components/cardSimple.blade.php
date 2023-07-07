<div class="card my-2 mx-3 bg-base-100">
    <figure class="px-5 pt-5 h-52">
        <img src="{{ asset('storage/' . $image) }}" alt="Shoes" class="rounded-xl w-full h-full object-cover" />
    </figure>
    <div class="card-body items-center text-center">
        <h2 class="card-title">{{ $text }}</h2>
    </div>
</div>
