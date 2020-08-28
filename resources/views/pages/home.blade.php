@extends('layout')

@section('title', 'CRUD - Home')

@section('content')
  <div class="md:px-32 w-full my-16">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">
              Nombre
            </th>
            <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">
              Apellido
            </th>
            <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">
              Teléfono
            </th>
            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
              Correo
            </td>
            <th class="text-left py-3 px-6 uppercase font-semibold text-sm">
              Acción
            </td>
          </tr>
        </thead>
      @forelse ($users as $user)
        <tbody class="text-gray-700">
          <tr>
            <td class="w-1/6 text-left py-3 px-4">
              {{ $user->name }}
            </td>
            <td class="w-1/6 text-left py-3 px-4">
              {{ $user->lastname }}
            </td>
            <td class="w-1/5 text-left py-3 px-4">
              {{ $user->phone }}
            </td>
            <td class="w-1/3 text-left py-3 px-4">
              {{ $user->email }}
            </td>
            <td class="flex text-left py-3 px-4">
              <button class="mx-2">Editar</button>
              <button class="mx-2">Eliminar</button>
            </td>
      @empty
        <p>No hay usuarios para mostrar</p>
      @endforelse
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection