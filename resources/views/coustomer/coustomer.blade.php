@include('header')
@include('sideheader')
<!DOCTYPE html>
<html lang="en">
<head>
<title>yajra datatables</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">  
<link  href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
<script src="{{asset('js/jquery.js')}}"></script>  
<script src="{{asset('js/bootstrap.min.js')}}"></script>  
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>  
</head>
      <body>
         <div class="container">
         <div class="form-group" style="
          margin-left: 10px;
         ">
         <div class="updata" action="{{ url('coustomer') }}">
               <h2>Coustomers</h2>
            <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                  </tr>
               </thead>
            </table>
            <button type="submit" class="btn btn-primary">Add Coustomer</button>
         </div>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('coustomerlist') }}",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                 ]
        });
     });
  </script>
   </body>
</html>