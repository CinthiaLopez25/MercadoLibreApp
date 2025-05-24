<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session(key: 'status')" />

  <!-- Título y mensaje de bienvenida -->
  <h2 class="text-4xl font-semibold text-center text-gray-800 mb-6">
      {{ __(key: 'Bienvenido de nuevo') }}
  </h2>
  <p class="text-sm text-center text-gray-600 mb-6">
      {{ __(key: 'Ingresa tu correo y contraseña para iniciar sesión') }}
  </p>

  <form method="POST" action="{{ route(name: 'login') }}">
      @csrf

      <!-- Email Address -->
      <div>
          <x-input-label for="email" :value="__(key: 'Correo')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old(key: 'email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mt-4">
          <x-input-label for="password" :value="__(key: 'Contraseña')" />
          <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-500 shadow-sm focus:ring-yellow-500" name="remember">
              <span class="ms-2 text-sm text-gray-600">{{ __(key: 'Recordarme') }}</span>
          </label>
      </div>

      <div class="flex items-center justify-end mt-4">
          @if (Route::has(name: 'password.request'))
              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route(name: 'password.request') }}">
                  {{ __(key: '¿Olvidaste tu contraseña?') }}
              </a>
          @endif

          <x-primary-button class="ms-3 bg-[#3483fa] hover:bg-blue-700 text-white px-6 py-2 rounded-md shadow-md">
              {{ __(key: 'Iniciar sesión') }}
          </x-primary-button>
      </div>
  </form>
</x-guest-layout>


