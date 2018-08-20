<?php include("header.php") ?>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">                    
                   
                    <div class="header">
                        <h2><strong>Group</strong> List</h2>                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-filter table-hover m-b-0">
                            <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Goup List</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr data-status="approved">
                                        <td>1</td>
                                         <td class="project-title">
                                            <h6><a href="#">Shivsena</a></h6>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                     <tr data-status="approved">
                                        <td>2</td>
                                         <td class="project-title">
                                            <h6><a href="#">Yuvasena</a></h6>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                     <tr data-status="approved">
                                        <td>3</td>
                                         <td class="project-title">
                                            <h6><a href="#">Other</a></h6>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
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