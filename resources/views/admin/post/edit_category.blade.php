@extends('layouts.app');

@section('page-header')
    Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3 class="text-center success">{{ Session::get('message') }}</h3>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success"> Edit Category Form</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ route('update-category') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $category->category_name }}" name="category_name" class="form-control" />
                                <input type="hidden" value="{{ $category->id }}" name="category_id" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Category Description</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="category_description">{{ $category->category_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 radio">
                                <label><input type="radio" name="publication_status" {{ $category->publication_status == 1? 'checked' : '' }} value="1"/>Published</label><br/>
                                <label><input type="radio" name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0"/> Unpublished </label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection