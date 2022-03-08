@extends('template.forms.grid')
@section('content')

<h2 class="mb-4">{{$modelName." Table"}}</h2>
<table class="table table-bordered data-table">
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
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
                    {data: 'email', name: 'email'},
                    {data: 'mobile_no', name: 'mobile_no'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'action',
                        orderable: false,
                        searchable: false
                    }]
            } );

        });
    </script>
@endsection