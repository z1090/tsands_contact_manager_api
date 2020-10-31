<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ["note_text"];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
