@extends('app')

@section('content')
<div class="form-container">
    <div class="flex-container">
        <h1 class="heading--section">Sign up for our weekly newsletter</h1>
        <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam provident delectus saepe ipsa ab autem velit, error, odit corrupti, officiis veniam ullam eius.</p>
        <p class="success-msg bright-text">{{ session('message') }}</p>
    </div>
    <!-- @if ($errors->any())
    <div class="error-msg">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    <form action="" method="POST" class="registration-form">
        @csrf

        <label for="name">Name <input type="text" id="name" name="name" placeholder="name" value="{{ old('name') }}"></label>
        <p class="error-msg">@error('name'){{ $message }}@enderror</p>
        <label for="email">E-mail <input type="text" id="email" name="email" placeholder="email" value="{{ old('email') }}"></label>
        <p class="error-msg">@error('email'){{ $message }}@enderror</p>
        <button type="submit" class="button--outline">Register</button>
    </form>
</div>
@endsection