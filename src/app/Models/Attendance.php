<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable =['start_work', 'end_work'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
