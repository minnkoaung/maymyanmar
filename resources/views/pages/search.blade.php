@extends('frontends.index')

@section('title')
    <title>May Myanmar | Search Helper</title>
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
				<li><a href="#">Search</a></li>
			</ol>
		</div>
			</div>
		</div>
	</div>
	<!-- page navigator end -->
	
	<div class="container-fluid maincontents maincontent_fluid">
	   <div class="container search_maid_container">
	   	@include('frontends.search_sidebar')
	   	@include('frontends.biodata')
	   </div>
	</div>
@endsection
@section('image_script')
 <script>
		jQuery(document).ready(function($) {
		///HOME PAGE - image resizing
	    function imageLoaded() {
	       var w = $(this).width();
	       var h = $(this).height();
	       var parentW = $(this).parent().width();
	       var parentH = $(this).parent().height();
	       console.log(w + '-' + h + '-' + parentW + '-' + parentH);
	       //if (w >= parentW){ //always true because of CSS
		       if (h > parentH){
			       $(this).css('top', -(h-parentH)/2);
		       } else if (h < parentH){
			       $(this).css('height', parentH).css('width', 'auto');
			       $(this).css('left', -($(this).width()-parentW)/2);
		       }
	       //}
	    }
	    $('.tumbnail_img_wrapper img').each(function() {
	        if( this.complete ) {
	            imageLoaded.call( this );
	        } else {
	            $(this).one('load', imageLoaded);
	        }
	    });
	});
	</script>
@endsection