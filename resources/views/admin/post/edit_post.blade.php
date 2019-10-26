@extends('layouts.app')
@section('page-header')
    Edit Post
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Post</h4>
                </div>
                <h3 class="text-center success">{{ Session::get('message') }}</h3>
                <div class="panel-body">
                    <form action="{{ route('update-post') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Post Category</label>
                            <div class="col-md-8">
                                <select name="category_id" id="" class="form-control">
                                    <option value="{{ $post->category->id }}" selected>{{ $post->category->category_name }}</option>
                                    @foreach($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Post Title</label>
                            <div class="col-md-8">
                                <input type="text" name="post_title" value="{{ $post->post_title }}" class="form-control" />
                                <input type="hidden" value="{{ $post->id }}" name="post_id" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="post_short_description" class="form-control">{{ $post->post_short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Long Description</label>
                            <div class="col-md-8">
                                <textarea id="editor" name="post_content" class="form-control">{{ $post->post_content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Featured Image</label>
                            <div class="col-md-8">
                                <img src="{{route('/')}}/{{$post->post_featured_image}}" width="100px"/>
                                <input type="file" value="" id="post_featured_image" name="post_featured_image" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Publication Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" class="custom-control-input" {{ $post->publication_status == 1? 'checked' : '' }} name="publication_status" value="1">Published</label>
                                <label><input type="radio" class="custom-control-input" {{ $post->publication_status == 0 ? 'checked' : '' }} name="publication_status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection