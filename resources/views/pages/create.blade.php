@extends('layout')

@section('title', 'CRUD - Crear')
@section('content')
<div class="w-full max-w-md mx-auto">
  <form method="POST" action="{{ route('user.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @include('form.form', ['btnText' => 'Agregar'])
  </form>
</div>
@endsection