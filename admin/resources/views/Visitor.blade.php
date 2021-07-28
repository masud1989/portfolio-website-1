@extends('layout.app')

@section('title')
    Admin | Visitor
@endsection

@section('content')
  <h4>Visitor Management</h4>

<div class="container">
<div class="row">
<div class="col-md-12 p-5">
  <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">NO</th>
        <th class="th-sm">IP</th>
        <th class="th-sm">Date & Time</th>
        <th class="th-sm">Action</th>
        <th class="th-sm">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($visitor as $row)
      <tr>
        <th class="th-sm">{{$row->id}}</th>
        <th class="th-sm">{{$row->ip_address}}</th>
        <th class="th-sm">{{$row->visit_time}}</th>
        <th class="th-sm"> <a href="" class="btn btn-sm btn-info" id="edit" title="Edit" > <i class="fas fa-edit"></i></a></th>
        <th class="th-sm"> <a href="" class="btn btn-sm btn-danger" id="delete" title="Delete" ><i class="fas fa-trash"></i></a></th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>

@endsection
