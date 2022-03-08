@extends('template.master')
@section('title','Ministry DashBoard')
@section('breadcrumb')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <h4>Operational Planning</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-briefcase"></i>
                </div>
                <a href="{{route('home.pages','op')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <h4>Project Management</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('home.pages','dpp')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>

                    <h4>Health Force</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('home.pages','hrm')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <h4>Equipment</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-android-phone-landscape"></i>
                </div>
                <a href="{{route('home.pages','equipment')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
                <div class="inner">
                    <h3>25</h3>

                    <h4>CMSD</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-medkit"></i>
                </div>
                <a href="{{route('home.pages','cmsd')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-gray-light">
                <div class="inner">
                    <h3>10</h3>

                    <h4>Other</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-paperclip"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script type="text/javascript">
    </script>
@stop