@extends('dashboard.index')

@section('container')
<div class="">
  <h1 class="text-2xl font-bold">{{ $title }}</h1>

  <form method="POST" action="{{ route('navbar.create') }}" enctype="multipart/form-data">
    @csrf

    <div class="grid grid-cols-2 mt-10 gap-x-10">
      <div class="form-control  w-full">
        <label class="label">
          <span class="label-text">Button Text</span>
        </label>
        <input name="btn_text" type="text" placeholder="Type here" class="input error input-bordered  @error('btn_text') input-error @enderror  w-full" value="{{ old('btn_text') }}" />
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
        <input name="btn_link" type="text" placeholder="Type here" class="input input-bordered @error('btn_link') input-error @enderror w-full" value="{{ old('btn_link') }}" />
        @error('btn_link')
        <label class="label">
          <span class="label-text-alt text-red-500">{{ $message }}</span>
        </label>
        @enderror
      </div>
    </div>

    <div class="form-control w-full">
      <label class="label">
        <span class="label-text">Logo</span>
      </label>
      <input name="img_logo" type="file" class="file-input file-input-bordered @error('img_logo') input-error @enderror w-full" value="{{ old('img_logo') }}" />
      @error('img_logo')
      <label class="label">
        <span class="label-text-alt text-red-500">{{ $message }}</span>
      </label>
      @enderror
    </div>

    <button class="btn btn-warning mt-4">Save</button>

  </form>


</div>
@endsection