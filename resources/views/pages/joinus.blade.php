@extends('frontends.index')

@section('title')
    <title>May Myanmar | Join Us</title>
@endsection
@section('content')
	<!-- page navigator start -->
	<div class="container-fluid page_navigator_fluid">
		<div class="container page_navigator_container">
			<div class="row page_navigator_row">
				<div class="page_navigator_col">
					<ol class="breadcrumb col-md-12">
						<li><a href="\">Home</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						<li><a href="#">Join Us</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	
	<div class="container-fluid maincontents maincontent_fluid">
	   <!-- joinus_container start -->
	   <div class="container joinus_container">
	   		<!-- joinus_row #1 start -->
			<div class="row joinus_row">
				<div class="col-md-12 content_title_col joinus_title_col">
	   				<h2 class="text-uppercase content_title joinus_title" ><strong>Job Seekers</strong> </h2>
	   			</div>
	   			<div class="col-md-12 col-sm-12 col-xs-12">
	   				<p class="text-justify">
	   					We are always on the lookout for professionals to join our teams across the region. If you are interested in pursuing a career with us, please send us an email and submit it to jeleel@maymyanmar.com.sg, enclosing your full curriculum vitae and a recent photograph together with details of your current remuneration, expected salary and contact telephone number. <br><br><br>
	   					<strong class="text-blue" style="display:inline-block;font-size: 1.2em;padding: 5px 0 5px 0;">Salary will commensurate with experience and qualifications.</strong><br>
	   					(Only shortlisted candidates will be notified)<br><br>
	   					<strong class="text-blue" style="display:inline-block;font-size: 1.2em;padding: 5px 0 5px 0;">At May Manpower, we specialise in recruitment services for the following job positions:</strong><br>
	   				</p>
	   				<div class="row">
	   					<div class="col-md-3">
	   						<div class="row">
	   							<div class="col-md-12 text-center">
	   								<img src="{{asset('images/joinus/joinus_03.png')}}" class="img-responsive" style="margin: 0px auto;">
	   							</div>
	   							<div class="col-md-12 text-center">
	   								<h5 >Human Resources Jobs</h5>
	   							</div>
	   						</div>
	   					</div>

	   					<div class="col-md-3">
	   						<div class="row">
	   							<div class="col-md-12 text-center">
	   								<img src="{{asset('images/joinus/joinus_03.png')}}" class="img-responsive" style="margin: 0px auto;">
	   							</div>
	   							<div class="col-md-12 text-center">
	   								<h5 >Human Resources Jobs</h5>
	   							</div>
	   						</div>
	   					</div>

	   					<div class="col-md-3">
	   						<div class="row">
	   							<div class="col-md-12 text-center">
	   								<img src="{{asset('images/joinus/joinus_07.png')}}" class="img-responsive" style="margin: 0px auto;">
	   							</div>
	   							<div class="col-md-12 text-center">
	   								<h5 >Human Resources Jobs</h5>
	   							</div>
	   						</div>
	   					</div>

	   					<div class="col-md-3">
	   						<div class="row">
	   							<div class="col-md-12 text-center">
	   								<img src="{{asset('images/joinus/joinus_09.png')}}" class="img-responsive" style="margin: 0px auto;">
	   							</div>
	   							<div class="col-md-12 text-center">
	   								<h5 >Human Resources Jobs</h5>
	   							</div>
	   						</div>
	   					</div>
	   				</div>
	   			</div>
			</div>
			<!-- joinus_row #1 end -->
	   </div>
	    <!-- joinus_container end -->
	</div>
	<div class="container-fluid faq_full_img_container" style="margin-top: 150px;"></div>
	<div class="container-fluid partner_container_fluid">
		<div class="container">
			@include('frontends.partner')
		</div>
	</div>
@endsection

