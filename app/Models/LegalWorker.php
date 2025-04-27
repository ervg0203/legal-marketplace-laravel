<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalWorker extends Model {
    protected $fillable = ['user_id', 'role', 'specialization', 'location', 'contact', 'phone', 'image'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function requests() {
        return $this->hasMany(RequestModel::class);
    }
}
