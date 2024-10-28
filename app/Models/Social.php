<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
       'link',
       'image',
       'writer_id',
    ];
    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id');
    }

}
