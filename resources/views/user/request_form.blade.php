@extends('layouts.app')

@section('content')
<div class="request-container">
    <h2 class="request-title">Send Request to {{ $worker->user->name }}</h2>
    <form method="POST" action="/request/{{ $worker->id }}" class="request-form">
        @csrf
        <textarea name="description" placeholder="Describe your legal issue..." required class="request-textarea"></textarea>
        <button type="submit" class="btn-send-request">Send Request</button>
    </form>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    .request-container {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 40px auto;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .request-title {
        font-size: 32px;
        color: #003366;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .request-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }

    .request-textarea {
        width: 100%;
        height: 150px;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
        resize: vertical;
        transition: border-color 0.3s ease;
    }

    .request-textarea:focus {
        border-color: #2d89ef;
        outline: none;
    }

    .btn-send-request {
        background-color: #2d89ef;
        color: white;
        padding: 12px 20px;
        font-size: 18px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-send-request:hover {
        background-color: #1b6ec2;
        transform: scale(1.05);
    }

    @media (max-width: 600px) {
        .request-container {
            padding: 20px;
        }

        .request-title {
            font-size: 28px;
        }

        .request-textarea {
            font-size: 14px;
        }

        .btn-send-request {
            width: 100%;
        }
    }
</style>
@endsection
