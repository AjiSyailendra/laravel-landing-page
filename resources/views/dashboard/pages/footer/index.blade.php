@extends('dashboard.index')

@section('container')
    <div>
        @if (!$btn_add)
            <h1 class="text-2xl font-bold">{{ $title }}</h1>
            <form method="POST" action="{{ route('footer.edit') }}" enctype="multipart/form-data">
                @csrf
                <input name="id" type="text" hidden placeholder="Type here" class="input input-bordered  w-full"
                    value="{{ $data->id }}" />
                <div class="grid grid-cols-1 mt-5 gap-x-10">
                    <div class="form-control  w-full">
                        <label class="label">
                            <span class="label-text">Name Footer</span>
                        </label>
                        <input name="name_footer" type="text" placeholder="Type here"
                            class="input input-bordered @error('name_footer') input-error @enderror w-full"
                            value="{{ $data->name_footer }}" />
                        @error('img_logo')
                            <label class="label">
                                <span class="label-text-alt text-red-500">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                </div>

                <div class="w-32">
                    <label class="label">
                        <span class="label-text">Logo</span>
                    </label>
                    <img src="{{ asset('storage/' . $data->img_logo) }}" alt="">
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Update Logo</span>
                    </label>
                    <input name="oldImage" hidden value="{{ $data->img_logo }}" />
                    <input name="img_logo" type="file"
                        class="file-input file-input-bordered @error('img_logo') input-error @enderror w-full" />
                    @error('img_logo')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-warning mt-4">Update</button>
                </div>
            </form>
    </div>


    <div class="mt-20">
        <h1 class="text-2xl font-bold">Menu Footer</h1>
        <form action="{{ route('footer.createmenu') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 mt-5 gap-x-5">
                <input name="footer_id" type="text" hidden placeholder="Type here"
                    class="input error input-bordered  w-full" value="{{ $data->id }}" />

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Text Menu</span>
                    </label>
                    <input name="text_menu" type="text" placeholder="Type here"
                        class="input input-bordered @error('text_menu') input-error @enderror w-full"
                        value="{{ old('text_menu') }}" />
                    @error('text_menu')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-warning mt-4">Save</button>
        </form>

        <div class="overflow-x-auto mt-5 bg-base-100">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Text Menu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($data->footer_menus as $item)
                        <tr>
                            <td>{{ $item->text_menu }}</td>
                            <td>
                                <a href="{{ route('footer.editmenu', $item->id) }}" class="btn btn-sm btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                    </svg>
                                </a>
                                <a href="{{ route('footer.deletemenu', $item->id) }}" class="btn btn-sm btn-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('navbar.delete', $data->id) }}" class="btn btn-error mt-10">Hapus Komponen</a>
    </div>
@else
    <h1 class="text-2xl font-bold">Footer Belum ada, silahkan buat terlebih dahulu</h1>

    <a href="{{ route('footer.add') }}" class="btn btn-warning mt-4">Buat Footer</a>
    @endif


@endsection
