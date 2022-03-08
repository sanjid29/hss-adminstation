@extends('template.master')
@section('title','Ministry DashBoard')
@section('breadcrumb')
    @parent
@endsection
@section('content')


    <div id="ministry-hrm-iframe">
    <iframe src="http://103.247.238.92/webportal/pages/hrm_post_summary_ministry_d.php" width="100%" frameborder="0"></iframe>
    </div>
    <style type="text/css">
        iframe {
            height: calc(100vh - 100px)
        }
    </style>
    <!-- /.box -->
@endsection