<x-admin.layout>
  <x-slot:title>Edit Paket Tour</x-slot>
  <x-admin.header>Edit Paket</x-admin.header>

  @error('status')
    <div class="mb-5 rounded-lg border border-red-600 bg-red-100 p-4">{{ $message }}</div>
  @enderror
  <form action="/admin/packages/{{ $package->id }}" method="POST" enctype="multipart/form-data" x-data="{ isSubmitting: false }"
    @submit.prevent="isSubmitting = true; $el.submit()">
    @method('PUT')
    @csrf
    <div class="grid grid-cols-1 gap-x-3 md:grid-cols-3">
      <div class="col-span-2">
        <x-card>
          <x-input id="name" name="name" type="text" value="{{ $package->name }}" label="Nama Paket" />
          <x-input id="description" name="description" type="textarea" value="{{ $package->description }}"
            label="Deskripsi" />
          <x-input id="price" name="price" type="text" value="{{ $package->price }}" label="Harga" />
        </x-card>
      </div>

      <div class="mt-5 space-y-5 md:mt-0">
        <x-card>
          <x-input id="image" name="image" type="file" label="Gambar" />
        </x-card>
        <x-card>
          <x-admin.input-facility id="includes" name="includes" :value="$package->includes" label="Includes" />
        </x-card>
        <x-card>
          <x-admin.input-facility id="excludes" name="excludes" label="Excludes" :value="$package->excludes" />
        </x-card>
      </div>
    </div>

    <x-card class="mt-5">
      <div class="flex items-center justify-end gap-3">
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
    </x-card>
  </form>

</x-admin.layout>
