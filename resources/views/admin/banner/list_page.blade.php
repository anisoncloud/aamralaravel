@extends('layouts.app')
@section('page-header')
    Manage Post
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
                            <th>page Title</th>
                           
                            <th>Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($pages as $page)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $page->page_title }}</td>
                                
                                <td>
                                    @if($page->publication_status == 1)
                                        <a href="{{ route('unpublished-page', ['id'=>$page->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-page', ['id'=>$page->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-page', ['id'=>$page->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-page', ['id'=>$page->id]) }}" class="btn btn-danger btn-xs">
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