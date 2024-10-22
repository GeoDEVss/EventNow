<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos'; // Nome da tabela
    protected $fillable = ['bairro', 'cidade', 'cep', 'logradouro', 'id_usuario']; // Atributos mass assignable

    // Relacionamento 1:1 com Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
