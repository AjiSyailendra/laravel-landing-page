@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form action="{{ route('card.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input name="section_id" hidden type="text" placeholder="Type here" value="{{ $data->id }}" />
            <div class="grid lg:grid-cols-2 grid-cols-1 mt-5 gap-x-5">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Title</span>
                    </label>
                    <input name="title" type="text" placeholder="Type here"
                        class="input input-bordered @error('title') input-error @enderror w-full"
                        value="{{ $data->title }}" />
                    @error('title')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Sub Title</span>
                    </label>
                    <input name="subtitle" type="text" placeholder="Type here"
                        class="input input-bordered @error('subtitle') input-error @enderror w-full"
                        value="{{ $data->subtitle }}" />
                    @error('subtitle')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Menu Link</span>
                    </label>
                    <input name="menu_link" type="text" placeholder="Type here"
                        class="input input-bordered @error('menu_link') input-error @enderror w-full"
                        value="{{ $data->menu_link }}" />
                    @error('menu_link')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
            </div>

            <div class="w-32">
                <label class="label">
                    <span class="label-text">Image</span>
                </label>
                <img src="{{ asset('storage/' . $data->img) }}" alt="">
            </div>

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">Update Image</span>
                </label>
                <input name="oldImage" hidden value="{{ $data->img }}" />
                <input name="img" type="file"
                    class="file-input file-input-bordered @error('img') input-error @enderror w-full" />
                @error('img')
                    <label class="label">
                        <span class="label-text-alt text-red-500">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning mt-4">Save</button>
        </form>

        <a href="{{ route('section') }}" class="btn btn-sm btn-neutral mt-5">Kembali</a>

    </div>
@endsection
