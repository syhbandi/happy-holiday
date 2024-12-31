<x-layout>
  <x-slot:title>{{ $title ?? '' }}</x-slot>
  <x-slot:description>{{ $description ?? 'Nikmasi wisata di lombok bersama Happy Holiday' }}</x-slot>
  <x-slot:keywords>{{ $keywords ?? 'lombok, happy holiday, tour, travel, adventure, culture, wisata, budaya, destinasi' }}</x-slot>
  <x-navbar />
  {{ $slot }}
  <x-contact-button />
  <x-footer />
</x-layout>
