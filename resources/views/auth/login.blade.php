@extends('layouts.app')

@section('content')
<h2>Login</h2>
<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button class="btn">Login</button>
</form>
<p>Don't have an account? <a href="/register">Register</a></p>
@endsection
