@extends('layouts.app')
@section('page-header')
    Add Banner
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4 class="text-center text-success">Add Banner</h4>
                </div>
                <h3 class="text-center success">{{ Session::get('message') }}</h3>
                <div class="panel-body">
                    <form action="{{ route('save-banner') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                       
                        
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Banner Name</label>
                            <div class="col-md-8">
                                <input type="text" name="banner_title" class="form-control" />
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Banner Link</label>
                            <div class="col-md-8">
                                <input type="text" name="banner_link" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Short Description for Home banner</label>
                            <div class="col-md-8">
                                <textarea name="banner_short_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Featured Image</label>
                            <div class="col-md-8">
                                <input type="file" name="banner_featured_image" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" for="">Publication Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" class="custom-control-input" checked name="publication_status" value="1">Published</label>
                                <label><input type="radio" class="custom-control-input" name="publication_status" value="0">Published</label>
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