


@extends('layouts.main')
@extends('layouts.innernav')

@section('content')
<main id="main">

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>
    <form method="POST"  action="{{ route('profileimage.update') }}" enctype="multipart/form-data" >
        @csrf
    <div class="container">
        <div class="row">
        <div class="col-sm-2 imgUp">
          <div class="imagePreview"></div>
      <label class="btn btn-primary">Choose a image<input type="file" name="image" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
        </div><!-- col-2 -->
        {{-- <i class="fa fa-plus imgAdd"></i> --}}
       </div><!-- row -->
      </div><!-- container -->
      <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('update') }}
            </button>
        </div>
    </div>
</form>

</main><!-- End #main -->
@endsection
