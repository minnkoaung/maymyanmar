@extends('frontends.index')

@section('title')
    <title>May Myanmar | Training</title>
@endsection

@section('css')
		<link href="{{ asset('lightbox2/css/lightbox.min.css')}}" rel="stylesheet" />
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
						<li><a href="#">Training</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	
	<div class="container-fluid maincontents maincontent_fluid">
	   <!-- training_container start -->
	   <div class="container training_container">
	   		<!-- training_row #1 start -->
			<div class="row training_row">
				<div class="col-md-12 content_title_col training_title_col">
	   				<h2 class="text-uppercase content_title training_title" ><strong>Training</strong></h2>
	   			</div>
	   			<div class="col-md-6 training_pic_sec">
	   				<img src="{{ asset('images/training/training_03.png')}}" class="img-responsive" alt="May Myanmar Training images">
	   			</div>
	   			<div class="col-md-6 training_sec">
	   				<div class="row training_sec_row">
	   						<div class="col-md-12 training_sec_col nusing_aid_sec">	
								<h4 class="text-blue nusing_aid_sec_title"><strong>Nursing Aid & Caregiver Competency Training</strong></h4>
								<p class="text-justify nusing_aid_sec_title_text">
									<ul class="fa-ul nusing_aid_sec_ul">
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Nursing Aid & Caregiver Competency Training</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Managing senior-related chronic conditions like diabetes</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Communicating with seniors</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Maintaining a clean environment</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Assisting the senior with toileting, caring for their skin, feeding, moving about safely, grooming and dressing</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Preparing nutritious meals for seniors</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Helping the senior with simple activities, exercises, and preventing falls</li>
										<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Helping seniors with their medications and providing basic first aid </li>
									</ul>
								</p>
	   						</div>	
	   				</div>
	   			</div>
			</div>
			<!-- training_row #1 end -->
			<!-- training_row #2 start -->
			<div class="row training_row training_row2">
				<div class="col-md-12 training_inside_col">
					<div class="row training_inside_row">
						<div class="col-md-12 training_inside_title_col">
							<h4 class="text-blue nusing_aid_sec_title our_attribution_title"><strong>We attribute our success to the following:</strong></h4>
						</div>
						<div class="col-md-6 our_attribution">
							<p class="our_attribution_text">
								<ul class="fa-ul nusing_aid_sec_ul">
												<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>We understand the importance of finding the right professional helper for your home.</li>
												<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>We make it a priority to understand the individual needs of every home before we begin a search for possible candidates.</li>
												<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>We develop and maintain outstanding employer to employee rapport to ensure a pleasant and professional working relationship.</li>
								</ul>
							</p>
						</div>
						<div class="col-md-6 our_attribution">
							<p class="our_attribution_text text-justify">
								<ul class="fa-ul nusing_aid_sec_ul">
												<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>We focus on selecting the perfect candidate by thorough interviewing, including communicating with previous employers.</li>
												<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>We make it a priority to understand the individual needs of every home before we begin a search for possible candidates</li>
												<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>We develop and maintain outstanding employer to employee rapport to ensure a pleasant and professional working relationship.</li>
								</ul>
							</p>
						</div>
						
					</div>
				</div>

			</div>
			<!-- training_row #2 end -->
			
			<!-- training_row #3 start -->
			<div class="row training_row">
				<div class="col-md-12 training_inside_col">
					<div class="row training_inside_row">
						<div class="col-md-12 training_inside_img_col">
							<img src="{{asset('images/training/training_07.png')}}" class="img-responsive" style="width: 100%;height: auto;" alt="">
						</div>
						<div class="col-md-12 dedicated_title_col">
							<h4 class="text-blue nusing_aid_sec_title our_attribution_title"><strong>Dedicated Services</strong></h4>
						</div>
						<div class="col-md-12 dedicated">
							<p class="dedicated_text text-justify">
								Our positive track record is an indication of the high standards we set for ourselves as well as our workforce to bring you the best possible service. Hundreds of families have benefited from our experienced domestic helpers.
							</p>
						</div>
						<div class="col-md-12 ojt_title_col">
							<h4 class="text-blue nusing_aid_sec_title our_attribution_title"><strong>On-the-Job Domestic Training Centres</strong></h4>
						</div>
						<div class="col-md-12 ojt">
							<p class="ojt_text">
								May Manpower has our partnered with competent training centres located in following locations:
								<br>
								<ul class="fa-ul ojt_ul">
									<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Yangon, Myanmar</li>
									<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Jakarta, Indonesia</li>
									<li><i class="fa-li fa fa-check text-blue" aria-hidden="true"></i>Surabaya, Indonesia</li>
								</ul>
							</p>
							<img src="{{asset('images/training/training_15.png')}}" class="pull-right img-responsive" style="" alt="">
						</div>
					</div>
				</div>
			</div>
			<!-- training_row #3 end -->
			@include('frontends.partner')
	   </div>
	    <!-- training_container end -->
	</div>
@endsection
@section('lightbox_script')
 <script src="{{asset('lightbox2/js/lightbox.min.js')}}"></script>
@endsection
