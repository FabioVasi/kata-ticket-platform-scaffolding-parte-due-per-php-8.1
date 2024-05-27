@extends('layouts.app')

@section('content')
<div class="container welcome-container">
    <div class="card text-center">
      <div class="card-body">
        <h1 class="card-title">Benvenuto nella Boolean Ticket Platform, versione 0.1</h1>
        <p class="card-text">Effettua il login per accedere ai contenuti della nostra applicazione.</p>
        <a href="/login" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
@endsection
