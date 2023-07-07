@extends('dashboard.index')

@section('container')
    <div class="">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>

        <form method="POST" action="{{ route('section.update', $data->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="grid lg:grid-cols-2 grid-cols-1 mt-10 gap-x-10">
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Name Section</span>
                    </label>
                    <input name="name_section" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('name_section') input-error @enderror  w-full"
                        value="{{ $data->name_section }}" />
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
                        <option {{ $data->name_type == '1' ? 'selected' : '' }} value='1'>Hero</option>
                        <option {{ $data->name_type == '2' ? 'selected' : '' }} value='2'>About</option>
                        <option {{ $data->name_type == '3' ? 'selected' : '' }} value='3'>Two Row with Five Card
                        </option>
                        <option {{ $data->name_type == '4' ? 'selected' : '' }} value='4'>Two Row with Four Card
                        </option>
                        <option {{ $data->name_type == '5' ? 'selected' : '' }} value='5'>Two Row with Image</option>
                        <option {{ $data->name_type == '6' ? 'selected' : '' }} value='6'>Two Col with Image 1</option>
                        <option {{ $data->name_type == '7' ? 'selected' : '' }} value='7'>Two Col with Image 2
                        </option>
                        <option {{ $data->name_type == '8' ? 'selected' : '' }} value='8'>Card Information</option>
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
                        class="input error input-bordered  @error('subtitle') input-error @enderror  w-full"
                        value="{{ $data->subtitle }}" />
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
                        value="{{ $data->btn_text }}" />
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
                        value="{{ $data->btn_link }}" />
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
                        value="{{ $data->link_section }}" />
                    @error('link_section')
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


            <button class="btn btn-warning mt-4">Save</button>
        </form>

        @if ($card)
            <div class=" mt-20">
                <h1 class="text-2xl font-bold">Card Element</h1>
                <form action="{{ route('card.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="section_id" hidden type="text" placeholder="Type here"
                        value="{{ $data->id }}" />
                    <div class="grid lg:grid-cols-2 grid-cols-1 mt-5 gap-x-5">
                        <div class="form-control  w-full">
                            <label class="label">
                                <span class="label-text">Title</span>
                            </label>
                            <input name="title" type="text" placeholder="Type here"
                                class="input input-bordered @error('title') input-error @enderror w-full"
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
                                class="input input-bordered @error('subtitle') input-error @enderror w-full"
                                value="{{ old('subtitle') }}" />
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
                                value="{{ old('menu_link') }}" />
                            @error('menu_link')
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

                    <button type="submit" class="btn btn-warning mt-4">Save</button>
                </form>

                <div class="overflow-x-auto mt-5 bg-base-100">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>Menu Text</th>
                                <th>Menu Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($data->card as $item)
                                @php
                                    $no = 0;
                                @endphp
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->menu_link }}</td>
                                    <td>
                                        <a href="{{ route('card.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path
                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('card.delete', $item->id) }}" class="btn btn-sm btn-error">
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
        @endif

        <a href="{{ route('section') }}" class="btn btn-sm btn-neutral mt-5">Kembali</a>
    </div>
@endsection
