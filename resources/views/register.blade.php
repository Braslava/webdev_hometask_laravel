@extends('app')

@section('content')
<div class="form-container">
    <div class="flex-container">
        <h1 class="heading--section">Sign up for our weekly newsletter</h1>
        <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam provident delectus saepe ipsa ab autem velit, error, odit corrupti, officiis veniam ullam eius.</p>
        <p class="success-msg">{{ session('message') }}</p>
    </div>
    <form action="" method="POST" class="registration-form">
        @csrf
        <label for="name">Name <input type="text" id="name" name="name" placeholder="name"></label>
        <label for="email">E-mail <input type="text" id="email" name="email" placeholder="email"></label>
        <button type="submit" class="button--outline">Register</button>
    </form>
</div>
@endsection

<!-- 1. Sadaļā "Sign up" pievienot formu.
	2. Forma satur 2 laukus (name un e-mail) un submit pogu.
	3. Izmantojot "migration scripts" izveidot jaunu DB tabulu.
	4. Pēc formas aizpildīšanas un nosūtīšanas, jāparādās paziņojumam.
	5. Datiem jāsaglabājas DB tabulā. -->