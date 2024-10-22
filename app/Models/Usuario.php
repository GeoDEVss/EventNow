<?php

class Usuario extends Model
{
    public function contato()
    {
        return $this->hasOne(Contato::class, 'id', 'id_contato');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id', 'id_endereco');
    }

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class, 'id_usuario');
    }
}
