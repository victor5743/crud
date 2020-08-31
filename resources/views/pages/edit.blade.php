@extends('layout')

@section('title', 'CRUD - Editar')
@section('content')
<div class="w-full max-w-md mx-auto">
<form method="POST" action="{{ route('user.update', $user) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @method('PATCH')
    
    @include('form.form', ['btnText' => 'Actualizar'])
  </form>
</div>
@endsection