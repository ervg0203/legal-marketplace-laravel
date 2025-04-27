@extends('layouts.app')

@section('content')
<h2 style="font-size: 32px; color: #003366; font-weight: 600; margin-bottom: 20px; text-align: center;">Register</h2>
<div class="container">
    <form method="POST" action="/register" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
        <input type="email" name="email" placeholder="Email Address" required style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
        <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">

        <label for="role" style="font-size: 16px; color: #003366; font-weight: 500;">User Type</label>
        <select name="role" id="role" onchange="document.getElementById('worker-fields').style.display = this.value == 'legal_worker' ? 'block' : 'none';" style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
            <option value="user">User</option>
            <option value="legal_worker">Legal Worker</option>
        </select>

        <div id="worker-fields" style="display:none;">
            <input type="text" name="worker_role" placeholder="Legal Role (e.g. Advocate)" style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
            <input type="text" name="specialization" placeholder="Specialization (e.g. Criminal Law)" style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
            <input type="text" name="location" placeholder="Location (e.g. Delhi)" style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
            <input type="text" name="phone" placeholder="Phone Number" style="width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
            <input type="text" name="image" placeholder="Emoji (👨‍⚖️)" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px; transition: border 0.3s ease;">
        </div>

        <button type="submit" class="btn" style="width: 100%; background: #2d89ef; color: white; padding: 15px; border-radius: 8px; border: none; font-size: 18px; cursor: pointer; transition: background 0.3s ease, transform 0.3s ease;">
            Register
        </button>

        <p style="text-align: center; margin-top: 20px;">Already have an account? <a href="/login" style="color: #2d89ef;">Login</a></p>
    </form>
</div>
@endsection
