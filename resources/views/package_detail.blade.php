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
      <h1 class="mb-3 text-center text-4xl font-bold text-gray-800">{{ $package->name }}</h1>
      <h2 class="mb-10 text-center text-xl font-medium text-gray-600">
        Harga mulai dari <span
          class="font-bold text-gray-800">{{ Number::currency($package->price, in: 'IDR', locale: 'ID') }}</span>
      </h2>
      <img class="mb-10 h-56 w-full rounded-lg object-cover md:h-96"
        src="{{ $package->image ? Storage::url($package->image) : asset('images/sunrise-gili-trawangan.webp') }}"
        alt="{{ $package->name }}" />
      <p class="my-5 text-gray-600">{{ $package->description }}</p>

      @if ($package->includes)
        <div class="mb-5">
          <h3 class="mb-2 text-base font-semibold">Includes</h3>
          <ul>
            @foreach ($package->includes as $include)
              <li class="flex items-center gap-3"><ion-icon class="text-xl text-green-600"
                  name="checkmark-outline"></ion-icon>{{ $include }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @if ($package->excludes)
        <div class="mb-5">
          <h3 class="mb-2 text-base font-semibold">Excludes</h3>
          <ul>
            @foreach ($package->excludes as $exclude)
              <li class="flex items-center gap-3"><ion-icon class="text-xl text-red-600"
                  name="close-outline"></ion-icon>{{ $exclude }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{ json_encode($package) }}
    </div>
  </main>

  <x-contact />

  </x-layout>
