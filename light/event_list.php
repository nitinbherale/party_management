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
                    <div class="body">
                        <button type="button" class="btn btn-round btn-simple btn-sm btn-default btn-filter" data-target="all">Todos</button>
                        <button type="button" class="btn btn-round btn-simple btn-sm btn-success btn-filter" data-target="approved">Approved</button>
                        <button type="button" class="btn btn-round btn-simple btn-sm btn-warning btn-filter" data-target="suspended">Suspended</button>
                        <button type="button" class="btn btn-round btn-simple btn-sm btn-info btn-filter" data-target="pending">Pending</button>
                        <button type="button" class="btn btn-round btn-simple btn-sm btn-danger btn-filter" data-target="blocked">Blocked</button>                        
                    </div>
                    <div class="header">
                        <h2><strong>Event</strong> List</h2>                        
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-filter table-hover m-b-0">
                            <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Image</th>
                                        <th>Event Name</th>
                                        <th>Assigned By</th>
                                        <th>Assigned To</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr data-status="approved">
                                        <td>1</td>
                                        <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 1</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td width="250px">
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="suspended">
                                        <td>2</td>
                                        <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 2</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Suspended</span></td>
                                         <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="blocked">
                                        <td>3</td>
                                       <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 2</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Blocked</span></td>
                                         <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>4</td>
                                        <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 4</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                         <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="approved">
                                        <td>5</td>
                                        <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 6</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>6</td>
                                        <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 6</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                         <td class="project-actions">
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                             <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr data-status="pending">
                                        <td>7</td>
                                         <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpeg" alt="" width="35px" class="rounded-circle"></div></td>
                                         <td class="project-title">
                                            <h6><a href="#">Event 7</a></h6>
                                            <small>Created 14.July.2018</small>
                                        </td>
                                        <td>nitin.bherale@nmpl.biz</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">Pending</span></td>
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