@extends('layout.base')

@section('title')
<title>Topics : Create</title>
@endsection

@section('stylesheet')
<script src="{{asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>tinymce.init({selector: 'textarea'});</script>
@endsection

@section('content_body')
<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Topics : Create</h3>

                <div class="login-form col-md-8" style="margin: auto">
                    <form action="{{url('/my_topics')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <select class="form-control" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="au-input au-input--full" type="text" name="title" placeholder="title" value="{{\Illuminate\Support\Facades\Input::old('title')}}" required>
                            <span class="validator_output <?php if ($errors->first('title') != null) echo "alert-danger" ?>">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content">{{\Illuminate\Support\Facades\Input::old('content')}}</textarea>
                            <span class="validator_output <?php if ($errors->first('content') != null) echo "alert-danger" ?>">{{ $errors->first('content') }}</span>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END DATA TABLE-->

@endsection

@section('script')

@endsection
