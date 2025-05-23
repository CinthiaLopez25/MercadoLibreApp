<!-- Franja amarilla superior -->
<div class="w-full h-20 bg-yellow-300">
  <a class="flex items-center h-full pl-4">
    <img src={{ Vite::image('logo_large.webp') }} alt="Mercado Libre">
  </a>
</div>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

          <!--mensaje de bienvenida -->
        <h2 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-100 mb-6">
            {{ __('Ingresar los datos solicitados') }}
        </h2>


        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" class="text-write" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo')" class="text-black" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
           <x-input-label for="password" :value="__('Contraseña')" class="text-black" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" class="text-black" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('¿Ya estas registrado?') }}
            </a>

          <x-primary-button class="ms-4">
           {{ __('Registrar') }}
          </x-primary-button>

        </div>
    </form>
</x-guest-layout>
