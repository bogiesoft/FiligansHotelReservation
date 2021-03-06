@extends('layout.admin2')
@section('controller')
indexCtrl
@stop
@section('styles')
{{ HTML::style('admin/asset/css/chart/chart.css') }}
@stop
@section('initializeData')
<input type='hidden' ng-init='profit_today = "{{ $profit_today }}"'>
@stop
@section('content')
<div class="page-header" style='margin-top:-20px'>
	<h2 style='font-family:Open Sans;'>Dashboard</h2>
</div>
<ol class="breadcrumb">
	<li>
		<a href="#">Dashboard</a>
	</li>
	
	<li class="active">Index</li>
</ol>

<div class="row">
	
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<h3>Recent Bookings <a href='{{ URL::to("adminsite/booking") }}' class="btn btn-xs btn-info">view all</a> <a href='{{ URL::to("adminsite/monitoring") }}' class="btn btn-xs btn-success">Go to live monitoring system</a></h3> 
		<table class="table table-hover table-bordered  table-striped">
			<thead>
				<tr>
					<th>#</th>
					
					<th>R. Code</th>
					
					<th>Check-in</th>
					<th style='width:50px;'>No. of nights</th>
					<th>status</th>
					<th>Created at</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				$today_profit = null;
				?>
				@foreach($booking_recent as $b)
				<?php
				$nights = $b->check_out->diffInDays($b->check_in)+1;
				$today_profit+=$b->price;
				?>
				<tr>
					<td> {{$b->id}} </td>
					<td> {{{ $b->code }}}</td>
					<td>{{ $b->check_in->toFormattedDateString()  }}</td>
					<td style="text-align:center"> {{ $nights }} </td>
					<td>
						@if($b->status==1)
						<span class="label label-success">Paid</span>
						@elseif($b->status==0)
						<span class="label label-warning">Pending</span>
						@elseif($b->status==5)	
						<span class="label label-danger">Cancelled</span>
						@elseif($b->status==2)	
						<span class="label label-primary">Occupied</span>
						@elseif($b->status==4)	
						<span class="label label-info">Preparing</span>
						@elseif($b->status==3)	
						<span class="label label-info">Ended</span>
						@endif
					</td>
					<td> {{ $b->created_at->toDayDateTimeString() }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-xs-1 col-sm-1 col-md-4 col-lg-4">


		<div class="panel-body">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Today's Statistics</h3>
				</div>
				<ul class="list-group">
					<div class="alert alert-success">

						<strong>Total Earnings Today</strong> <br>
						<h2 style='margin:0px;font-family: Open Sans' ng-bind='profit_today | currency:"P"'>

						</h2>
					</div>

					<a href='{{ URL::to("adminsite/dashboard/success_booking")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $bookings }}</span>
							Success Bookings
						</li>
					</a>
					<a href='{{URL::to("adminsite/dashboard/pending_booking")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $pending }}</span>
							Pending Bookings
						</li>
					</a>
					<a href='{{URL::to("adminsite/dashboard/arrival")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $arrival }}</span>
							Arrival
						</li>
					</a>
					<a href='{{URL::to("adminsite/dashboard/cancelled_booking")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $occupied }}</span>
							Occupied
						</li>
					</a>
					<a href='{{URL::to("adminsite/dashboard/departure")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $departure }} </span>
							Departure
						</li>
					</a>
					<a href='{{URL::to("adminsite/dashboard/cancelled_booking")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $preparing }}</span>
							Preparing
						</li>
					</a>

					<a href='{{URL::to("adminsite/dashboard/cancelled_booking")}}'>
						<li class="list-group-item">
							<span class="badge"> {{ $cancelled }}</span>
							Canceled
						</li>
					</a>
				</ul>
			</div>
		</div>
	</div>
</div>
@stop
@section('scripts')
{{ HTML::script('admin/asset/js/chart/chart.min.js') }}
{{ HTML::script('admin/asset/js/chart/angular-chart.js') }}
{{ HTML::script('admin/asset/js/index.js') }}
{{ HTML::script('admin/asset/js/dirPagination.js') }}
@stop