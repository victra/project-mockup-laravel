{{ HTML::style('public/css/admin/content/default.css') }}
@extends('layouts/admin/master')
@section('content')
	<?php $title = "Login" ?>
	<div class="isi">
		<h1>Login</h1>
	    <p style="color:red;">
	        {{ $errors->first('email') }}
	        {{ $errors->first('password') }}
	    </p>
		{{ Form::open(array('url' => 'admin')) }}
			<table align="center">
				<tr>
					<td>{{ Form::label('email', 'Email') }}</td>
					<td width="1">:</td>
					<td>{{ Form::text('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'Masukkan Email')) }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('password', 'Password') }}</td>
					<td>:</td>
					<td>{{ Form::password('password', array('class' => 'form-control','placeholder'=>'Masukkan Password')) }}</td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td colspan="3" align="center">{{ Form::submit('Login', array('class' => 'form-control')) }}</td></tr>
			</table>
		{{ Form::close() }}	
	</div>
@stop
