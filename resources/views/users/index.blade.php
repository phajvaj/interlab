@extends('layouts.app')

@section('title', 'View Users')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-users"></i> User Administration
            	<small><a href="{{ url('/users/create') }}" class="btn btn-success">Add User</a></small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-hover">
                <thead>
		            <tr>
		            	<th>Username</th>
		                <th>Full Name</th>		                
		                <th>Email</th>
		                <th>Telephone</th>
		                <th>Date/Time Added</th>
		                <th></th>
		            </tr>
		        </thead>

		        <tbody>
		            @foreach ($users as $us)
		            <tr>
		            	<td>{{ $us->username }}</td>
		                <td>{{ $us->name }}</td>
		                <td>{{ $us->email }}</td>
		                <td>{{ $us->tel }}</td>
		                <td>{{ $us->created_at->format('F d, Y h:ia') }}</td>
		                <td>
		                    <a href="{{ url('/users/'.$us->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
		                    <a href="{{ url('/users/'.$us->id.'/destroy') }}" class="btn btn-danger pull-left" style="margin-right: 3px;">Delete</a>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
            </table>

        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="myModalLabel2">Confirm Delete User</h4>
			</div>
			<div class="modal-body">
				<h4>Text in a modal</h4>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>

		</div>
	</div>
</div>
@stop