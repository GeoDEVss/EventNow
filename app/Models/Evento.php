<?php

class Evento extends Model
{
    public function enderecoEvento()
    {
        return $this->hasOne(EnderecoEvento::class, 'id', 'id_endereco_evento');
    }

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class, 'id_evento');
    }
}
