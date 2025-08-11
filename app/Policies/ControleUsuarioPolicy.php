<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class ControleUsuarioPolicy
{
    public function acessoPageContatos(User $user) {
        if ($user->permissao_do_usuario == "administrador"){
            return true;
        }

        return false;
    }
}
