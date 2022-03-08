@extends('template.master')
@section('title','Ministry DashBoard')
@section('breadcrumb')
    @parent
@endsection
@section('content')
    <div class="callout callout-info">
        <h4>Health Force Reports</h4>
    </div>
    <!-- Default box -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bi-gender-male">
                <div class="inner">
                    <h3>Report</h3>
                    <h4>Upazila wise physician distribution</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-book"></i>
                </div>
                <a href="{{route('home.pages','upazilla_wise_physician')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bi-gender-male">
                <div class="inner">
                    <h3>Report</h3>
                    <h4>Post Summary</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-information"></i>
                </div>
                <a href="{{route('home.pages','post-summary')}}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection