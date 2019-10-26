@extends('layouts.app')
@section('page-header')
    Edit Page
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4 class="text-center text-success">Edit Page</h4>
                </div>
                <h3 class="text-center success">{{ Session::get('message') }}</h3>
                <div class="panel-body">
                    <form action="{{ route('update-page') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                       
                        
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Page Name</label>
                            <div class="col-md-8">
                                <input type="hidden" value="{{ $page->id }}" name="page_id" class="form-control" />
                                <input type="text" name="page_title" value="{{ $page->page_title }}" class="form-control" />
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Page Content</label>
                            <div class="col-md-8">
                                <textarea id="editor" name="page_content" class="form-control">{{ $page->page_content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Short Description for Home page</label>
                            <div class="col-md-8">
                                <img src="{{route('/')}}/{{$page->page_featured_image}}">
                                <textarea name="page_short_description" class="form-control">{{ $page->page_short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Featured Image</label>
                            <div class="col-md-8">
                                <input type="file" name="page_featured_image" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Publication Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" class="custom-control-input" {{ $page->publication_status == 1? 'checked' : '' }} name="publication_status" value="1">Published</label>
                                <label><input type="radio" class="custom-control-input" {{ $page->publication_status == 0 ? 'checked' : '' }} name="publication_status" value="0">Unpublished</label>
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