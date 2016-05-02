{{ HTML::style('public/css/admin/content/editing.css') }}
@extends('layouts/admin/master')
@section('content')
	<?php $title = "Laravel" ?>
	<div class="isi">
	<div class="title">Laravel</div>
		<div class="column">
			<div class="left">
				<table>
					<tr>
						<th>No</th>
						<th>Title</th>
						<th>Content</th>
						<th>Created By</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>contoh</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
						<td>mihawk@gmail.com</td>
						<td>2016-04-29</td>
						<td>2016-04-30</td>
						<td><button onclick="location.href='{{ URL::to('#') }}';">Edit</button></td>
					</tr>
				</table>
			</div>
			<div class="center"></div>
			<div class="right"></div>
		</div>
	</div>
@stop
