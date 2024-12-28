<x-layout>
  <x-slot:title>{{ $title ?? '' }}</x-slot>
  <x-navbar />
  {{ $slot }}
  <x-contact-button />
  <x-footer />
</x-layout>
