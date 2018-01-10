@extends('frontends.index')

@section('title')
    <title>May Myanmar | Contact Us</title>
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
						<li><a href="#">Contact Us</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	
	<div class="container-fluid maincontents maincontent_fluid">
	   <!-- contactus_container start -->
	   <div class="container contactus_container">
	   		<!-- contactus_row #1 start -->
			<div class="row contactus_row">
				<div class="col-md-12 content_title_col contactus_title_col">
	   				<h2 class="text-uppercase content_title contactus_title" ><strong>Contact Us</strong> </h2>
	   			</div>
	   			<div class="col-md-6 col-sm-6 col-xs-12">
	   				<p class="">
	   					<strong class="text-blue" style="display:inline-block;font-size: 1.2em;padding: 5px 0 5px 0;">Bukit Timah Branch</strong><br><br>
	   					170 Upper Bukit Timah Rd, #01-43 Bukit Timah Shopping Centre,<br> Singapore 588179 <br><br>
	   					6891 2252 / 6891 2262 <br><br>
	   					<a href="">maymyanmarservices@gmail.com </a>
	   				</p>
	   				<div class="row">
	   					<div class="col-md-12">
	   						<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=103.77420544624329%2C1.342046610151584%2C103.77774596214294%2C1.3445162457770832&amp;layer=mapnik&amp;marker=1.343280087540402%2C103.77597570419312" style="border: 1px solid black"></iframe>
	   					</div>
	   				</div>
	   			</div>
	   			<div class="col-md-6 col-sm-6 col-xs-12">
	   				<p class="">
	   					<strong class="text-blue" style="display:inline-block;font-size: 1.2em;padding: 5px 0 5px 0;">Katong Branch</strong><br><br>
	   					865 Mountbatten Rd, #02-70/71/72 Katong Shopping Centre,<br> Singapore 437844 <br><br>
	   					6440 5354 / 6440 4454 / 6440 4456  <br><br>
	   					<a href="">khinzaw@maymyanmar.com.sg</a>
	   				</p>
	   				<div class="row">
	   					<div class="col-md-12">
	   						<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=103.89670193195344%2C1.3013656443933408%2C103.90566051006319%2C1.3063049942111513&amp;layer=mapnik&amp;marker=1.3038326389991166%2C103.9011812210083" style="border: 1px solid black"></iframe><br/>
	   					</div>
	   				</div>
	   			</div>
			</div>
			<!-- contactus_row #1 end -->
			<br><br>
			<!-- contactus_row #2 start -->
			<div class="row contactus_row">
				<div class="col-md-12 content_title_col contactus_title_col">
	   				<h4 class="text-uppercase content_title contactus_title text-blue" ><strong>Get In Touch</strong> </h4>
	   			</div>
	   			<div class="col-md-12">
	   				<form action="" method="" class="contact_form">
					   <div class="form-group contact_form_group">
					    <input type="text" class="form-control" id="name" placeholder="Your Name" >
					  </div>
					  <div class="form-group contact_form_group">
					    <input type="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group contact_form_group">
					    <textarea class="form-control" rows="10"></textarea>
					  </div>
  						<a href="" class="btn view_detail_btn">Send Message</a>  
					</form>
	   			</div>
			</div>
			<!-- contactus_row #2 end -->
			
			
			
			<!-- training_row #2 start -->
			<div class="row testimonial_row">
				<div class="col-md-12 testimonial_inside_col">
					<div class="row testimonial_inside_row">
						<div class="col-md-12 ojt testimonial">
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

