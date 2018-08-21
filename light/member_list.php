<?php include("header.php");
if(!isValidUser())  
    {
    redirect("login.php"); 
    }
    else
    {
        list($member_list) = exc_qry("select * from tbl_member order by mem_id desc");

          if (isset($_POST['delete_member'])) {
               $id = $_POST['id'];
               $qry_del = "update tbl_member set status = 1 where mem_id = $id";
               $del_qry_fire= mysqli_query($dblink,$qry_del);

               if ( $del_qry_fire) {
                  echo "Data Deleted Successfully";
               }
               else{
                echo "Something went wrong";
               }


          }
    }


 ?>

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
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Image</th>
                                        <th>District</th>
                                        <th data-breakpoints="xs">Tahsil</th>
                                        <th>Mobile No.</th>
                                       <!--  <th>Groups</th> -->
                                       <!--  <th data-breakpoints="xs md">Status</th> -->
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php for ($i=0; $i < count($member_list); $i++) { ?>                                   
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $member_list[$i]['mem_f_nm']; ?></td>
                                        <td><?php echo $member_list[$i]['mem_desn']; ?></td>
                                        <td><?php if(strlen($member_list[$i]['mem_img'])>0){
                                                    $img = $member_list[$i]['mem_img'];
                                                    }
                                                    else{
                                                        $img = "no_image.png";
                                                    };  ?>
                                            <img src="assets/img/<?php echo $img; ?>" width="60" alt="Product img"></td>
                                        <td><?php echo $member_list[$i]['mem_dis']; ?></td>
                                        <td><?php echo $member_list[$i]['mem_tah']; ?></td>
                                        <td><?php echo $member_list[$i]['mem_m_no']; ?></td>
                                       <!--  <td>Yuvasainik</td> -->
                                       <!--  <td><span class="badge badge-success bg-success text-white">Active</span></td> -->
                                        <td>
                                            <a href="view_profile.php?mbr_no=<?php echo $member_list[$i]['mem_id']; ?>" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>

                                            <form method="POST">
                                                <input type="hidden" name="id" value="<?php echo $member_list[$i]['mem_id'];?>">
                                            <!--<a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>-->
                                             <button type="submit" name="delete_member" class="btn btn-sm btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>   
                                    <?php  } ?>    
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

<script src="../assets/plugins/editable-table/mindmup-editabletable.js"></script>
<script src="assets/js/pages/tables/editable-table.js"></script>