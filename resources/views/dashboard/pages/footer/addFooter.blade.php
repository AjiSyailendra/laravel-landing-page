@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form method="POST" action="{{ route('footer.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid lg:grid-cols-2 grid-cols-1 mt-10 gap-x-10">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Name Footer</span>
                    </label>
                    <input name="name_footer" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('name_footer') input-error @enderror  w-full"
                        value="{{ old('name_footer') }}" />
                    @error('name_footer')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
                
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Logo</span>
                    </label>
                    <input name="img_logo" type="file"
                        class="file-input file-input-bordered @error('img_logo') input-error @enderror w-full"
                        value="{{ old('img_logo') }}" />
                    @error('img_logo')
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
