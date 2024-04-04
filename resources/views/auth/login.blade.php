@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('styles/login.css') }}">
@endsection

@section('Title')
Login
@endsection

@section('content')
<a href="/" class="btn btn-secondary" style="margin-bottom: 40px;">Return back</a>
<div class="alert alert-danger">
    This service in development...
</div>
@endsection