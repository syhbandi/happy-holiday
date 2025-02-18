<x-layout>
  <x-slot:title>Admin Login</x-slot>
  <section class="bg-neutral-100">
    <div class="container mx-auto max-w-6xl px-5">
      <div class="flex h-screen items-center justify-center">
        <div class="w-full max-w-sm">
          <div class="mb-5 flex items-center justify-center">
            <img class="h-24" src="{{ asset('android-chrome-512x512.png') }}" alt="logo">
          </div>
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
          <div class="mt-5 text-center text-neutral-700">
            &copy;{{ date('Y') }} <a class="font-medium text-primary hover:underline"
              href="{{ url('/') }}">Happy
              Holiday</a> - All Rights Reserved
            </d>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>
