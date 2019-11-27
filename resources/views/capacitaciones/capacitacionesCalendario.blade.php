<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secapp</title>

    <!-- Bootstrap -->
    <link href="theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="theme/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="theme/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="theme/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="theme/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="theme/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="theme/build/css/custom.min.css" rel="stylesheet">

    <!-- PNotify -->
    <link href="theme/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="theme/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="theme/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

</head>

<body class="nav-md">
	@extends('escritorioLayout')

    <div class="container body">
      <div class="main_container">
	@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendario de Capacitaciones <small>Click para agregar/editar Eventos</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Calendario</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button type="button" class="fc-listMonth-button fc-button fc-state-default fc-corner-right">list</button></div></div><div class="fc-center"><h2>November 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 736px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 122px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-10-27"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2019-10-28"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2019-10-29"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2019-10-30"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2019-10-31"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-01"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2019-10-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2019-10-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2019-10-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2019-10-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2019-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-11-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-11-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 122px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-03"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-04"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-11-05"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-11-06"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-11-07"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-08"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-11-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-11-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-11-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-11-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-11-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 122px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-10"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-11"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-11-12"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-11-13"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-11-14"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-15"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-16"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-11-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-11-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-11-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-11-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-11-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-11-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-11-16"><span class="fc-day-number">16</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 122px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-17"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-18"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-11-19"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-11-20"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-11-21"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-22"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-23"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-11-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-11-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-11-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-11-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-11-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-11-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-11-23"><span class="fc-day-number">23</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 122px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-24"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-25"></td><td class="fc-day fc-widget-content fc-tue fc-today fc-state-highlight" data-date="2019-11-26"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-11-27"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-11-28"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-11-29"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-11-30"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-11-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-11-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-tue fc-today fc-state-highlight" data-date="2019-11-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-11-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-11-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-11-30"><span class="fc-day-number">30</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 126px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2019-12-01"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-12-02"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-12-03"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-12-04"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-12-05"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-12-06"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-12-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2019-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-12-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div></div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
	@endsection

      </div>
    </div>

    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title2" name="title2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- FullCalendar -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

 </body>
</html>