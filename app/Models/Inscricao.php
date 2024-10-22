<?php

class Inscricao extends Model
{
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }
}
