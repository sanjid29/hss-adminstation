@extends('template.master')
@section('title',env('APP_NAME'))
@section('breadcrumb')
    @parent
@endsection
@section('content-header')
    <div class="row">
        <div class="col-md-12">
            <h1> HSS System Administration System</h1>
        </div>
    </div>
@endsection
@section('content')

    <div class="row">

        <div class="col-lg-6 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>DHIS2 Central Server</h3>
                    <h4>Commands</h4>
                </div>
                <div class="icon">
                    <span class="iconify" data-icon="ion:layers-outline"></span>
                </div>
                <a href="{{route('home.pages','dhis2')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Biometric Attendance</h3>

                    <h4>Commands</h4>
                </div>
                <div class="icon">
                    <span class="iconify" data-icon="ion:finger-print-sharp"></span>
                </div>
                <a href="{{route('home.pages','ba')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>HRM</h3>

                    <h4>Commands</h4>
                </div>
                <div class="icon">
                    <span class="iconify" data-icon="ion:laptop-outline"></span>
                </div>
                <a href="{{route('home.pages','hrm')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>GRS System</h3>

                    <h4>Commands</h4>
                </div>
                <div class="icon">
                    <span class="iconify" data-icon="ion:logo-dropbox"></span>
                </div>
                <a href="{{route('home.pages','grs')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script type="text/javascript">
    </script>
@stop