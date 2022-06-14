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
                    <h1 class="h3 mb-0 text-gray-800">Organization Branches</h1>
                   </div>

                    <div class="row mb-4 ml-2">
                        <span class="btn-md btn-success" style="cursor:pointer; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; border-radius:10px; border:0px; margin-top:10px; margin-bottom:10px;"
                         data-toggle="modal" data-target="#branchModal">                   
                            <i class="fas fa-fw fa-plus"></i>
                              Add Branch
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
                            <h6 class="m-0 font-weight-bold text-primary">Branches</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="branchesTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Branch Code</th>
                                            <th>Branch Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($branches as $branch)
                                        <tr>
                                            <td>{{ $branch->branch_code }}</td>
                                            <td>{{ $branch->branch_name }}</td>
                                            <td>
                                                <button  id="{{ $branch->id }}" class="branch_edit_modal_btn btn-sm btn-warning">edit</button>
                                                <a href="delete-branch/{{ $branch->id }}" class="btn-sm btn-info">delete</a>
                                            </td>
                                            
                                        </tr> 
                                    @endforeach 
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Branch Code</th>
                                            <th>Branch Name</th>
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

    <!-- Add Branch Modal-->
    <form action="/add-branch" method="POST">
    @csrf
    <div class="modal fade" id="branchModal" tabindex="-1" role="dialog" aria-labelledby="branchModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="branchModalLabel">Add Branch</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="branch_code">Branch Code</label>
                        <input type="text" class="form-control" id="branch_code" name="branch_code" placeholder="Enter Branch Code">
                    </div>
                    <div class="form-group">
                        <label style="margin-left:0px; font-weight:bold;" for="branch_name">Branch Name</label>
                        <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="Enter Branch Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Branch</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    @include('corporate-dashboard.layouts.javascript')


     <!-- Edit Branch Modal-->
     <form action="/edit-branch" method="POST">
        @csrf
        <div class="modal fade" id="editbranchModal" tabindex="-1" role="dialog" aria-labelledby="editbranchModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editbranchModalLabel">Edit Branch</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label style="margin-left:0px; font-weight:bold;" for="branch_code">Branch Code</label>
                            <input type="text" class="form-control" id="edited_branch_code" name="edited_branch_code" placeholder="Enter Branch Code">
                        </div>
                        <div class="form-group">
                            <label style="margin-left:0px; font-weight:bold;" for="branch_name">Branch Name</label>
                            <input type="text" class="form-control" name="edited_branch_name" id="edited_branch_name" placeholder="Enter Branch Name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn  btn-primary">Edit Branch</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        
        @include('corporate-dashboard.layouts.javascript')

@endsection