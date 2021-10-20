<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class SiteContato extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
        'telefone',
        'email',
        'motivo_contato',
        'mensagem'];
}
