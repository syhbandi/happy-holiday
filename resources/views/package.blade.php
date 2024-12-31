<x-client-layout>
  <x-slot name="title">Package</x-slot>
  <header class="relative h-96">
    <div class="absolute inset-0 -z-[1] bg-black opacity-50"></div>
    <div class="absolute inset-0 -z-[2]">
      <img class="h-full w-full object-cover" src="{{ asset('images/pantai-kuta-lombok-nusa-tenggara-barat.jpg') }}"
        alt="Package" loading='lazy' />
    </div>
    <div class="container mx-auto flex h-full max-w-6xl items-center justify-center px-6">
      <h1 class="text-center text-3xl font-bold text-white md:text-5xl">Saatnya Berpetualang</h1>
    </div>
  </header>

  <main>
    <div class="container mx-auto max-w-6xl px-6 py-12">
      <h1 class="mb-3 text-3xl font-bold text-gray-800">Paket Tour</h1>
      <p class="mb-10 text-gray-600">Temukan paket tour yang sesuai dengan kebutuhanmu.</p>
      <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($packages as $package)
          <a href="/packages/{{ $package->slug }}">
            <div class="rounded-2xl bg-white transition duration-300 hover:shadow-lg md:p-4">
              <img class="h-48 w-full rounded-lg object-cover"
                src="{{ $package->image ? Storage::url($package->image) : asset('images/sunrise-gili-trawangan.webp') }}"
                alt="{{ $package->name }}" loading="lazy" />
              <div class="mt-4" x-data>
                <h2 class="text-xl font-bold text-gray-800">{{ $package->name }}</h2>
                <p class="mt-4 text-gray-600">{{ Str::limit($package->description, 100) }}</p>
                <div class="mt-4 flex items-center justify-between">
                  <span class="text-primary">mulai dari*</span>
                  <span class="font-semibold">
                    {{ Number::currency($package->price, in: 'IDR', locale: 'ID') }}
                  </span>
                </div>
              </div>
            </div>
          </a>
        @endforeach
      </div>
      <div class="mt-3">
        {{ $packages->links() }}
      </div>
    </div>
  </main>

  <x-contact />

  </x-layout>
