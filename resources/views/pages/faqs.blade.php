@extends('frontends.index')

@section('title')
    <title>May Myanmar | FAQs</title>
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
						<li><a href="#">FAQs</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	<div class="container-fluid maincontents maincontent_fluid">
	   <!-- faqs_container start -->
	   <div class="container faqs">
	   	<div class="row faqs_rows">
	   		<div class="col-md-12 content_title_col faqs_title_col">
	   				<h2 class="text-uppercase content_title testimonial_title" ><strong>General Questions</strong> </h2>
	   		</div>
	   		<div class="col-md-12 content_title_col faqs_text_col">
	   			<div class="panel-group" id="accordion">
        			<!-- <div class="faqHeader">General questions</div> -->
			        <div class="panel panel-default">
			            <div class="panel-heading faq_panel_heading">
			                <h4 class="panel-title">
			                    <a class="accordion-toggle faq_question text-uppercase text-blue " data-toggle="collapse" data-parent="#accordion" href="#q1"> What is a security bond?</a>
			                </h4>
			            </div>
			            <div id="q1" class="panel-collapse collapse in">
			                <div class="panel-body">
			                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                    consequat.
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default">
			            <div class="panel-heading faq_panel_heading">
			                <h4 class="panel-title">
			                    <a class="accordion-toggle faq_question text-uppercase text-blue " data-toggle="collapse" data-parent="#accordion" href="#q2"> When to get bond?</a>
			                </h4>
			            </div>
			            <div id="q2" class="panel-collapse collapse">
			                <div class="panel-body">
			                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                    consequat.
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default">
			            <div class="panel-heading faq_panel_heading">
			                <h4 class="panel-title">
			                    <a class="accordion-toggle faq_question text-uppercase text-blue " data-toggle="collapse" data-parent="#accordion" href="#q3"> When will the bond be discharge?</a>
			                </h4>
			            </div>
			            <div id="q3" class="panel-collapse collapse">
			                <div class="panel-body">
			                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                    consequat.
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default">
			            <div class="panel-heading faq_panel_heading">
			                <h4 class="panel-title">
			                    <a class="accordion-toggle faq_question text-uppercase text-blue " data-toggle="collapse" data-parent="#accordion" href="#q4"> When will the bond be Forfeited?</a>
			                </h4>
			            </div>
			            <div id="q4" class="panel-collapse collapse">
			                <div class="panel-body">
			                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                    consequat.
			                </div>
			            </div>
			        </div>
    			</div>
	   		</div> 
	   		<!-- faqs_text_col  end -->
	   	</div>
	   </div>
	   <!-- faqs_container end -->
	</div>
	<div class="container-fluid faq_full_img_container"></div>
	<div class="container-fluid partner_container_fluid">
		<div class="container">
			@include('frontends.partner')
		</div>
	</div>
@endsection