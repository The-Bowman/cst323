<?php ?>
@extends('layouts.appmaster')
@section('content')
        <h1>Welcome, {{ $username }}</h1>
        <h3>Please check the email {{ $email }} to verify your account</h3>
@endsection