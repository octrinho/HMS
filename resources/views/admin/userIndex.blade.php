@extends('layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="success_element">
            <p>{{ $message }}</p>
        </div> 
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" >
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Management</h3>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#userForm" style="float:right;">
                <i class="fas fa-plus-circle"> Add User </i>
            </button>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <center>
                                    <a href="">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit">Edit</i></button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt">Delete</i></button>
                                </center>
                            </td>
                        </tr>
                   
                </tbody>
                
            </table>
        </div>
    </div>





    <div class="modal fade" id="userForm">
        <form role="form" method="post" action="" id="editUserForm">
            @csrf
            @method('POST')
            <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">User Informations</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputfirstName">First Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputfirstName"> Middle Name</label>
                                    <input type="text" name="mname" class="form-control" id="mname" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputfirstName"> Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" >
                                </div>
                         </div>
                       

    
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputfirstName">Email</label>
                                    <input type="text" name="email" class="form-control" id="email" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputfirstName">Role</label>
                                    <select class="form-control" name="role_id">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}"> {{$role->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

                               
                            </div>
                       
                    </div>     
                        
                    </div>
                    <div class="modal-footer justify-content-between bg-primary">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal"><b>Close</b></button>
                        <button type="submit" class="btn btn-outline-light"><b>Add User</b></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('pagescripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
   
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">

        $(function () {
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            
            });
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });     

        

    </script>
@endsection