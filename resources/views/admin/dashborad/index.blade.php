@extends('layouts.dashborad.admin')
@section('title','Dashborad')

@section('content')

            <div id="page-wrapper" style="margin-left: -50px; margin-right: -111px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user-md fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $countDoctor }}</div>
                                            <div>Doctors</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/doctors">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-bell fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $countService }}</div>
                                            <div>Services</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/services">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $countClient }}</div>
                                            <div>Clients</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/clients">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-phone-square fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $countContact }}</div>
                                            <div>Contacts</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/contacts">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-red" style="border:1px solid #713736">
                                <div class="panel-heading" style="border-color:#713736; color:#fff; background-color:#713736;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $countAppointment }}</div>
                                            <div>Appointments</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/appointments">
                                    <div class="panel-footer">
                                        <span class="pull-left" style="color: #713736;">View Details</span>
                                        <span class="pull-right" style="color: #713736;"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-red" style="border:1px solid #83afd4">
                                <div class="panel-heading" style="border-color:#83afd4;color: #fff;background-color:#83afd4;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-image fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ $countGallary }}</div>
                                            <div>Gallaries</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/gallaries">
                                    <div class="panel-footer">
                                        <span class="pull-left text-gallary" style="color: #83afd4;">View Details</span>
                                        <span class="pull-right" style="color: #83afd4;"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- /.container-fluid -->
            <!-- /#page-wrapper -->
@endsection
