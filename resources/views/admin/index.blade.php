<x-admin.layout>
  <x-admin.header>Dashboard</x-admin.header>
  <x-card>
    <h1 class="text-xl">Selamat datang <strong>{{ Auth::user()->name }}!</strong></h1>
  </x-card>
</x-admin.layout>
