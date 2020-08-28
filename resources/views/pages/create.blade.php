@extends('layout')

@section('title', 'CRUD - Crear')
@section('content')
<div class="w-full max-w-md mx-auto">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    {{-- Name input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nombre
      </label>
      <input name="name" class="input input:focus" type="text" placeholder="Ingresa tu nombre">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>

    {{-- Lastname input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Apellido
      </label>
      <input name="lastname" class="input input:focus" type="text" placeholder="Ingresa tu apellido">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>

    {{-- Phone input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Teléfono
      </label>
      <input name="phone" class="input input:focus" type="text" placeholder="Ingresa tu teléfono">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>

    {{-- Email input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Correo
      </label>
      <input name="email" class="input input:focus" type="text" placeholder="example@example.com">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>

    {{-- Add button --}}
    <div class="flex mx-auto">
      <button class="btn-blue btn-blue:hover btn-blue:focus" type="button">
        Agregar
      </button>
    </div>
  </form>
</div>
@endsection