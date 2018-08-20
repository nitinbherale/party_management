<?php include("header.php") ?>

<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- Main Content -->
<section class="content ecommerce-page">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Member List</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html">Member <i class="icon-user"></i></a></li>
                                    <!--<li class="breadcrumb-item"></li>-->
                                    <li class="breadcrumb-item active">Member List</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list product-order-list">
                    <div class="body">
                        <div class="table-responsive">
                            <table id="mainTable" class="table table-bordered table-striped table-hover dataTable js-exportable m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th data-breakpoints="sm xs">Email ID</th>
                                        <th>Image</th>
                                        <th>District</th>
                                        <th data-breakpoints="xs">Tal</th>
                                        <th>Mobile No.</th>
                                        <th>Groups</th>
                                        <th data-breakpoints="xs md">Status</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>Nitin Bherale</td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td><img src="../assets/images/nitin_sb.jpg" width="40" alt="Product img"></td>
                                        <td>Thane</td>
                                        <td>Kalyan</td>
                                        <td>9922854416</td>
                                        <td>Yuvasainik</td>
                                        <td><span class="badge badge-success bg-success text-white">Active</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>  
                                     <tr>
                                        <td>Nitin Bherale</td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td><img src="../assets/images/nitin_sb.jpg" width="40" alt="Product img"></td>
                                        <td>Thane</td>
                                        <td>Kalyan</td>
                                        <td>9922854416</td>
                                        <td>Yuvasainik</td>
                                        <td><span class="badge badge-success bg-success text-white">Active</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>  
                                     <tr>
                                        <td>Nitin Bherale</td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td><img src="../assets/images/nitin_sb.jpg" width="40" alt="Product img"></td>
                                        <td>Thane</td>
                                        <td>Kalyan</td>
                                        <td>9922854416</td>
                                        <td>Yuvasainik</td>
                                        <td><span class="badge badge-success bg-success text-white">Active</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>  
                                     <tr>
                                        <td>Nitin Bherale</td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td><img src="../assets/images/nitin_sb.jpg" width="40" alt="Product img"></td>
                                        <td>Thane</td>
                                        <td>Kalyan</td>
                                        <td>9922854416</td>
                                        <td>Yuvasainik</td>
                                        <td><span class="badge badge-success bg-success text-white">Active</span></td>
                                        <td>
                                             <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>  
                                     <tr>
                                        <td>Nitin Bherale</td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td><img src="../assets/images/nitin_sb.jpg" width="40" alt="Product img"></td>
                                        <td>Thane</td>
                                        <td>Kalyan</td>
                                        <td>9922854416</td>
                                        <td>Yuvasainik</td>
                                        <td><span class="badge badge-success bg-success text-white">Active</span></td>
                                        <td>
                                             <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>Nitin Bherale</td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td><img src="../assets/images/nitin_sb.jpg" width="40" alt="Product img"></td>
                                        <td>Thane</td>
                                        <td>Kalyan</td>
                                        <td>9922854416</td>
                                        <td>Yuvasainik</td>
                                        <td><span class="badge badge-success bg-success text-white">Active</span></td>
                                        <td>
                                             <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/js/pages/tables/jquery-datatable.js"></script>

<script src="../assets/plugins/editable-table/mindmup-editabletable.js"></script> <!-- Editable Table Plugin Js --> 
<script src="assets/js/pages/tables/editable-table.js"></script>