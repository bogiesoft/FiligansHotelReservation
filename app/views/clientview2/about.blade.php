@extends('layout.master2')
@section('controller')
homeController
@stop
@section('style')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@stop
@section('content')
<style type="text/css">
	p {
    text-indent: 50px;
}

</style>
<div class="row" style='padding:10px'>
	<h2 style="font-family: 'Oswald', sans-serif;">About us</h2>
	<hr style='border-top:2px solid #d8d8d8;'>
	
	<h2 style='font-family:Open Sans'>

		<span style='color:Green'>Giligans</span> Restaurant
	</h2>
	<p>
		You wouldn’t want to miss out the chance to eat delicious, tasty and really affordable food in this trendy restaurant that serves all-time favorite and mouth-watering dishes like sizzling sisig, fried garlic chicken and many more. If you’re dining in a group…make sure you take advantage of their   “Groupies”  that offers a lot of goodies with a lot of savings!
	</p>
	<h2 style='font-family:Open Sans'>

		<span style='color:Green'>As a theme</span> Restaurant
	</h2>
	<p>
		Giligan’s greatly invest on their interior design & decoration following a marineinspired theme. Most artwork is actually hand-picked and collections from travels abroad and some are collection of antiques. Ropes overhead slinged across the ceiling, authentic ship’s wheel by the entrance & old lanterns by the bar, antique maps framed and displayed by the wall together with miniature sailing ships, lighthouses, pirates & captains, and antique old ships, as well as encased nautical navigational instruments. It’s almost like you’re in a marine/nautical museum when you are at Giligan’s. Truly unique & interesting!
	</p>
		<p>

		Gilligan’s pride themselves in providing good food that is reasonably priced with an outstanding quality in mind to please every discerning patron. Matched with good service, the food alone is a must to try! It’s a family oriented restaurant that turns into a chill out place late at night. With 21 branches just ready to serve you. That’s a lot of places you can easily find them in…so come embark on a voyage aboard the Giligan’s restaurant.
	</p>
</div>
@stop
@section('scripts')
<script type="text/javascript">
	angular.module('giligansApp', [], function($interpolateProvider){
		$interpolateProvider.startSymbol('[[');
		$interpolateProvider.endSymbol(']]');
	}).controller('homeController', ['$scope', function($scope){
	//	alert('hey')
}])
</script>
@stop