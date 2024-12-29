<x-admin.layout>
  <x-admin.header>Paket Tour</x-admin.header>
  <div class="mb-5 flex items-center">
    <a class="flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
      href="/admin/packages/create">Tambah
      Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
  </div>

  @if (session()->has('success'))
    <div class="rounded-lg border border-green-600 bg-green-100 p-5 text-green-600">
      {{ session('success') }}
    </div>
  @endif

  <div class="space-y-3">
    @foreach ($packages as $package)
      <x-card>
        <div class="relative flex flex-wrap gap-5">
          <img class="h-28 w-full rounded-lg object-cover md:w-28"
            src="{{ $package->image ? Storage::url($package->image) : asset('images/sunrise-gili-trawangan.webp') }}"
            alt="paket tour" />
          <div>
            <h2 class="mb-2 text-xl font-semibold">{{ $package->name }}</h2>
            <p class="mb-2 text-neutral-500">{{ Str::limit($package->description, 100) }}</p>
            <p class="font-semibold">{{ Number::currency($package->price, in: 'IDR', locale: 'id') }}</p>
            <button class="flex items-center text-sm font-medium text-primary">2 paket <ion-icon class="ml-2"
                name="chevron-down-outline"></ion-icon></button>
          </div>
        </div>
      </x-card>
    @endforeach
    {{ $packages->links() }}
  </div>

</x-admin.layout>
