@extends('layouts.app')

@section('content')
<div class="marketplace-container">
    <h2 class="marketplace-title">Marketplace</h2>

    <form method="GET" class="filters">
        <input type="text" name="location" placeholder="Filter by Location" value="{{ request('location') }}" class="filter-input">
        <input type="text" name="specialization" placeholder="Filter by Specialization" value="{{ request('specialization') }}" class="filter-input">
        <button class="btn-filter">Filter</button>
    </form>

    <table class="worker-table">
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Specialization</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        @foreach($workers as $worker)
        <tr>
            <td class="worker-name">{{ $worker->user->name }} {{ $worker->image }}</td>
            <td>{{ $worker->role }}</td>
            <td>{{ $worker->specialization }}</td>
            <td>{{ $worker->location }}</td>
            <td><a href="/request/{{ $worker->id }}" class="btn-contact">Contact</a></td>
        </tr>
        @endforeach
    </table>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    .marketplace-container {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 1000px;
        margin: 40px auto;
    }

    .marketplace-title {
        font-size: 32px;
        color: #003366;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
    }

    .filters {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
    }

    .filter-input {
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ccc;
        width: 200px;
        transition: border-color 0.3s ease;
    }

    .filter-input:focus {
        border-color: #2d89ef;
        outline: none;
    }

    .btn-filter {
        background-color: #2d89ef;
        color: white;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-filter:hover {
        background-color: #1b6ec2;
    }

    .worker-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    .worker-table th, .worker-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .worker-table tr:hover {
        background-color: #f1f1f1;
    }

    .worker-name {
        font-weight: bold;
    }

    .btn-contact {
        background-color: #2d89ef;
        color: white;
        padding: 10px 15px;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-contact:hover {
        background-color: #1b6ec2;
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .marketplace-container {
            padding: 20px;
        }

        .marketplace-title {
            font-size: 28px;
        }

        .filters {
            flex-direction: column;
            align-items: center;
        }

        .filter-input {
            width: 100%;
            margin-bottom: 10px;
        }

        .worker-table th, .worker-table td {
            font-size: 14px;
        }

        .btn-filter {
            width: 100%;
        }

        .btn-contact {
            width: 100%;
        }
    }
</style>

@endsection
