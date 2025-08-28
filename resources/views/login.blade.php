@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-6 col-lg-5">
      <div class="card shadow-sm border-0">
        <div class="card-body p-4">

          <h1 class="h4 mb-4 text-center">Entrar</h1>

          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" placeholder="seu@email.com" required>
              <div class="invalid-feedback">Informe um e-mail válido.</div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" minlength="6" required>
                <button class="btn btn-outline-secondary" type="button" id="togglePass">Mostrar</button>
                <div class="invalid-feedback">Senha obrigatória (mín. 6 caracteres).</div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label" for="remember">Lembrar-me</label>
              </div>
              <a href="#" class="small">Esqueceu a senha?</a>
            </div>

            <button class="btn btn-primary w-100" type="submit">Entrar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
  (() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();

  const btn = document.getElementById('togglePass');
  const input = document.getElementById('password');
  btn.addEventListener('click', () => {
    const isPwd = input.getAttribute('type') === 'password';
    input.setAttribute('type', isPwd ? 'text' : 'password');
    btn.textContent = isPwd ? 'Ocultar' : 'Mostrar';
  });
</script>
@endsection
