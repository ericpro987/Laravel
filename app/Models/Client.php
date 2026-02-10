<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    //
    protected $table = 'clients';

    protected $primaryKey = 'client_id';
    public $timestamps = true;
    protected $fillable = ['name', 'cif', 'email','phone', 'address', 'active'];


    public function projectes(): HasMany
    {
        return $this->hasMany(Projecte::class);
    }
}
