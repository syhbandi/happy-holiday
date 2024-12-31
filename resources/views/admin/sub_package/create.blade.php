<x-admin.layout>
  <x-slot:title>Tambah Sub Paket</x-slot:title>
  <x-slot:scripts>
    <link type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  </x-slot:scripts>

  <x-admin.header>Tambah Sub Paket</x-admin.header>

  @error('status')
    <div class="mb-5 rounded-lg border border-red-600 bg-red-100 p-4">{{ $message }}</div>
  @enderror

  <form x-data="{ submit: false }" action="/admin/sub-packages" method="POST" @submit.prevent="submit = true; $el.submit()">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-3">
      <x-card class="col-span-2">
        <x-input id="name" name="name" type="text" value="{{ old('name') }}" label="Nama Paket" />
        <div class="mt-2">
          <label class="mb-2 block font-medium" for="package">Paket</label>
          <select class="h-11 w-full rounded-lg border border-neutral-200 px-4 outline-none focus:border-primary"
            id="package" name="package">
            <option value="">Pilih Paket Tour</option>
            @foreach ($packages as $package)
              <option value="{{ $package->id }}" {{ old('package') == $package->id ? 'selected' : '' }}>
                {{ $package->name }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="mt-2">
          <label class="mb-2 block font-medium" for="description">Deskripsi</label>
          <input id="description" name="description" type="hidden" />
          <trix-editor class="prose" input="description"></trix-editor>
          <x-input-error name="description" />
        </div>
        <div class="mt-2 flex items-center justify-end gap-3">
          <a class="flex h-11 items-center justify-center gap-2 rounded-lg border border-neutral-200 px-4 text-primary hover:bg-neutral-100"
            href="/admin/packages" role="button">
            <ion-icon class="text-lg" name="arrow-back-outline"></ion-icon>
            Batal
          </a>
          <button
            class="flex h-11 items-center justify-center gap-2 rounded-lg border border-primary bg-primary px-4 text-white hover:bg-opacity-90 disabled:cursor-not-allowed disabled:opacity-50"
            type="submit" :disabled="submit" x-text="submit ? 'Proses...':'Simpan'">
          </button>
        </div>
      </x-card>
    </div>
  </form>
</x-admin.layout>
