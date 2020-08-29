@extends('layout')

@section('title', 'CRUD - Editar')
@section('content')
<div class="w-full max-w-md mx-auto">
<form method="POST" action="{{ route('user.update', $user) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PATCH')
    {{-- Name input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nombre
      </label>
      <input name="name" class="input input:focus" type="text" placeholder="Ingresa tu nombre" value="{{ old('name', $user->name) }}">
      @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>

    {{-- Lastname input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Apellido
      </label>
      <input name="lastname" class="input input:focus" type="text" placeholder="Ingresa tu apellido" value="{{ old('lastname', $user->lastname) }}">
      @error('lastname')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>

    {{-- Phone input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Teléfono
      </label>
      <input name="phone" class="input input:focus" type="text" placeholder="Ingresa tu teléfono" value="{{ old('phone', $user->phone) }}">
      @error('phone')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>

    {{-- Email input --}}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Correo
      </label>
      <input name="email" class="input input:focus" type="text" placeholder="example@example.com" value="{{ old('email', $user->email) }}">
      @error('email')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>

    {{-- Add button --}}
    <div class="flex mx-auto">
      <button class="btn-blue btn-blue:hover btn-blue:focus">
        Actualizar
      </button>
    </div>
  </form>
</div>
@endsection