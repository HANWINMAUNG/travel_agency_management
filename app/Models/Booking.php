<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = ['package_id', 'number_of_person', 'user_info', 'note', 'date_of_travel', 'payment_method'];

    public function Package() {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function Payment() {
        return $this->hasMany(Payment::class, 'id');
    }
}


