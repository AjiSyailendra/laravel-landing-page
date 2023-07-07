@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form method="POST" action="{{ route('section.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-2 mt-10 gap-x-10">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Name Section</span>
                    </label>
                    <input name="name_section" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('name_section') input-error @enderror  w-full"
                        value="{{ old('name_section') }}" />
                    @error('name_section')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Type Section</span>
                    </label>
                    <select name="name_type" class="select w-full @error('name_type') input-error @enderror">
                        <option {{ old('name_type') == '1' ? 'selected' : '' }} value='1'>Hero</option>
                        <option {{ old('name_type') == '2' ? 'selected' : '' }} value='2'>About</option>
                        <option {{ old('name_type') == '3' ? 'selected' : '' }} value='3'>Two Row with Five Card
                        </option>
                        <option {{ old('name_type') == '4' ? 'selected' : '' }} value='4'>Two Row with Four Card
                        </option>
                        <option {{ old('name_type') == '5' ? 'selected' : '' }} value='5'>Two Row with Image</option>
                        <option {{ old('name_type') == '6' ? 'selected' : '' }} value='6'>Two Col with Image 1</option>
                        <option {{ old('name_type') == '7' ? 'selected' : '' }} value='7'>Two Col with Image 2
                        </option>
                        <option {{ old('name_type') == '8' ? 'selected' : '' }} value='8'>Card Information</option>
                    </select>
                    @error('name_type')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Title</span>
                    </label>
                    <input name="title" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('title') input-error @enderror  w-full"
                        value="{{ old('title') }}" />
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
                        class="input error input-bordered  @error('subtitle') input-error @enderror  w-full"
                        value="{{ old('subtitle') }}" />
                    @error('subtitle')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Button Text</span>
                    </label>
                    <input name="btn_text" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('btn_text') input-error @enderror  w-full"
                        value="{{ old('btn_text') }}" />
                    @error('btn_text')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Button Link</span>
                    </label>
                    <input name="btn_link" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('btn_link') input-error @enderror  w-full"
                        value="{{ old('btn_link') }}" />
                    @error('btn_link')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
                
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Section Link</span>
                    </label>
                    <input name="link_section" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('link_section') input-error @enderror  w-full"
                        value="{{ old('link_section') }}" />
                    @error('link_section')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
            </div>

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">Image</span>
                </label>
                <input name="img" type="file"
                    class="file-input file-input-bordered @error('img') input-error @enderror w-full"
                    value="{{ old('img') }}" />
                @error('img')
                    <label class="label">
                        <span class="label-text-alt text-red-500">{{ $message }}</span>
                    </label>
                @enderror
            </div>
            <button class="btn btn-warning mt-4">Save</button>
        </form>
        <a href="{{ route('section') }}" class="btn btn-sm btn-neutral mt-5">Kembali</a>
    </div>
@endsection
