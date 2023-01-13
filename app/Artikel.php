<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Artikel extends Model
{
    // use HasFactory;
    protected $table ='artikel';

    
    protected $fillable = [
        'title',
        'author',
        'content',
    ];

    /**
     * Get the user that owns the Artikel
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
