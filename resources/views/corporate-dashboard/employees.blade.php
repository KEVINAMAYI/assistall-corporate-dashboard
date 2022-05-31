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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Alvin Otieno </td>
                                            <td>kevinamayi20@gmail.com</td>
                                            <td>0795704301</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Kevin Amayi </td>
                                            <td>kevinamayi20@gmail.com</td>
                                            <td>0795704301</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Sky  Alvin</td>
                                            <td>kevinamayi20@gmail.com</td>
                                            <td>0795704301</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Mark Kimani</td>
                                            <td>kevinamayi20@gmail.com</td>
                                            <td>0795704301</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
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
                <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="0795704301">
                      </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Add Employee</a>
                </div>
                </form>
            </div>
        </div>
    </div>

    @include('corporate-dashboard.layouts.javascript')

@endsection