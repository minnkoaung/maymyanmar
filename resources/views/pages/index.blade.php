@extends('frontends.index')

@section('title')
    <title>May Myanmar</title>
@endsection

@section('content')
	@include('frontends.hero')
	<div class="container-fluid maincontents maincontent_fluid">
	    	@include('frontends.welcome')
	    	@include('frontends.partner')
	</div>
@endsection