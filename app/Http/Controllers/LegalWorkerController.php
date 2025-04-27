<?php

namespace App\Http\Controllers;

use App\Models\RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LegalWorkerController extends Controller
{
    public function dashboard() {
        // Directly access the authenticated user’s legal worker details
        $legalWorker = auth()->user()->legalWorker;

        // If no legal worker data exists for the user, handle the case

        // Fetch the requests associated with the legal worker
        $requests = $legalWorker->requests;

        // Return the dashboard view with requests
        return view('legalworker.dashboard', compact('requests'));
    }

    public function updateRequest(Request $request, $id) {
        // Find the request by ID
        $req = RequestModel::findOrFail($id);

        // Ensure the request's legal worker is the authenticated user (to prevent unauthorized updates)
        if ($req->legal_worker_id !== auth()->user()->legalWorker->id) {
            return redirect()->back()->with('error', 'You are not authorized to update this request.');
        }

        // Update the request status
        $req->status = $request->status;
        $req->save();

        // Send email to the user notifying them of the request status update
        Mail::raw("Hello {$req->user_name}, your request has been {$req->status}.", function($message) use ($req) {
            $message->to($req->user_email)->subject('Request Update - Legal Marketplace');
        });

        return redirect()->back()->with('success', 'Request updated and user notified!');
    }
}
