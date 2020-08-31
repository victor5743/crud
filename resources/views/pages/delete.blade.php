@extends('layout')

@section('title', 'CRUD - Eliminar')
@section('content')
<div class="w-full max-w-md mx-auto">
<form method="POST" action="{{ route('user.destroy', $user) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('DELETE')
    
    <p>¿Esta seguro que desea eliminar al usuario {{ $user->name }} {{ $user->lastname }}?</p>

    <div class="flex justify-center">
      <button type="submit" class="btn-red btn-red:hover btn-red:focus m-4">
        Si
      </button>
      
      <button class="btn-blue btn-blue:hover btn-blue:focus m-4">
        <a href="{{ route('user.index') }}">
          No
        </a>
      </button>
    </div>
    
  </form>
</div>
@endsection