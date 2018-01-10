@extends('frontends.index')

@section('title')
    <title>May Myanmar | Search Helper</title>
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
						<li><a href="#">Services</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	
	<div class="container-fluid maincontents maincontent_fluid">
	   <!-- services_container start -->
	   <div class="container services_container">
	   		<!-- services_row start -->
			<div class="row services_row">
				<div class="col-md-12 content_title_col services_title_col">
	   				<h2 class="text-uppercase content_title services_title" ><strong>Services</strong></h2>
	   			</div>
	   			<div class="col-md-6 service_pic_sec">
	   				<img src="{{ asset('images/services/service_img_03.jpg')}}" class="img-responsive" alt="May Myanmar Services images">
	   			</div>
	   			<div class="col-md-6 services_text_sec">
	   				<div class="row services_text_sec_row">
	   						<div class="col-md-12 services_text_sec_col">	
								<h4 class="text-blue"><strong>Professionl Services</strong></h4>
								<p class="text-justify">
										May Manpower is committed to render our customers with excellent professional service. Our positive track record is an indication of the high standards we set for ourselves as well as our workforce to bringyou the best possible service. Hundreds of famillies have benefited from our experienced domestic help.
								</p>
	   						</div>	
	   						<div class="col-md-12 services_text_sec_col">	
								<h4 class="text-blue"><strong>Our Commitment to Quality Service</strong></h4>
								<p class="text-justify">
										We pledge to be the best we can be. We strive for excelience, take ownership and deliver what we promise.
								</p>
	   						</div>	
	   						<div class="col-md-12 services_text_sec_col">	
								<h4 class="text-blue"><strong>Our Service Standards</strong></h4>
								<p class="text-justify">
										We have teams and individuals who can respond quickly to customer requirement in any circumstances, whatever they are. May Manpower team is fully and visibly engaged in customer services.
								</p>
	   						</div>	
	   				</div>
	   			</div>
			</div>
			<!-- services_row end -->	
	   </div>
	    <!-- services_container end -->
	    <!-- ourvalue start -->
	    <div class="container ourvalue">	
			<!-- ourvalue_row start #1-->
			<div class="ourvalue_row row">
				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_02.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description">
                            <img class="gallery-img" src="{{asset('images/services/service_img_02.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Eldercare</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_08.jpg')}}" data-lightbox="example-set" data-title="High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_08.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Eldercare</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_10.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description | High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_10.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Quality Service</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_12.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description | High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_12.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Quality Service</p>
						</div>
					</div>
				</div>
			</div>
			<!-- ourvalue_row #1end -->
			<!-- ourvalue_row #2start  -->
			<div class="ourvalue_row row">
				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_30.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description">
                            <img class="gallery-img" src="{{asset('images/services/service_img_30.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Professional Services</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_31.jpg')}}" data-lightbox="example-set" data-title="High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_31.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Professional Services</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_32.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description | High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_32.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Quality Service</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_19.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description | High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_19.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase"> Service Standards</p>
						</div>
					</div>
				</div>
			</div>
			<!-- ourvalue_row #2end -->

			<!-- ourvalue_row #3start -->
			<div class="ourvalue_row row">
				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_23.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description">
                            <img class="gallery-img" src="{{asset('images/services/service_img_23.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Dedicated Services</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_32.jpg')}}" data-lightbox="example-set" data-title="High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_32.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Reliable Solutions</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_33.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description | High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_33.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Nursing Aid</p>
						</div>
					</div>
				</div>

				<div class="col-md-3 ourvalue_col">
					<div class="row ourvalue_col_row">
						<div class="col-md-12 ourvalue_inside_col">
							<a class="gallery-img-link" href="{{asset('images/services/service_img_29.jpg')}}" data-lightbox="example-set" data-title="The Sample Image Description | High Resolution Image will Provide Later">
                            <img class="gallery-img" src="{{asset('images/services/service_img_29.jpg')}}" alt="Sample Caption" class="img-responsive gallery_img">    
                            </a>
						</div>	
						<div class="col-md-12 ourvalue_inside_col ourvalue_caption">
							<p class="text-center text-uppercase">Eldercare</p>
						</div>
					</div>
				</div>
			</div>
			<!-- ourvalue_row end -->


	    </div>
	    <!-- ourvalue end -->
	</div>
@endsection
@section('lightbox_script')
 <script src="{{asset('lightbox2/js/lightbox.min.js')}}"></script>
@endsection
