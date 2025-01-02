<x-admin.layout>
  <x-slot:title>Sub Paket</x-slot:title>
  <x-admin.header>Sub Paket</x-admin.header>

  @if ($subPackages->isNotEmpty())
    <div class="mb-5 flex items-center">
      <a class="flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
        href="/admin/sub-packages/create">Tambah Sub
        Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
    </div>
  @endif

  @if (session()->has('success'))
    <div class="mb-3 flex items-start justify-between rounded-lg border border-green-600 bg-green-100 p-5 text-green-600"
      x-data="{ show: true }" :class="{ 'hidden': !show }">
      {{ session('success') }}
      <button x-on:click="show=false">
        <ion-icon class="text-xl" name="close-outline" />
      </button>
    </div>
  @endif

  @if ($subPackages->isNotEmpty())
    <div class="space-y-5">
      @foreach ($subPackages as $sub)
        <x-card>
          <div class="relative flex flex-col gap-5 md:flex-row">
            <img class="h-32 w-full rounded-lg object-cover md:h-28 md:w-28"
              src="{{ $sub->image ? Storage::url($sub->image) : asset('images/sunrise-gili-trawangan.webp') }}"
              alt="{{ $sub->name }}" />
            <div>
              <h2 class="mb-2 text-xl font-semibold">{{ $sub->name }}</h2>
              <p class="mb-2 text-neutral-800">{{ $sub->package->name }}</p>
              <p class="mb-2 text-neutral-500">{{ Str::limit($sub->description, 100) }}</p>
            </div>
            <div class="absolute right-0 top-0 flex gap-2 p-2 md:p-0">
              <a class="flex h-8 items-center rounded-lg bg-primary px-3 text-sm text-white"
                href="/admin/sub-packages/{{ $sub->id }}/edit">Edit</a>
              <form action="/admin/sub-packages/{{ $sub->id }}" method="POST" x-data="{ submit: false }"
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
      {{ $subPackages->links() }}
    </div>
  @else
    <div class="flex h-full flex-col items-center justify-center">
      <img class="h-40 w-auto" src="{{ asset('images/rb_1233.png') }}" alt="empty" />
      <h2 class="mb-3 text-2xl font-semibold">Data tidak ditemukan</h2>
      <p class="text-neutral-500">Data sub paket tour tidak ditemukan. Silahkan tambah sub paket tour baru.</p>
      <a class="mt-3 flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
        href="/admin/sub-packages/create">Tambah sub
        Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
    </div>
  @endif
</x-admin.layout>
