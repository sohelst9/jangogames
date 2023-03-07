@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"> Edit Banner</h4>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Banner</h5>
                        <a href="{{ route('banner.index') }}" class="btn btn-sm btn-primary">
                            <box-icon name='left-arrow-alt'></box-icon>Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_name">Game Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="game_name" id="game_name" class="form-control" value="{{ $banner->name }}">
                                    @error('game_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="banner_title">Banner Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="banner_title" id="banner_title" class="form-control" value="{{ $banner->title }}">
                                    @error('banner_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_url">Game Url</label>
                                <div class="col-sm-10">
                                    <input type="text" name="game_url" id="game_url" class="form-control" value="{{ $banner->game_url }}">
                                    @error('game_url')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="position">Banner Position</label>
                                <div class="col-sm-10">
                                    <select name="position" id="position" class="form-control">
                                        <option value="">-Select-</option>
                                        <option value="0" {{ $banner->position == 0 ? 'selected' : '' }}>Left</option>
                                        <option value="1" {{ $banner->position == 1 ? 'selected' : '' }}>Right</option>
                                    </select>
                                    @error('position')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="thumbnail"> Thumbnail</label>
                                <div class="col-sm-10">
                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    @error('thumbnail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    @if ($banner->banner_image)
                                        <img src="{{asset('uploads/banner/'.$banner->banner_image)}}" alt="" width="100px" class="mt-2">
                                    @endif
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@section('admin_script')
    <script>
        //editor
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
