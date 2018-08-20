<?php include("header.php") ?>

<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Add New Event</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Event List</a></li>
                                    <li class="breadcrumb-item active">New Event</li>
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
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Event</strong> Details</h2>
                    </div>
                    <div class="body">
                        <form>
                            <label for="event_name">Event Title</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" placeholder="Event Name*">
                            </div>
                            <label for="Event_description">Event Desciption</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" placeholder="Event Description">
                            </div>
                             <label for="Event_date">Date</label>
                            <div class="form-group">                                
                                <input type="date" id="email_address" class="form-control" placeholder="Enter Date">
                            </div>
                             <label for="Event_time">Time</label>
                            <div class="form-group">                                
                                <input type="time" id="email_address" class="form-control" placeholder="Enter Time">
                            </div>
                            <label for="Event_location">Location*</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" placeholder="Enter Location*">
                            </div>
                            <label for="Coordinate_person">Event Coordinate person*</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" placeholder="Person name*">
                            </div>

                             <label for="Coordinate_email">Event Coordinate Email*</label>
                            <div class="form-group">                                
                                <input type="email" id="email_address" class="form-control" placeholder="Person Email*">
                            </div>
                             <label for="Coordinate_mobile">Event Coordinate Mobile No.*</label>
                            <div class="form-group">                                
                                <input type="text" id="email_address" class="form-control" placeholder="Mobile No.*">
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" type="checkbox">
                                <label for="remember_me">
                                        Remember Me
                                </label>
                            </div>
                            <button type="button" class="btn btn-raised btn-primary btn-round waves-effect">CREATE Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->        
    </div>
</section>