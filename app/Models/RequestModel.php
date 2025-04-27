<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model {
    protected $fillable = ['legal_worker_id', 'user_name', 'user_email', 'description', 'status'];

    public function legalWorker() {
        return $this->belongsTo(LegalWorker::class);
    }
}

