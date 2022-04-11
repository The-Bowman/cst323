<?php ?>
@extends('layouts.appmaster')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<header></header>

<div class="container fluid">
<form action="doLogin" method="POST">
@csrf
@section('content')
  <div >
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div >
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div style="margin:4px;">
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</div>
@endsection