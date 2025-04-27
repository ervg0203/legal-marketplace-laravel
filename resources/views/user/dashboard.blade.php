@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <h2 class="dashboard-title">Welcome to Your Dashboard</h2>
    <p class="dashboard-welcome">You are now logged in to the Legal Marketplace. Start browsing services and connect with legal professionals.</p>
    
    <div class="dashboard-actions">
        <a href="/marketplace" class="btn-action">Browse Marketplace</a>
        <form method="POST" action="/logout" style="display: inline;">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
</div>
@endsection
