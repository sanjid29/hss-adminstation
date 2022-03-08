@extends('template.master')
@section('title','Ministry DashBoard')
@section('breadcrumb')
    @parent
@endsection
@section('content')

    <div class="callout callout-info">
        <h4>Operational Plan</h4>
    </div>

{{--    <div id="myOp" style="background-color:#808080;"></div>--}}
    <div id="divDtl" style="width:100%; height:calc(100vh - 220px) !important"></div>
    <style>
        body.enlarged {
            font-size: 1.3em !important;
        }
    </style>

@endsection
@section('js')
    <script type="text/javascript">
        var request = new XMLHttpRequest();
        request.open('GET', 'http://adp.dghs.gov.bd/api/dashboard', true);
        request.setRequestHeader('clientID', 'minDashboard');
        request.setRequestHeader('X-Auth-Token', '287a09e91c4c22ee46a2c3ee48416892859add25995545b9a4a5f9fb9dcdc633');
        request.send();
        request.onreadystatechange = function () {
            var DONE = this.DONE || 4;
            if (this.readyState === DONE) {
                // $.noConflict(true);
                $('#divDtl').html(this.responseText);
                document.body.classList.add('enlarged');
            }
        };
    </script>
    </script>
@endsection