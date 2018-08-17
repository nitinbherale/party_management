<?php include("header.php") ?>
<link rel="stylesheet" href="../assets/plugins/fullcalendar/fullcalendar.min.css">

<section class="content page-calendar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Calendar</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                                    <li class="breadcrumb-item active">Calendar</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <button type="button" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10" data-toggle="modal" data-target="#addevent">Add Events</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">            
            <div class="col-md-12 col-lg-7">
                <div class="card">
                    <div class="body">
                        <button class="btn btn-sm btn-primary btn-round waves-effect" id="change-view-today">today</button>
                        <button class="btn btn-sm btn-default btn-simple btn-round waves-effect" id="change-view-day" >Day</button>
                        <button class="btn btn-sm btn-default btn-simple btn-round waves-effect" id="change-view-week">Week</button>
                        <button class="btn btn-sm btn-default btn-simple btn-round waves-effect" id="change-view-month">Month</button>
                        <div id="calendar" class="m-t-20"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="card">
                <div class="body">
                    <div class="event-name b-primary row">
                        <div class="col-3 text-center">
                            <h4>11<span>Dec</span><span>2017</span></h4>
                        </div>
                        <div class="col-9">
                            <h6>Conference</h6>
                            <p>Shivsena Dashra Melava</p>
                            <address><i class="zmdi zmdi-pin"></i> Dadar,Mumbai</address>
                        </div>
                    </div>
                    <div class="event-name b-primary row">
                        <div class="col-3 text-center">
                            <h4>13<span>Dec</span><span>2017</span></h4>
                        </div>
                        <div class="col-9">
                            <h6>Birthday</h6>
                            <p>Today, Birthday</p>
                            <address><i class="zmdi zmdi-pin"></i> Aaditya Saheb</address>
                        </div>
                    </div>
                    <hr>                    
                    <div class="event-name b-lightred row">
                        <div class="col-3 text-center">
                            <h4>09<span>Dec</span><span>2017</span></h4>
                        </div>
                        <div class="col-9">
                            <h6>Repeating Event</h6>
                            <p>Something will happen</p>
                            <address><i class="zmdi zmdi-pin"></i> Mumbai</address>
                        </div>
                    </div>
                    <hr>
                    <div class="event-name b-greensea row">
                        <div class="col-3 text-center">
                            <h4>16<span>Dec</span><span>2017</span></h4>
                        </div>
                        <div class="col-9">
                            <h6>Repeating Event</h6>
                            <p>It is a long established fact that a reader will be distracted</p>
                            <address><i class="zmdi zmdi-pin"></i> Thane</address>
                        </div>
                    </div>
                    <div class="event-name b-greensea row">
                        <div class="col-3 text-center">
                            <h4>28<span>Dec</span><span>2017</span></h4>
                        </div>
                        <div class="col-9">
                            <h6>Shivsena Vardhpan Din</h6>
                            <p>Something text will be here</p>
                            <address><i class="zmdi zmdi-pin"></i> Thane, Mumbai</address>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="body">
                        <p class="copyright m-b-0">Copyright 2018 © All Rights Reserved. Shivsena Program Management System.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 
<script src="assets/js/pages/calendar/calendar.js"></script>