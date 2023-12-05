<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'ticket';

    public function labels() {
        return $this->belongsTo( Label::class, 'label', 'id' );
    }

    public function categories() {
        return $this->belongsTo( Category::class, 'category', 'id' );
    }
    
    public function user() {
        return $this->belongsTo( User::class );
    }

}
