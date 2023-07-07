@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form action="{{ route('footer.updatemenu', $data->id) }}" method="POST">
            @csrf
            <input name="section_id" hidden type="text" placeholder="Type here" value="{{ $data->id }}" />
            <div class="grid grid-cols-1 mt-5 gap-x-5">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Text Menu</span>
                    </label>
                    <input name="text_menu" type="text" placeholder="Type here"
                        class="input input-bordered @error('text_menu') input-error @enderror w-full"
                        value="{{ $data->text_menu }}" />
                    @error('text_menu')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-warning mt-4">Save</button>
        </form>
    </div>

    <div class="mt-20">
        <h1 class="text-2xl font-bold">Sub Menu Footer</h1>
        <form action="{{ route('footer.createsubmenu') }}" method="POST">
            @csrf
            <div class="grid lg:grid-cols-2 grid-cols-1 mt-5 gap-x-5">
                <input name="footer_menu_id" type="text" hidden placeholder="Type here"
                    class="input error input-bordered  w-full" value="{{ $data->id }}" />

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Text Sub Menu</span>
                    </label>
                    <input name="text_sub_menu" type="text" placeholder="Type here"
                        class="input input-bordered @error('text_sub_menu') input-error @enderror w-full"
                        value="{{ old('text_sub_menu') }}" />
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
                        <option {{ old('type_sub_menu') == '1' ? 'selected' : '' }} value='1'>Link</option>
                        <option {{ old('type_sub_menu') == '2' ? 'selected' : '' }} value='2'>Button
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
                        value="{{ old('link_sub_menu') }}" />
                    @error('link_sub_menu')
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
                        <th>Text Sub Menu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($data->footer_sub_menus as $item)
                        <tr>
                            <td>{{ $item->text_sub_menu }}</td>
                            <td>
                                <a href="{{ route('footer.editsubmenu', $item->id) }}" class="btn btn-sm btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                    </svg>
                                </a>
                                <a href="{{ route('footer.deletesubmenu', $item->id) }}" class="btn btn-sm btn-error">
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
    </div>
    <a href="{{ route('footer') }}" class="btn btn-sm btn-neutral mt-5">Kembali</a>
@endsection
