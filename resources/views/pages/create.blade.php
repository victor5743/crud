@extends('layout')

@section('title', 'CRUD - Crear')
@section('content')
<div class="w-full max-w-md mx-auto">
<form method="POST" action="{{ route('user.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    {{-- Name input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nombre
      </label>
      <input name="name" class="input input:focus" type="text" placeholder="Ingresa tu nombre" value="{{ old('name') }}">
      {!! $errors->first('name', '<p class="text-red-500 text-xs italic">:message</p>') !!}
    </div>

    {{-- Lastname input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Apellido
      </label>
      <input name="lastname" class="input input:focus" type="text" placeholder="Ingresa tu apellido" value="{{ old('lastname') }}">
      {!! $errors->first('lastname', '<p class="text-red-500 text-xs italic">:message</p>') !!}
    </div>

    {{-- Phone input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Teléfono
      </label>
      <input name="phone" class="input input:focus" type="text" placeholder="Ingresa tu teléfono" value="{{ old('phone') }}">
      {!! $errors->first('phone', '<p class="text-red-500 text-xs italic">:message</p>') !!}
    </div>

    {{-- Email input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Correo
      </label>
      <input name="email" class="input input:focus" type="text" placeholder="example@example.com" value="{{ old('email') }}">
      {!! $errors->first('email', '<p class="text-red-500 text-xs italic">:message</p>') !!}
    </div>

    {{-- Add button --}}
    <div class="flex mx-auto">
      <button class="btn-blue btn-blue:hover btn-blue:focus">
        Agregar
      </button>
    </div>
  </form>
</div>
@endsection