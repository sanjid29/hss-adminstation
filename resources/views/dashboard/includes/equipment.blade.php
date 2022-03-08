@extends('template.master')
@section('title','Ministry DashBoard')
@section('breadcrumb')
    @parent
@endsection
@section('content')
    <div class="callout callout-info">
        <h4>Equipment Plan</h4>
    </div>
    <iframe src="http://103.247.238.92/webportal/pages/dashboard_logistic_hm.php" width="100%" frameborder="0"
    style="height: calc(100vh - 250px)"></iframe>
    <!-- /.box -->
@endsection