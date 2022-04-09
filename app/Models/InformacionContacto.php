<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionContacto extends Model
{
    use HasFactory;

    protected $table = 'informacion_contacto';

    public function hola() {

        return $this->primaryKey;
    }
}
