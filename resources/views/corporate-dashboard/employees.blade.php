@extends('corporate-dashboard.layouts.body')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

     @include('corporate-dashboard.layouts.sidebar')


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                   <!-- Topbar -->
                   <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    @include('corporate-dashboard.layouts.topbar')


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Employees</h1>
                    </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#employeeModal">                   
                            <i class="fas fa-fw fa-plus"></i>
                              Add Employee
                         </span>
                    </div>

                    {{-- display success message on a successful action --}}
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    </div>
                    @endif

                    {{-- display error on top of the form --}}
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error )
                            <li class="list-group-item">
                            {{ $error }}  
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row">

                    <!-- DataTales Example -->
                    <div class="card col-md-12 col-lg-12 shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employees</h6>
                        </div>

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="employeesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>ID Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->first_name.' '.$employee->last_name}}</td>
                                                <td>{{ $employee->email  }}</td>
                                                <td>{{ $employee->phone_number }}</td>
                                                <td>{{ $employee->id_number }}</td>
                                                <td>
                                                    <button id="{{ $employee->id }}" class="employee_edit_modal_btn btn-sm btn-warning">edit</button>
                                                    <a href="/delete-employee/{{ $employee->id }}" class="btn-sm btn-info">delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>ID Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                     </div>

                 
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Add Employee Modal-->
    <form action="/add-employee" method="POST">
    @csrf
    <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="last_name">ID Number</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" placeholder="Enter ID Number" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                      </div>
                      <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="0795704301" required>
                      </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Add Employee</button>
                </div>
            </div>
        </div>
    </div>
   </form>


 <!-- Edit Employee Modal-->
<form action="/edit-employee" method="POST">
    @csrf
    <div class="modal fade" id="editemployeeModal" tabindex="-1" role="dialog" aria-labelledby="editemployeeModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editemployeeModalLabel">Edit Employee</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="edited_first_name">First Name</label>
                        <input type="text" class="form-control" id="edited_first_name" name="edited_first_name" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="edited_last_name">Last Name</label>
                        <input type="text" class="form-control" id="edited_last_name" name="edited_last_name" placeholder="Enter Last Name" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="edited_id_number">ID Number</label>
                        <input type="text" class="form-control" id="edited_id_number" name="edited_id_number" placeholder="Enter ID Number" required>
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="edited_email">Email address</label>
                        <input type="email" class="form-control" id="edited_email" name="edited_email" aria-describedby="emailHelp" placeholder="Enter email" required>
                      </div>
                      <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="edited_phone">Phone Number</label>
                        <input type="number" class="form-control" id="edited_phone" name="edited_phone" placeholder="0795704301" required>
                      </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="employee_id" name="employee_id" value="">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Edit Employee</button>
                </div>
            </div>
        </div>
    </div>
</form>




@include('corporate-dashboard.layouts.javascript')

@endsection