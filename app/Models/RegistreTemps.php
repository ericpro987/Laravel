<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistreTemps extends Model
{
    protected $table = 'registre_temps';

    /** @use HasFactory<\Database\Factories\RegistreTemps> */
    use HasFactory;
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = ['ticket_id', 'user_id','data','hores_treballades','descripcio_treball'];


}
