<?php include("header.php") ?>
<?php 
    if(!isValidUser())  
    {
        redirect("login.php"); 
    }
    else
    {
        list($events) = exc_qry("select * from tbl_evnt where evnt_active = 0 order by evnt_id desc");
       //echo "<script>window.alert('".count($events)."')</script>"; 
    }
 ?>
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Event List</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create Event</a></li>
                                    <li class="breadcrumb-item active">Event List</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                               
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New Event</button>
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date and Time</th>
                                        <th>Location</th>
                                        <th>Image</th>
                                        <th>Assigned To</th>
                                       <!--  <th>Groups</th> -->
                                       <!--  <th data-breakpoints="xs md">Status</th> -->
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php for ($i=0; $i < count($events); $i++) { ?>                                   
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $events[$i]['evnt_tit']; ?></td>
                                        <td><?php echo $events[$i]['evnt_des']; ?></td>
                                        <td><?php echo date('d F Y', strtotime($events[$i]['evnt_date'])); ?>, 
                                            <?php echo date('h:i a',strtotime($events[$i]['evnt_time'])); ?></td>
                                        <td><?php echo $events[$i]['evnt_str']; ?>,<?php echo $events[$i]['evnt_cty']; ?>,<?php echo $events[$i]['evnt_pin_cod']; ?></td>
                                         <td><img src="assets/img/events/<?php echo $events[$i]['evnt_pic']; ?>" width="100" alt="Product img"></td>
                                        <td> 
                                            <?php if($events[$i]['evnt_date']>=date('Y-m-d')) {
                                               echo "This is my text";
                                            } ?>
                                        </td>
                                       <!--  <td>Yuvasainik</td> -->
                                       <!--  <td><span class="badge badge-success bg-success text-white">Active</span></td> -->
                                        <td>
                                            <a href="view_profile.php?mbr_no=<?php echo $member_list[$i]['mem_id']; ?>" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>

                                            <form method="POST" action="edit_member_list.php">
                                             <input type="hidden" name="id" value="<?php echo $member_list[$i]['mem_id'];?>">
                                            <!--<a href="javascript:void(0);" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>-->
                                            <button type="submit" name="edit_member" class="btn btn-sm btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></button>
                                            </form>
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

<script>
    $(document).ready(function () {
        $('.star').on('click', function () {
            $(this).toggleClass('star-checked');
        });

        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });
    });
</script>