@extends('layouts.app')
@section('page-header')
    Manage Banners
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center success" id="xyz">{{ Session::get('message') }}</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Sl. No</th>
                            <th>banner Title</th>
                           
                            <th>Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($banners as $banner)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $banner->banner_title }}</td>
                                
                                <td>
                                    @if($banner->publication_status == 1)
                                        <a href="{{ route('unpublished-banner', ['id'=>$banner->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-banner', ['id'=>$banner->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-banner', ['id'=>$banner->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-banner', ['id'=>$banner->id]) }}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection