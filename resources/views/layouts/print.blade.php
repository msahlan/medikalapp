<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	
	<link rel="shortcut icon" href="images/favicon.png">
	<title>RS Kartika Husada</title>

    

    <!-- Global stylesheets -->
    
    
    <!-- /global stylesheets -->

    {{ HTML::style('font-awesome/css/font-awesome.css') }}
    {{ HTML::style('css/blueimp-gallery.min.css') }}


    <!-- Core JS files -->
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/ui/drilldown.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/ui/fab.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->

    <script src="{{ url('makeadmin')}}/assets/global/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>

    <!-- moment.js (date library) -->
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/ui/moment/moment.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/core/app.js"></script>
    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/pages/datatables_advanced.js"></script>

    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/ui/ripple.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/core/libraries/jasny_bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless') }}/assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/pickers/pickadate/legacy.js"></script>


    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>

    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/notifications/pnotify.min.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/pages/form_bootstrap_select.js"></script>

    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/pages/form_multiselect.js"></script>
    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/plugins/forms/inputs/formatter.min.js"></script>


    <script type="text/javascript" src="{{ url('limitless')}}/assets/js/pages/form_layouts.js"></script>
	
	<link href="{{url('polo')}}/vendor/animateit/animate.min.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="{{url('polo')}}/css/theme-base.css" rel="stylesheet">
	<link href="{{url('polo')}}/css/theme-elements.css" rel="stylesheet">	
	<link href="{{url('polo')}}/css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->		
	<link href="{{url('polo')}}/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">
	
    <link rel="stylesheet" type="text/css" href="{{url('polo')}}/css/custom.css" media="screen" />
    <script src="{{url('polo')}}/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="{{url('polo')}}/vendor/plugins-compressed.js"></script>
</head>
<body>
	<style type="text/css">
        body {
            font-family: Calibri, Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 11px !important;
            line-height: 1.5384616;
            color: black !important;
            background-color: white !important;
        }
        .input-sm {
            height: 30px;
            padding: 7px 14px;
            font-size: 10px;
            line-height: 1.6666667;
            border-radius: 2px;
        }

        input.input-sm.filter{
            height: 30px;
            padding: 7px 4px;
            font-size: 10px;
            line-height: 1.6666667;
            border-radius: 0px;
            background-color: azure;
        }

        input.input-sm.daterangespicker{
            border-radius: 0px;
            background-color: whitesmoke;
        }

        .pagination > li > a,
        .pagination > li > span {
            min-width: 26px;
            padding: 4px;
            text-align: center;
            border-width: 0;
        }
        .page-title {
            padding: 28px 36px 28px 0;
            display: block;
            position: relative;
        }

        .panel .btn{
            font-size: 11px !important;
             padding: 6px 10px !important;
        }

        .navbar-nav-material > li > a {
            text-transform: uppercase;
            font-size: 11px;
            position: relative;
            font-weight: 500;
        }
        .dropdown-menu {
            font-size: 11px !important;
        }

        [class^="icon-"], [class*=" icon-"] {
            font-size: 14px !important;
        }

        .heading-btn-group [class^="icon-"],
        .heading-btn-group [class*=" icon-"] {
            font-size: 24px !important;
        }

        #navbar-second [class^="icon-"],
        #navbar-second [class*=" icon-"] {
            font-size: 17px !important;
        }

        .table > thead > tr > th,
        .table > tbody > tr > th,
        .table > tfoot > tr > th,
        .table > thead > tr > td,
        .table > tbody > tr > td,
        .table > tfoot > tr > td {
            padding: 4px 4px;
            line-height: 1.5384616;
            vertical-align: middle;
            border-top: 1px solid #ddd;
        }

        .table-bordered-black {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .table-bordered-black td{
            border-bottom: 1px solid black;
        }

        .table-bordered-black th{
            border-bottom: 1px solid black;
            border-right: 1px solid black;
        }

        .img-circle{
            border-radius: 50%;
        }

        .avatar{
            height: 30px;
            width: 30px;
        }

        .logo{
            height: 70px;
            width: auto;
        }

        .small-help{
            font-size: 0.95em;
            display: block;
            text-align: right;
        }

        .bigger-text{
            font-size: 1.4em !important;
        }

        .table td .b-container{
            display: table-cell;
            float: left;
            height: 100%;
            vertical-align: middle;
        }

        .modal-dialog td{
            padding-top: 6px !important;
            padding-bottom: 6px !important;
        }

        .modal-dialog hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 5px solid #999;
        }

        .single-underline{
            border-bottom: 1px solid black;
        }

        .bolder-underline{
            border-bottom: 2px solid black;
        }

        .double-underline{
            border-bottom-width: 4px !important;
            border-bottom-color: black !important;
            border-bottom-style: double !important;
        }

        .double-overline{
            border-top-width: 4px !important;
            border-top-color: black !important;
            border-top-style: double !important;
        }

        .double{
            border-width: 4px !important;
            border-color: black !important;
            border-style: double !important;
        }

        .bolder{
            font-weight: 900;
            font-size: 12px;
        }

        .modal-dialog input.bolder{
            font-weight: 900;
            font-size: 12px;
        }

        h4,h5,h6{
            font-weight: 700;
        }

        hr{
            border-top: 3px solid black;
        }

        input.auto-user,input.auto-employee-id{
            background-color: aliceblue !important;
        }

        label{
            font-weight: 700;
            font-size: 12px;
        }

        .center{
            text-align: center !important;
        }

        .right{
            text-align: right !important;
        }

        .left{
            text-align: left !important;
        }

        .bold{
            font-weight: bold !important;
        }

        .font14{
            font-size: 14px;
        }

        .font12{
            font-size: 12px;
        }

        .font11{
            font-size: 11px;
        }

        .font10{
            font-size: 10px;
        }

        label.control-label{
            margin-top:8px;
        }

        .border-bottom{
            border-bottom: 1px solid black;
        }

        .border-right{
            border-right: 1px solid black;
        }

    </style>
    <style type="text/css">
    .emp-data th{
        max-width: 120px;
        width: 120px;
    }

    .lv-data th{
        max-width: 130px;
        width: 130px;
        border-top: none !important;
    }

    .lv-data td.amt{
        border-top: none !important;
        max-width: 130px;
        width: 130px;
    }

    .lv-data td.days{
        border-top: none !important;
        max-width: 35px !important;
        width: 35px !important;
    }

    .lv-data td{
        padding-top: 4px;
        padding-bottom: 4px;
    }

    .contact-data th.data{
        min-height: 45px;
        height:45px;
    }
    td{
    	border: 1px solid #dddddd;
    }
    th{
    	border: 1px solid #dddddd;
    	background-color: #5bc0de;
    }



</style>

     <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                

		      @yield('content')

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
	
 <script src="{{url('polo')}}/js/theme-functions.js"></script>

	<script src="{{url('polo')}}/js/custom.js"></script>
               
</body>
</html>
                        
       