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
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Manage Account</h1>
                   </div>

                    <div class="row mb-4 ml-2">
                        <button class="btn-md btn-success" style="margin-right:20px; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;">                   
                            <i class="fas fa-fw fa-plus"></i>
                              Deposit
                        </button>

                        <button class="btn-md btn-success" style="padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;">                   
                            <i class="fas fa-fw fa-minus"></i>
                              Withdraw
                        </button>

                    </div>

                    <div class="row">


                    <h4 style="margin-bottom:20px; margin-left:10px;">Wallet Balance: KES 20000000</h4>

                        <!-- DataTales Example -->
                    <div class="card col-md-12 col-lg-12 shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="accountManagementTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Branch Code</th>
                                            <th>Branch Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Branch Code</th>
                                            <th>Branch Name</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>00100</td>
                                            <td>Kitale</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>00100</td>
                                            <td>Bungoma</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>00100</td>
                                            <td>Nairobi</td>
                                            <td>
                                                <button class="btn-sm btn-warning">edit</button>
                                                <button class="btn-sm btn-info">delete</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>00100</td>
                                            <td>Eldoret</td>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('corporate-dashboard.layouts.javascript')

@endsection