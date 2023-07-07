@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form action="{{ route('footer.updatesubmenu', $data->id) }}" method="POST">
            @csrf
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Text Sub Menu</span>
                    </label>
                    <input name="text_sub_menu" type="text" placeholder="Type here"
                        class="input input-bordered @error('text_sub_menu') input-error @enderror w-full"
                        value="{{ $data->text_sub_menu }}" />
                    @error('text_sub_menu')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Type Sub Menu</span>
                    </label>
                    <select name="type_sub_menu" class="select w-full @error('type_sub_menu') input-error @enderror">
                        <option {{ $data->type_sub_menu == '1' ? 'selected' : '' }} value='1'>Link</option>
                        <option {{ $data->type_sub_menu == '2' ? 'selected' : '' }} value='2'>Social Media</option>
                        <option {{ $data->type_sub_menu == '3' ? 'selected' : '' }} value='3'>Button
                        </option>
                    </select>
                    @error('type_sub_menu')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Link Sub Menu</span>
                    </label>
                    <input name="link_sub_menu" type="text" placeholder="Type here"
                        class="input input-bordered @error('link_sub_menu') input-error @enderror w-full"
                        value="{{ $data->link_sub_menu }}" />
                    @error('link_sub_menu')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-warning mt-4">Save</button>
        </form>
    </div>

    <a href="{{ route('footer') }}" class="btn btn-sm btn-neutral mt-5">Kembali</a>
@endsection
