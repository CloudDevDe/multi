<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BasisApp</title>

        <!-- bootstrap 3.0.2 -->
        <link href="{{ url('adminlte/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{ url('adminlte/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{ url('adminlte/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ url('adminlte/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ url('adminlte/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- DataTable -->
		<link href="{{ url('adminlte/css/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- ColorBox -->
        <link rel="stylesheet" href="{{asset('assets/css/colorbox.css')}}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{asset('assets/js/select2/select2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/js/select2/select2-bootstrap.css')}}">
        <!-- Theme style -->
        <link href="{{ url('adminlte/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

        <style>
            .breadcrumb {margin-bottom: 0}
        </style>

        @yield('styles')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                BasisApp
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                @if(Auth::check()) 
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                    	<li class="dropdown user user-menu">
                    		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    			<span class="glyphicon glyphicon-user"></span> {{ Auth::user()->username }} <span class="caret"></span>
                    		</a>
                    		<ul class="dropdown-menu">
                    			<!-- User image -->
                    			<li class="user-header bg-light-blue">
                    				
                    				<p>
                    					Beispiel Benutzer
                    				</p>
                    			</li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-12 text-center">
                                        <a href="{{ URL::to('logout') }}"><span class="fa fa-sign-out"></span>Abmelden</a>
                                    </div>
                                </li>
                    		</ul>
                    	</li>
                    </ul>
                </div>
                @endif
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        
                    </div>
                    <ul class="sidebar-menu">
    					<li>
    						<a href="{{ URL::to('/') }}"><span class="fa fa-dashboard"></span> Dashboard</a>
    					</li>
                        <li>
                            <a href="{{ URL::to('users') }}"><span class="fa fa-users"></span> Benutzer</a>
                        </li>
                     </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <section class="content-header">
                    <!-- Content Header (Page header) -->
                    <h1>
                        @yield('title')
                        <small>@yield('description')</small>
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">

                	<!-- Content -->
                	@yield('content')
                	<!-- ./ content -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <script src="{{ url('adminlte/js/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="{{ url('adminlte/js/jquery-ui-1.10.3.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ url('adminlte/js/bootstrap.min.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ url('adminlte/js/plugins/jqueryKnob/jquery.knob.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ url('adminlte/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ url('adminlte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ url('adminlte/js/plugins/iCheck/icheck.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ url('adminlte/js/plugins/input-mask/jquery.inputmask.js') }}"></script>
        <script src="{{ url('adminlte/js/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
        <script src="{{ url('adminlte/js/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
		<!-- DataTables -->
	    <script src="{{asset('assets/js/datatables.min.js')}}"></script>
	    <script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
	    <script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('assets/js/select2/select2.min.js')}}"></script>
	    <!-- ColorBox -->
	    <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
        <script src="{{asset('assets/js/prettify.js')}}"></script>
        <!-- DatePicker -->
        <link rel="stylesheet" href="{{asset('assets/js/datepicker/css/datepicker.css')}}">
        <script src="{{asset('assets/js/datepicker/js/bootstrap-datepicker.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('adminlte/js/AdminLTE/app.js') }}"></script>

        @yield('scripts')

	    <script type="text/javascript">
    	$('.wysihtml5').wysihtml5();
        $(prettyPrint);

        $(document).ready(function() {
            // select2 style
            $('.select2').select2();

            // dataTables bootstrap style
            $('.dataTables_length select').select2({width: 80})
            $('.dataTables_filter input').addClass('form-control')

            // inputmask
            $(".inputmask").inputmask();

            //Date range picker
            $('.daterange').daterangepicker();
            // Date picker
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            // add blue bg on header
            $('.dataTable th').addClass('bg-blue');

        });
	    </script>
    </body>
</html>