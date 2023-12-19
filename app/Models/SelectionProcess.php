<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id', 'status', 'opening_date', 'closing_date', 'description'
    ];

    public function jobOffer()
    {
        return $this->belongsTo(JobOffer::class, 'offer_id');
    }
}
