@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form method="POST" action="{{ route('navbar.updatemenu', $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 mt-10 gap-x-10">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Menu Text</span>
                    </label>
                    <input name="menu_text" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('menu_text') input-error @enderror  w-full"
                        value="{{ $data->menu_text }}" />
                    @error('menu_text')
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

            <button class="btn btn-warning mt-4">Save</button>
        </form>

        <a href="{{ route('navbar') }}" class="btn btn-sm btn-neutral mt-5">Kembali</a>

    </div>
@endsection
