<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
  </head>

  <body class="bg-neutral-200 font-poppins">
    <div class="container mx-auto max-w-6xl px-5">
      <div class="flex h-screen items-center justify-center">
        <div class="w-full max-w-sm">
          @error('email')
            <div class="mb-5 rounded-lg border border-red-600 bg-red-100 p-4">{{ $message }}</div>
          @enderror
          <div class="rounded-lg bg-white p-8 shadow-lg">
            <h1 class="mb-6 text-center text-2xl font-bold">Login Admin</h1>
            <form x-data="{ isSubmitting: false }" @submit.prevent="isSubmitting = true; $el.submit()"
              action="/auth/authenticate" method="POST">
              @csrf
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                <input
                  class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                  id="email" name="email" type="email" value="{{ old('email') }}" required>
              </div>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                <input
                  class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                  id="password" name="password" type="password" required>
              </div>
              <div class="mb-4">
                <button
                  class="w-full rounded-md bg-indigo-500 p-3 text-white disabled:cursor-not-allowed disabled:opacity-50"
                  type="submit" :disabled="isSubmitting" x-text="isSubmitting ? 'Proses...':'Login'"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
