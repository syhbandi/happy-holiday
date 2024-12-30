<x-admin.layout>
  <x-admin.header>Paket Tour</x-admin.header>
  <div class="{{ $packages->isEmpty() ? 'hidden' : '' }} mb-5 flex items-center">
    <a class="flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
      href="/admin/packages/create">Tambah
      Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
  </div>

  @if (session()->has('success'))
    <div class="mb-3 flex items-start justify-between rounded-lg border border-green-600 bg-green-100 p-5 text-green-600"
      x-data="{ show: true }" :class="{ 'hidden': !show }">
      {{ session('success') }}
      <button x-on:click="show=false">
        <ion-icon class="text-xl" name="close-outline" />
      </button>
    </div>
  @endif

  <div class="{{ $packages->isEmpty() ? 'hidden' : '' }} space-y-3">
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
            <form action="/admin/packages/{{ $package->id }}" method="POST" x-data="{ submit: false }"
              @submit.prevent="if(confirm('Apakah anda yakin?')){submit=true; $el.submit()}">
              @csrf
              @method('DELETE')
              <button
                class="flex h-8 items-center rounded-lg bg-red-600 px-3 text-sm text-white disabled:cursor-not-allowed disabled:opacity-50"
                type="submit" :disabled="submit" x-text="submit ? 'Proses...':'Hapus'"></button>
            </form>
          </div>
        </div>
      </x-card>
    @endforeach
    {{ $packages->links() }}
  </div>

  <div class="{{ $packages->isNotEmpty() ? 'hidden' : '' }} flex h-full flex-col items-center justify-center">
    <img class="h-40 w-auto" src="{{ asset('images/rb_1233.png') }}" alt="empty" />
    <h2 class="mb-3 text-2xl font-semibold">Data tidak ditemukan</h2>
    <p class="text-neutral-500">Data paket tour tidak ditemukan. Silahkan tambah paket tour baru.</p>
    <a class="mt-3 flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
      href="/admin/packages/create">Tambah
      Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
  </div>

</x-admin.layout>
