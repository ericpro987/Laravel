<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Projecte extends Model
{
    protected $table = 'projectes';
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = ['name', 'description', 'project_code', 'state', 'begin_date', 'previst_end_date', 'real_end_date', 'estimate_budget_hours', 'real_budget_hours', 'client_id', 'gestor_id'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function gestor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'gestor_id');
    }
    public function desenvolupadors(): BelongsToMany{
        return $this->belongsToMany(User::class,'projecte_desenvolupador','projecte_id','desenvolupador_id');
    }

}
