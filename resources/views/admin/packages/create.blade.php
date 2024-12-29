<x-admin.layout>
  <x-slot:title>Tambah Paket Tour</x-slot>
  <x-admin.header>Tambah Paket</x-admin.header>

  <x-card class="w-full md:w-1/2">
    @error('status')
      <div class="mb-5 rounded-lg border border-red-600 bg-red-100 p-4">{{ $message }}</div>
    @enderror
    <form action="/admin/packages" method="POST" enctype="multipart/form-data" x-data="{ isSubmitting: false }"
      @submit.prevent="isSubmitting = true; $el.submit()">
      @csrf
      <div class="grid grid-cols-1 gap-3">
        <x-input id="name" name="name" type="text" value="{{ old('name') }}" label="Nama Paket" />
        <x-input id="description" name="description" type="textarea" value="{{ old('description') }}"
          label="Deskripsi" />
        <x-input id="price" name="price" type="text" value="{{ old('price') }}" label="Harga" />
        <x-input id="image" name="image" type="file" value="{{ old('image') }}" label="Gambar" />
        <div class="mt-3 flex items-center justify-between">
          <a class="flex h-11 items-center justify-center gap-2 rounded-lg border border-neutral-200 px-4 text-primary hover:bg-neutral-100"
            href="/admin/packages" role="button">
            <ion-icon class="text-lg" name="arrow-back-outline"></ion-icon>
            Batal
          </a>
          <button
            class="flex h-11 items-center justify-center gap-2 rounded-lg border border-primary bg-primary px-4 text-white hover:bg-opacity-90 disabled:cursor-not-allowed disabled:opacity-50"
            type="submit" :disabled="isSubmitting" x-text="isSubmitting ? 'Proses...':'Simpan'">
          </button>
        </div>
      </div>
    </form>
  </x-card>
</x-admin.layout>
