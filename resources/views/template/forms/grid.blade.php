@extends('template.master')
@if($modelName)
    @section('title',($modelName))
@endif
@section('breadcrumb')
    @parent
@endsection
@section('content-header')
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route($routeName.'.index')}}">{{$modelName}}</a></li>
        {{--<li><a href="#">Layout</a></li>--}}
        {{--<li class="active">Fixed</li>--}}
    </ol>
    <div class="callout callout-info">
        <div class="row">
            <div class="col-md-6">
                <h3>List of {{$routeName}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-adn" href="{{route($routeName.'.create')}}" target="_blank"> Create New </a>
                <a class="btn " href="{{route($routeName.'.index')}}" target="_blank"><i
                            class="fas fa-align-justify"></i></a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <h2 class="mb-4">{{$modelName." Table"}}</h2>
    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
@section('js')

    <script type="text/javascript">
        $(function() {
            let table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route($routeName.'.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@endsection