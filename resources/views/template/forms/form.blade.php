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
                <h3>{{$modelName}} Details</h3>
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
    @if(isset($element))
        <form method="POST" action="{{ route($routeName.'.update',$element) }}" enctype="multipart/form-data">
            @method('put')
            @else
                <form method="POST" action="{{ route($routeName.'.store') }}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('form-input')
                    <div class="form-row" style="margin-top:1%">
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>

                </form>

                @if(isset($element))

                    <div class="form-group col-md- pull-right">
                        {{--<a href="{{route($routeName.'.destroy',$element->id)}}" class="btn btn-danger">Delete</a>--}}
                        <form id="myform" action="{{route($routeName.'.destroy',$element->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                @endif
                @yield('after-form-input')
                @endsection
            @section('js')
                @parent
                <script>

                    $('button#delete').on('click',function(e) {
                        e.preventDefault();
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn btn-success',
                                cancelButton: 'btn btn-danger'
                            },
                            buttonsStyling: false
                        })

                        swalWithBootstrapButtons.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'No, cancel!',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                            $('#myform').submit();
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        } else if (
                            /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                'Cancelled',
                                'Your file has not been deleted',
                                'error'
                            )
                        }
                    })
                    });
                </script>
@endsection