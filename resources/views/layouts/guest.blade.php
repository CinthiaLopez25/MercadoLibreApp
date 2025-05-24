<x-template>
  <x-header/>
  <body class="font-sans text-gray-900 antialiased">
      <div class="min-h-screen flex flex-col items-center pt-6 bg-primary">
          <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-box shadow-md overflow-hidden sm:rounded-lg">
              {{ $slot }}
          </div>
      </div>
  </body>
</x-template>
