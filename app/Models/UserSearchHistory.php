<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSearchHistory extends Model
{
    use HasFactory;

    protected $table = 'search_history';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
