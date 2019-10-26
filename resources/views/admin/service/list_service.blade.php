@extends('layouts.app')
@section('page-header')
    Manage Service
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
                            <th>Service Title</th>
                            <th>Action</th>
                        </tr>
                        @php($i = 1)
                        @foreach($services as $service)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $service->service_title }}</td>
                                <td>
                                    @if($service->publication_status == 1)
                                        <a href="{{ route('unpublished-service', ['id'=>$service->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-service', ['id'=>$service->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-service', ['id'=>$service->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-service', ['id'=>$service->id]) }}" class="btn btn-danger btn-xs">
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