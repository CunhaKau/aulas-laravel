@extends ('index')

@section('content')

<div class = "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h1">Alteração de Contatos</h1>
</div>

<form class="form" method="POST" action="{{ route('usuarios.update.put', $findUser->id) }}">
@method('PUT')
@csrf

<div class="mb-3">
<label class="form-label">Permissão</label>
<select name="permissao_do_usuario" class="form-select" arial-label="Clique aqui e selecione">
  <option value="administrador" @selected($findUser->permissao_do_usuario == "administrador")>Administrador</option>
  <option value="usuario" @selected($findUser->permissao_do_usuario =="usuario")>Usuário</option>
</select>
</div>


<div class="mb-3">
<label class="form-label">Nome</label>
<input value="{{ $findUser->name }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name">
@if ($errors->has('name'))
<div class="invalid-feedback">O campo nome é obrigatório</div>
@endif
</div>


<div class="mb-3">
  <label class="form-label">E-mail</label>
  <input value="{{ $findUser->email }}" type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
  @if ($errors->has('email'))
<div class="invalid-feedback">O campo e-mail é obrigatório, exemplo: teste@teste.co</div>
@endif
</div>


<div class="mb-3">
<label class="form-label">Senha</label>
<input value="{{ $findUser->password }}" type="password" class="form-control" name="password">
</div>

<button type="submit" class="btn btn-success">Alterar</button>
</form>

@endsection