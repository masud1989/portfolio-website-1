@extends('layout.app')

@section('title')
    Admin | Services
@endsection


@section('content')
    <h3>Admin Services</h3>
<div id="mainDiv" class="container">
<div class="row">
<div class="col-md-12 p-5">
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm"> No</th>
      <th class="th-sm">Image</th>
	  <th class="th-sm">Name</th>
	  <th class="th-sm">Description</th>
	  <th class="th-sm">Edit</th>
    <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody id="service_table">
 
  </tbody>
</table>

</div>
</div>
</div>

<!-- Loading Image----------------------------------------- -->
<div id="loaderDiv" class="container">
<div class="row">
<div class="col-md-12 text-center p-5 ">
  <img class="loader" src="{{asset('images/loader1.gif')}}">
</div>
</div>
</div>

<!-- Wrong Div----------------------------------------- -->
<div id="wrongDiv" class="container d-none">
<div class="row">
<div class="col-md-12 text-center p-5 ">
  <h3>Sorry! Something Wrong..</h3>
</div>
</div>
</div>








@endsection

@section('script')
    <script type="text/javascript">
        getServicesData();
    </script>
@endsection