<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    protected $table = 'comentaris';

    /** @use HasFactory<\Database\Factories\ComentariFactory> */
    use HasFactory;
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = ['ticket_id', 'user_id','data','contingut'];
}
