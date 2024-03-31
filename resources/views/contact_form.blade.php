@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('styles/contact_form.css') }}">
@endsection

@section('content')
<a href="/" class="btn btn-secondary" style="position:absolute;">Return back</a>
<div class="form d-flex justify-content-center align-items-center">
    <form action="/contact_form" method="POST">
        @csrf
        <div class="mb-3 d-flex flex-column">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name">
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="topic" class="form-label">Topic of issue</label>
            <input type="text" class="form-control" name="topic" id="topic">
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="issue" class="form-label">Enter your problem</label>
            <textarea name="issue" cols="30" rows="5" class="form-control" id="issue"></textarea>
        </div>
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Send issue</button>
    </form>
</div>
@endsection