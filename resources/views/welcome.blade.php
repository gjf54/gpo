@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('styles/welcome.css') }}">
@endsection

@section('title')
Sacred Artel
@endsection

@section('content')
<header class="d-flex align-items-center justify-content-center flex-column">
    <img src="{{ asset('imgs/welcome/logo.jpg') }}" alt="">
    <span>He who lives under the roof of the Almighty rests under the shadow of the Almighty</span>
    <a href="#" class="btn btn-outline-primary">Join the ranks</a>
</header>
<div class="content">
    <div class="description d-flex flex-column">
        <div class="d-flex flex-row justify-content-around align-items-center">
            <div class="description_title_dash"></div>
            <span id="description_title">Why our team?</span>
            <div class="description_title_dash"></div>
        </div>
        <div class="description_block" style="margin-right: auto; margin-left: 20px;">
            <div class="d-flex flex-column">
                <span class="description_block_title">Lorem ipsum dolor sit amet.</span>
                <span class="description_block_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt debitis nihil quia accusamus eos. Consequatur officiis libero maiores nostrum numquam dolor dolore blanditiis natus ad animi reiciendis placeat velit nobis illum, labore pariatur magnam ipsa tempora, ducimus illo asperiores temporibus?</span>
            </div>
        </div>
        <div class="description_block" style="margin-left: auto; margin-right: 20px;">
            <div class="d-flex flex-column">
                <span class="description_block_title">Lorem ipsum dolor sit amet.</span>
                <span class="description_block_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt debitis nihil quia accusamus eos. Consequatur officiis libero maiores nostrum numquam dolor dolore blanditiis natus ad animi reiciendis placeat velit nobis illum, labore pariatur magnam ipsa tempora, ducimus illo asperiores temporibus?</span>
            </div>
        </div>
    </div>
</div>
@endsection
