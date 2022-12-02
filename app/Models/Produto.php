<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'preco_custo',
        'preco_venda',
        'unidade',
        'quantidade',
        'quant_max',
        'quant_min',
        'referencia',
        'marca',
        'grupo',
        'fornecedor',
        'porcentagem',
        'imp_federal',
        'icms',
        'lucro',
        'codigo',
        'nsc',
        'categoria'
    ];
}
