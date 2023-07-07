<div class="card my-2 mx-3 card-side bg-base-100">
    <figure><img class="w-full h-full object-cover" src="{{ asset('storage/' . $image) }}" alt="Movie" /></figure>
    <div class="card-body">
        <h2 class="card-title">{{ $title }}</h2>
        <p>{{ $subtitle }}</p>
        <div class="card-actions justify-end">
            <button class="btn btn-warning">Selengkapnya</button>
        </div>
    </div>
</div>
