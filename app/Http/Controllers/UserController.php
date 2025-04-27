<?php

namespace App\Http\Controllers;

use App\Models\LegalWorker;
use App\Models\RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestNotification;

class UserController extends Controller
{
    // Displays the user dashboard view
    public function dashboard() {
        return view('user.dashboard');
    }

    // Marketplace with filters based on location and specialization
    public function marketplace(Request $request) {
        // Get all legal workers
        $workers = LegalWorker::query();

        // Apply location filter if specified
        if ($request->filled('location')) {
            $workers->where('location', 'like', '%' . $request->location . '%');
        }

        // Apply specialization filter if specified
        if ($request->filled('specialization')) {
            $workers->where('specialization', 'like', '%' . $request->specialization . '%');
        }

        // Get all workers based on filters
        $workers = $workers->get();
        return view('user.marketplace', compact('workers'));
    }

    // Show the request form for a specific legal worker
    public function showRequestForm($id) {
        $worker = LegalWorker::findOrFail($id);
        return view('user.request_form', compact('worker'));
    }

    // Send a request to a legal worker
    public function sendRequest(Request $request, $id)
{
    $worker = LegalWorker::findOrFail($id);

    // Create a new request entry in the database
    RequestModel::create([
        'legal_worker_id' => $worker->id,
        'user_name' => auth()->user()->name,
        'user_email' => auth()->user()->email,
        'description' => $request->description,
        'status' => 'Pending',
    ]);

    // Send an email to the Legal Worker
    Mail::send('emails.service_request_notification', [
        'legalWorker' => $worker,
        'user_name' => auth()->user()->name,
        'user_email' => auth()->user()->email,
        'description' => $request->description,
    ], function ($message) use ($worker) {
        $message->to($worker->contact)  // ✅ Make sure this is a valid email
                ->subject('New Legal Service Request');
    });

    return redirect('/marketplace')->with('success', 'Request sent and email notification delivered!');
}
}
