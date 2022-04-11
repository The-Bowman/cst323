<?php ?>
@extends('layouts.appmaster')
<header></header>
@section('content')
<div class="col-md-6">
	<h2>User registration</h2>
	<form action="doRegister" method="post">
	@csrf
		<div class="form-group">
			<label>Username:</label>
			<input type="text" name="username" class="form-control" required><br>
			</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required><br>
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control" required><br>
		</div>
			<button type="submit" class="btn btn-primary">Register</button>
	</form>
</div>
@endsection