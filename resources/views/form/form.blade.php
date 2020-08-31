@csrf
{{-- Name input --}}
<div class="mb-4">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
    Nombre
  </label>
  <input name="name" class="input input:focus" type="text" placeholder="Ingresa tu nombre" value="{{ old('name') }}">
  @error('name')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
  @enderror
</div>

{{-- Lastname input --}}
<div class="mb-4">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
    Apellido
  </label>
  <input name="lastname" class="input input:focus" type="text" placeholder="Ingresa tu apellido" value="{{ old('lastname') }}">
  @error('lastname')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
  @enderror
</div>

{{-- Phone input --}}
<div class="mb-4">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
    Teléfono
  </label>
  <input name="phone" class="input input:focus" type="text" placeholder="Ingresa tu teléfono" value="{{ old('phone') }}">
  @error('phone')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
  @enderror
</div>

{{-- Email input --}}
<div class="mb-4">
  <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
    Correo
  </label>
  <input name="email" class="input input:focus" type="text" placeholder="example@example.com" value="{{ old('email') }}">
  @error('email')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
  @enderror
</div>

{{-- Button --}}
<div class="flex mx-auto">
  <button class="btn-blue btn-blue:hover btn-blue:focus">
    {{ $btnText }}
  </button>
</div>