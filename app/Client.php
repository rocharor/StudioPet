<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'clients';

    protected $fillable = ['name', 'name_animal', 'phone', 'obs'];

    protected $hidden = ['created_at', 'updated_at'];
}
