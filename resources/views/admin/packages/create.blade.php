<x-admin.layout>
  <x-slot:title>Tambah Paket Tour</x-slot>
  <x-admin.header>Tambah Paket</x-admin.header>

  @error('status')
    <div class="mb-5 rounded-lg border border-red-600 bg-red-100 p-4">{{ $message }}</div>
  @enderror

  <form action="/admin/packages" method="POST" enctype="multipart/form-data" x-data="{ isSubmitting: false }"
    @submit.prevent="isSubmitting = true; $el.submit()">
    @csrf
    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-3">
      <div class="col-span-2">
        <x-card>
          <x-input id="name" name="name" type="text" value="{{ old('name') }}" label="Nama Paket" />
          <x-input id="description" name="description" type="textarea" value="{{ old('description') }}"
            label="Deskripsi" />
          <x-input id="price" name="price" type="text" value="{{ old('price') }}" label="Harga" />
        </x-card>
      </div>
      <div class="mt-5 space-y-5 md:mt-0">
        <x-card>
          <x-input id="image" name="image" type="file" value="{{ old('image') }}" label="Gambar" />
        </x-card>

        {{-- input includes --}}
        <x-card>
          <div x-data="{ includes: [] }">
            <label class="mb-2 block font-medium" for="includes">Includes</label>
            <template x-for="(include, index) in includes" :key="index">
              <div class="mb-2 flex items-center gap-2">
                <input class="h-11 rounded-lg border border-neutral-300 px-4 outline-none focus:border-primary"
                  type="text" :name="`includes[${index}]`" x-model="includes[index]" placeholder="e.g. Transport">
                <button
                  class="flex h-11 w-11 items-center justify-center rounded-lg border border-red-600 text-red-600 outline-none"
                  type="button" @click="includes.splice(index, 1)">
                  <ion-icon name="trash-outline"></ion-icon>
                </button>
              </div>
            </template>
            <button class="font-sm h-8 text-primary" type="button" @click="includes.push('')">Tambah Include</button>
          </div>
        </x-card>

        {{-- input excludes --}}
        <x-card>
          <div x-data="{ excludes: [] }">
            <label class="mb-2 block font-medium" for="excludes">Excludes</label>
            <template x-for="(exclude, index) in excludes" :key="index">
              <div class="mb-2 flex items-center gap-2">
                <input class="h-11 rounded-lg border border-neutral-300 px-4 outline-none focus:border-primary"
                  type="text" :name="`excludes[${index}]`" x-model="excludes[index]" placeholder="e.g. Transport">
                <button
                  class="flex h-11 w-11 items-center justify-center rounded-lg border border-red-600 text-red-600 outline-none"
                  type="button" @click="excludes.splice(index, 1)">
                  <ion-icon name="trash-outline"></ion-icon>
                </button>
              </div>
            </template>
            <button class="font-sm h-8 text-primary" type="button" @click="excludes.push('')">Tambah Exclude</button>
          </div>
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
