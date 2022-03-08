@extends('template.master')
@section('title','HRIS System')
@section('breadcrumb')
    @parent
@endsection
@section('content')
    <div class="callout callout-info">
        <h4>HRIS System</h4>
    </div>
    <!-- Default box -->
    <!-- Default box -->
    <div class="box collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Completeness of HRM data (Provider)</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
@endsection