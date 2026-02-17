<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'tickets';

    /** @use HasFactory<\Database\Factories\TicketsFactory> */
    use HasFactory;
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = ['assignat_a', 'creat_per', 'titol', 'descripcio', 'codi_ticket', 'tipus', 'prioritat', 'estat', 'hores_estimades', 'hores_reals','data_creacio','data_deadline','data_tancament','projecte_id', 'ticket_pare_id'];


}
