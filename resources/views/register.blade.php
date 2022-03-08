@extends('app')

@section('content')
<div class="form-container">
    <div class="flex-container">
        <h1 class="heading--section">Sign up for our weekly newsletter</h1>
        <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam provident delectus saepe ipsa ab autem velit, error, odit corrupti, officiis veniam ullam eius.</p>
    </div>
    <form action="" class="registration-form">
        <label for="name">Name <input type="text" placeholder="name"></label>
        <label for="e-mail">E-mail <input type="text" placeholder="e-mail"></label>
        <button class="button--outline">Register</button>
    </form>
</div>
@endsection