<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutosModel extends Model
{
    use HasFactory;

    protected $table = "tbProduto";

    public $timestamps = false;
    protected $fillable = ['titPro', 'idCategoria', 'descrPro', 'valorPro'];

    protected $primaryKey = 'idProd';
}
