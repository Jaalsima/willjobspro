<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator_id', 'name', 'description', 'creation_date'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
