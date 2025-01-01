<x-admin.layout>
  <x-slot:title>Profil</x-slot:title>
  <x-admin.header>Profil</x-admin.header>

  @if (session()->has('success'))
    <div class="mb-3 flex items-start justify-between rounded-lg border border-green-600 bg-green-100 p-5 text-green-600"
      x-data="{ show: true }" :class="{ 'hidden': !show }">
      {{ session('success') }}
      <button x-on:click="show=false">
        <ion-icon class="text-xl" name="close-outline" />
      </button>
    </div>
  @endif

  @if (session()->has('error'))
    <div class="mb-3 flex items-start justify-between rounded-lg border border-red-600 bg-red-100 p-5 text-red-600"
      x-data="{ show: true }" :class="{ 'hidden': !show }">
      {{ session('error') }}
      <button x-on:click="show=false">
        <ion-icon class="text-xl" name="close-outline" />
      </button>
    </div>
  @endif

  <div class="grid grid-cols-1 space-x-5 md:grid-cols-3">
    <x-card>
      <div class="flex">
        <a class="ml-auto flex h-10 items-center justify-center gap-2 rounded-lg px-3 text-primary hover:bg-neutral-100"
          href="{{ request()->fullUrlWithQuery(['edit' => 'profile']) }}" role="button">
          <ion-icon name="create-outline"></ion-icon>
          <span>Edit</span>
        </a>
      </div>
      <div class="mx-auto my-10 flex h-24 w-24 items-center justify-center rounded-full bg-neutral-100">
        <ion-icon class="text-5xl text-neutral-600" name="person-outline"></ion-icon>
      </div>
      <div class="border-b border-neutral-100 py-2">
        <div class="text-sm text-neutral-400">Nama</div>
        <div class="text-neutral-800">{{ $user->name }}</div>
      </div>
      <div class="border-b border-neutral-100 py-2">
        <div class="text-sm text-neutral-400">Username</div>
        <div class="text-neutral-800">{{ $user->username }}</div>
      </div>
      <div class="border-b border-neutral-100 py-2">
        <div class="text-sm text-neutral-400">Email</div>
        <div class="text-neutral-800">{{ $user->email }}</div>
      </div>
      <div class="flex items-center justify-between py-2">
        <div>
          <div class="text-sm text-neutral-400">Password</div>
          <div class="text-neutral-800">******</div>
        </div>
        <a class="flex h-10 items-center gap-2 rounded-lg px-3 text-primary hover:bg-neutral-100"
          href="{{ request()->fullUrlWithQuery(['edit' => 'password']) }}" role="button">
          Ganti
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </a>
      </div>
    </x-card>

    {{-- edit profile --}}
    @if (request('edit') == 'profile')
      <div class="col-span-2">
        <x-card>
          <div class="flex items-center justify-between">
            <h1 class="text-xl font-semibold text-neutral-800">Edit Profil</h1>
            <a class="flex h-10 items-center gap-2 rounded-lg px-3 text-primary hover:bg-neutral-100"
              href="/admin/profile" role="button">
              <ion-icon class="text-2xl" name="close-outline"></ion-icon>
            </a>
          </div>
          <form action="/admin/profile" method="POST" x-data="{ submit: false }"
            x-on:submit.prevent="submit=true; $el.submit()">
            @csrf
            <x-input id="name" name="name" type="text" value="{{ $user->name }}" label="Nama" />
            <x-input id="username" name="username" type="text" value="{{ $user->username }}" label="Username" />
            <x-input id="email" name="email" type="email" value="{{ $user->email }}" label="Email" />
            <div class="mt-3">
              <button
                class="flex h-11 items-center justify-center gap-2 rounded-lg border border-primary bg-primary px-4 text-white hover:bg-opacity-90 disabled:cursor-not-allowed disabled:opacity-50"
                type="submit" :disabled="submit" x-text="submit ? 'Proses...':'Simpan'">
            </div>
          </form>
        </x-card>
      </div>
    @endif

    @if (request('edit') == 'password')
      {{-- edit password --}}
      <div class="col-span-2">
        <x-card>
          <div class="flex items-center justify-between">
            <h1 class="text-xl font-semibold text-neutral-800">Ganti Password</h1>
            <a class="flex h-10 items-center gap-2 rounded-lg px-3 text-primary hover:bg-neutral-100"
              href="/admin/profile" role="button">
              <ion-icon class="text-2xl" name="close-outline"></ion-icon>
            </a>
          </div>
          <form action="/admin/profile/password" method="POST" x-data="{ submit: false }"
            x-on:submit.prevent="submit=true; $el.submit()">
            @csrf
            <x-input id="current_password" name="current_password" type="password"
              value="{{ old('current_password') }}" label="Password Saat Ini" />
            <x-input id="password" name="password" type="password" value="{{ old('password') }}"
              label="Password Baru" />
            <x-input id="password_confirmation" name="password_confirmation" type="password"
              label="Konfirmasi Password" />
            <div class="mt-3">
              <button
                class="flex h-11 items-center justify-center gap-2 rounded-lg border border-primary bg-primary px-4 text-white hover:bg-opacity-90 disabled:cursor-not-allowed disabled:opacity-50"
                type="submit" :disabled="submit" x-text="submit ? 'Proses...':'Simpan'">
            </div>
        </x-card>
      </div>
    @endif

  </div>
</x-admin.layout>
