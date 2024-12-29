<x-admin.layout>
  <x-slot:title>Tambah Paket Tour</x-slot>
  <x-admin.header>Tambah Paket</x-admin.header>

  <x-card>
    <form action="/admin/packages" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="grid grid-cols-2 gap-5">
        <div>
          <label class="block text-sm font-medium text-gray-700" for="name">Nama Paket</label>
          <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" id="name" name="name"
            type="text" value="{{ old('name') }}">
          @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700" for="price">Harga Paket</label>
          <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" id="price" name="price"
            type="text" value="{{ old('price') }}">
          @error('price')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700" for="image">Gambar</label>
          <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" id="image" name="image"
            type="file">
          @error('image')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700" for="description">Deskripsi</label>
          <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" id="description" name="description">{{ old('description') }}</textarea>
          @error('description')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <div class="mt-5">
        <button
          class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          type="submit">Simpan</button>
      </div>
    </form>
  </x-card>
</x-admin.layout>
