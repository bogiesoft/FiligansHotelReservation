@extends('layout.admin2')
@section('controller')
roomCtrl
@stop
@section('content')
<input type='hidden' ng-init='room_qty={{ $room->roomQty }}'>
<div class="modal fade" id="roomdescription" style='z-index:10000'>
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-body">
				{{ $room->full_desc }}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="addRoom" style='z-index:10000'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add More Rooms</h4>
			</div>
			<div class="modal-body">
				<table>
					<tr>
						<td style='width:100px'>No. of rooms</td>
						<td> <input type='text' class='form-control' placeholder='0-100' ng-model='quantity'></td>
						<td style='padding:10px;'><button type="button" class="btn btn-xs btn-info" ng-click='fulleditor=!fulleditor' ng-show='quantity>0'>view full editor</button></td>
					</tr>
				</table>
				<div ng-show='fulleditor' style='margin-top:10px;'>
					<div class='well'> Note the room numbers will be set to nulled if you change the number of rooms.</div>
					Rooms([[ quantity ]])
					<hr style='padding:0px;margin:0px'>
					<div ng-repeat='r in [] | range:quantity'>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" ng-model='addRoomsInfo[$index].room_no' name="validate-text" id="validate-text" placeholder="Enter Unique room number. Room index [[ $index+1 ]]" ng-keyup='validateRoomNo($index)'>
								<span class="input-group-addon" ng-class='{"danger" : addRoomsInfo[$index].validation==0, "success":addRoomsInfo[$index].validation==1 }'>
									<span class="glyphicon glyphicon-remove" ng-hide='addRoomsInfo[$index].validation==2'>
										<span ng-show='addRoomsInfo[$index].validation==2'>Loading...</span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" ng-click='saveRoom({{ $room->id }})'>Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="updateRoom" style='z-index:10000'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Room</h4>
			</div>
			<div class="modal-body">
				<table>
					<tr>
						<td style='width:150px'>
							Room Number:
						</td>
						<td>
							<input type='text' class='form-control' ng-model='updateroom.room_no' ng-keyup=''>
						</td>
					</tr>
					<tr style='margin-top:10px'>
						<td style=''>
							Room Status
						</td>
						<td style=''>
							<select name="availability" ng-model='updateroom.status' id="input" class="form-control" required="required">
								<option value="1">Available</option>
								<option value="0">Unvailable</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" ng-click='updateSpecificRoom()'>Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="page-header" style='margin-top:-20px' ng-cloak>
	<h2 style='font-family:Open Sans;'>Room Management
		<a class="btn btn-success pull-right" style='margin:3px' href='{{ URL::to("adminsite/room/create")  }}'>		<span class="glyphicon glyphicon glyphicon-file"></span> Create new room</a>
		<a class="btn btn-warning pull-right" style='margin:3px' href='{{ URL::to("adminsite/room/".$room->id."/update")  }}'>		<span class="glyphicon glyphicon glyphicon-pencil"> </span> Update Room</a>
		<button class="btn btn-danger pull-right" style='margin:3px' ng-click='deleteRoom()' >		<span class="glyphicon glyphicon glyphicon-pencil"> </span> Delete Room</button>
	</h2>
</div>
<ol class="breadcrumb">
	<li>
		<a href="#">Room Management</a>
	</li>
	<li><a href="{{ URL::to('adminsite/room') }}">Rooms</a></li>
	<li class="active">Room ID : {{ $room->id }}</li>
</ol>
<div class="row" ng-cloak>
	<center style='margin-top:10px;margin-bottom:50px' ng-show='loading'>
		<label>Deleting this room. Please wait.</label>
		<div class="clearfix">
		</div>
		<img src='{{ URL::to("images/loader.gif") }}'>
	</center>
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<div class="panel panel-primary">
			<div class="panel-body" style='padding:20px;'>
				<div class="row" style='margin:0px;'>
					<label>Room Type:</label> {{ $room->name }}
					<br>
					<label>Room Price: </label> {{ $room->price }}<br>
					<label>Room Quantity: </label> [[ room_qty.length ]] <br>
					<label>Images: 	</label>
				</div>
				<div class="row">
					@foreach($room->roomImages as $ri)
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style='margin:5px;padding:0px;'>
						<a href="#" class="thumbnail" style=''>
							<img src="{{ URL::to('upload/'.$ri->photo->filename) }}" alt="">
						</a>
					</div>
					@endforeach
				</div>
				<!-- <button type="button" class="btn btn-large btn-block btn-primary" style='margin:0px;margin-top:10px;'>View More</button> -->
			</div>
		</div>
		<div class="panel with-nav-tabs panel-primary">
			<div class="panel-heading">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1default" data-toggle="tab">Room Details</a></li>
					<li><a href="#tab2default" data-toggle="tab">Booking List</a></li>
				</ul>
			</div>
			<div class="panel-body">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab1default">
						<div class='col-md-6'>
							<input type='text' class='form-control' placeholder='Enter a keyword to search.' ng-model='roomFilter'>
						</div>
						<button type="button" ng-click='addRoomModal()' class="btn btn-success pull-right">		<span class="glyphicon glyphicon glyphicon-plus"></span> Add More Rooms</button>
						<div class="clearfix"></div>
						<div class="alert alert-success" ng-show='deletedrow'>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Success!</strong> You have successfully deleted a row
						</div>
						<table class="table table-hover" ng-cloak>
							<thead>
								<tr>
									<th>Room No.</th>
									<th>Availability</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat='r in room_qty | filter:roomFilter'>
									<td> [[ (r.room_no==0 || r.room_no==null) ? "Not yet defined" : r.room_no ]]</td>
									<td>
										<span class="label label-success" ng-show='r.room_reserved.length==0 && r.status==1'>Available</span>
										<span class="label label-danger" ng-show='r.room_reserved.length!=0 || r.status==0'>Not available</span>
									</td>
									<td><button type="button" class="btn btn-xs btn-warning" ng-click='updateRoomModal(r, $index)'>Update</button>
										<button type="button" class="btn btn-xs btn-danger" ng-disabled='r.status!=1' ng-click='deleteSpecificRoom(r, $index)' ng-hide='r.room_reserved.length!=0'>Delete</button></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="tab2default"><div class="well">
							No booking to display.
						</div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Information </h3>
				</div>
				<div class="panel-body">
					<label>Short Description</label>
					<br>
					{{	$room->short_desc }} <a data-toggle="modal" href='#roomdescription'>View full description</a>.
					<br>
					<br>
					<label>Max Adult</label>
					<br>
					{{ $room->max_adults }}
					<br>
					<label>Max Children</label>
					<br>
					{{ $room->max_children }}
					<br>
					<label>Registration</label>
					<br>
					{{ $room->created_at }}
					<br>
					<label>Last Updated</label>
					<br>
					{{ 	$room->updated_at }}
				</div>
			</div>
		</div>
	</div>
	@stop
	@section('scripts')
	{{ HTML::script('admin/asset/js/room.js') }}
	<script type="text/javascript">
		app.constant('room_id', {{ $room->id }})
	</script>
	@stop