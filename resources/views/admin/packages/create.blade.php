<x-admin.layout>
  <x-slot:title>Tambah Paket Tour</x-slot>
  <x-admin.header>Tambah Paket</x-admin.header>

  <x-card class="w-full md:w-1/2">
    <form action="/admin/packages" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="grid grid-cols-1 gap-3">
        <x-input id="name" name="name" type="text" label="Nama Paket" />
        <x-input id="description" name="desctiprion" type="textarea" label="Deskripsi" />
        <x-input id="price" name="price" type="text" label="Harga" />
        <x-input id="image" name="image" type="file" label="Gambar" />
        <div class="mt-3 flex items-center justify-between">
          <a class="flex h-11 items-center justify-center gap-2 rounded-lg border border-neutral-200 px-4 text-primary hover:bg-neutral-100"
            href="/admin/packages" role="button">
            <ion-icon class="text-lg" name="arrow-back-outline"></ion-icon>
            Batal
          </a>
          <button
            class="flex h-11 items-center justify-center gap-2 rounded-lg border border-primary bg-primary px-4 text-white hover:bg-opacity-90"
            type="submit">
            Simpan
          </button>
        </div>
      </div>
    </form>
  </x-card>
</x-admin.layout>
