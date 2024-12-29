<x-admin.layout>
  <x-admin.header>Paket Tour</x-admin.header>
  <div class="mb-5 flex items-center">
    <a class="flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
      href="/admin/packages/create">Tambah
      Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
  </div>

  @if (session()->has('success'))
    <div class="mb-3 rounded-lg border border-green-600 bg-green-100 p-5 text-green-600">
      {{ session('success') }}
    </div>
  @endif

  <div class="space-y-3">
    @foreach ($packages as $package)
      <x-card>
        <div class="relative flex flex-wrap gap-5">
          <img class="h-auto w-full rounded-lg object-cover md:h-28 md:w-28"
            src="{{ $package->image ? Storage::url($package->image) : asset('images/sunrise-gili-trawangan.webp') }}"
            alt="paket tour" />
          <div>
            <h2 class="mb-2 text-xl font-semibold">{{ $package->name }}</h2>
            <p class="mb-2 text-neutral-500">{{ Str::limit($package->description, 100) }}</p>
            <p class="font-semibold">{{ Number::currency($package->price, in: 'IDR', locale: 'id') }}</p>
            <button class="flex items-center text-sm font-medium text-primary">2 paket <ion-icon class="ml-2"
                name="chevron-down-outline"></ion-icon></button>
          </div>
          <div class="absolute right-0 top-0 flex gap-2 p-2 md:p-0">
            <a class="flex h-8 items-center rounded-lg bg-primary px-3 text-sm text-white"
              href="/admin/packages/{{ $package->slug }}/edit">Edit</a>
            <a class="flex h-8 items-center rounded-lg bg-red-600 px-3 text-sm text-white"
              href="/admin/packages/{{ $package->slug }}/edit">Hapus</a>
          </div>
        </div>
      </x-card>
    @endforeach
    {{ $packages->links() }}
  </div>

</x-admin.layout>
