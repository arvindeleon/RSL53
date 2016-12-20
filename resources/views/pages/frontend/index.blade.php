@extends('layouts.frontend')

@section('title')
Home
@endsection

@section('home_script')

@endsection

@section('content')
	<div class="jumbotron" id="app">
	  <h1>Hello, {{Auth::user()->username}}!</h1>
	  <p>@{{msg}}</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>
@endsection

@section('footer_script')
<script type="text/javascript">
$(document).ready(function(){
	console.log('index footer ready!');
});
</script>
@endsection