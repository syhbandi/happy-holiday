<x-client-layout>
  <x-slot name="title">{{ $package->name }}</x-slot>
  <header class="relative h-96">
    <div class="absolute inset-0 -z-[1] bg-black opacity-50"></div>
    <div class="absolute inset-0 -z-[2]">
      <img class="h-full w-full object-cover" src="{{ asset('images/pantai-kuta-lombok-nusa-tenggara-barat.jpg') }}"
        alt="Package" />
    </div>
    <div class="container mx-auto flex h-full max-w-6xl items-center justify-center px-6">
      <h1 class="text-center text-3xl font-bold text-white md:text-5xl">Saatnya Berpetualang</h1>
    </div>
  </header>

  <main>
    <div class="container mx-auto max-w-4xl px-6 py-12">
      <h1 class="mb-10 text-center text-4xl font-bold text-gray-800">{{ $package->name }}</h1>
      <img class="mb-10 h-56 w-full rounded-lg object-cover md:h-96"
        src="{{ $package->image ? Storage::url($package->image) : asset('images/sunrise-gili-trawangan.webp') }}"
        alt="{{ $package->name }}" />
      <p class="mt-4 text-gray-600">{{ $package->description }}</p>
      <span class="font-semibold">
        {{ Number::currency($package->price, in: 'IDR', locale: 'ID') }}
      </span>
      <div class="mt-6">
        <a class="inline-block rounded-lg bg-primary px-6 py-3 text-white" href="/contact">Pesan Sekarang</a>
      </div>
    </div>
  </main>

  <x-contact />

  </x-layout>
