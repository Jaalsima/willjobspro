<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'title', 'description', 'requirements', 'publication_date'
    ];

    public function company()
    {
        return $this->belongsTo(User::class, 'company_id');
    }

    public function selectionProcess()
    {
        return $this->hasOne(SelectionProcess::class);
    }
}
