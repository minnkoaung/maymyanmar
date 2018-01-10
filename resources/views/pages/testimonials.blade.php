@extends('frontends.index')

@section('title')
    <title>May Myanmar | Testimonials</title>
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
						<li><a href="#">Testimonials</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	
	<div class="container-fluid maincontents maincontent_fluid">
	   <!-- testimonial_container start -->
	   <div class="container testimonial_container">
	   		<!-- testimonial_row #1 start -->
			<div class="row testimonial_row">
				<div class="col-md-12 content_title_col testimonial_title_col">
	   				<h2 class="text-uppercase content_title testimonial_title" ><strong>testimonial <small>Our Clients Say</small></strong> </h2>
	   			</div>
	   			<div class="col-md-4 col-sm-6 col-xs-12">
	   				<p class="text-center testimonial_text">
	   					<strong class="text-blue" style="display:inline-block;font-size: 1.5em;padding: 5px 0 5px 0;">Mdm Wong T. ,Pasir Ris Close</strong><br>
	   					It is simply the team's extraordinary commitment to excellence in customer service and always go the extra mile in matching the right candidate meeting requirement.
	   				</p>
	   				 <div class="row star_rating_row">
					    <div class="col-md-12 text-center">
					      <div class="star-rating">
					        <span class="fa fa-star" data-rating="1"></span>
					        <span class="fa fa-star" data-rating="2"></span>
					        <span class="fa fa-star" data-rating="3"></span>
					        <span class="fa fa-star" data-rating="4"></span>
					        <span class="fa fa-star-o" data-rating="5"></span>
					        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
					      </div>
					    </div>
  					</div>  
	   			</div>
	   			<div class="col-md-4 col-sm-6 col-xs-12">
	   				<p class="text-center testimonial_text">
	   					<strong class="text-blue" style="display:inline-block;font-size: 1.5em;padding: 5px 0 5px 0;">Mr Shanker K.,West Coast Drive</strong><br>
	   					We are very impressed with the obvious professionalism that you are rendering all this while. Your fast and prompt attention to our needs is highly commendable.
	   				</p>
	   				 <div class="row star_rating_row">
					    <div class="col-md-12 text-center">
					      <div class="star-rating">
					        <span class="fa fa-star" data-rating="1"></span>
					        <span class="fa fa-star" data-rating="2"></span>
					        <span class="fa fa-star" data-rating="3"></span>
					        <span class="fa fa-star" data-rating="4"></span>
					        <span class="fa fa-star-o" data-rating="5"></span>
					        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
					      </div>
					    </div>
  					</div>  
	   			</div>
	   			<div class="col-md-4 col-sm-6 col-xs-12">
	   				<p class="text-center testimonial_text">
	   					<strong class="text-blue " style="display:inline-block;font-size: 1.5em;padding: 5px 0 5px 0;">Mr Alex Tan, Bukit Timah</strong><br>
	   					We would also like to commend your good service rendered to our family and going the extra mile on service and matching our requirement.
	   				</p>
	   				 <div class="row star_rating_row">
					    <div class="col-md-12 text-center">
					      <div class="star-rating">
					        <span class="fa fa-star" data-rating="1"></span>
					        <span class="fa fa-star" data-rating="2"></span>
					        <span class="fa fa-star" data-rating="3"></span>
					        <span class="fa fa-star" data-rating="4"></span>
					        <span class="fa fa-star-o" data-rating="5"></span>
					        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
					      </div>
					    </div>
  					</div>  
	   			</div>
			</div>
			<!-- testim_row #1 end -->
			<!-- testimonial_row #2 start -->
			<div class="row testimonial">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<a href="#"><img src="{{asset('images/testimonials/testimonials_07.png')}}" alt="May Myanmar Testimonial" class="img-responsive"></a>
						</div>
						<div class="col-md-6">
							<a href="#"><img src="{{asset('images/testimonials/testimonials_09.png')}}" alt="May Myanmar Testimonial" class="img-responsive"></a>
						</div>
						<div class="col-md-6">
							<a href="#"><img src="{{asset('images/testimonials/testimonials_14.png')}}" alt="May Myanmar Testimonial" class="img-responsive"></a>
						</div>
					</div>
				</div>
			</div>
			<!-- testimonial_row #2 end -->
			
			
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
@section('lightbox_script')
 <script src="{{asset('lightbox2/js/lightbox.min.js')}}"></script>
@endsection
@section('star_rating')
<script>

/*  Open this commet to get rateable stars
var $star_rating = $('.star-rating .fa');
var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {
});
*/
</script>
@endsection
