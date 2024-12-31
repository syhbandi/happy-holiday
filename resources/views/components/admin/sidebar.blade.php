<aside
  class="fixed inset-0 z-10 w-full border-r border-neutral-200 bg-white transition-transform duration-500 ease-in-out sm:w-64 md:min-h-screen"
  :class="{ '-translate-x-full': !open }">
  <div class="flex h-16 items-center justify-between px-5">
    <a class="text-2xl font-bold text-white" href="/">
      <img class="h-16" src="{{ asset('android-chrome-512x512.png') }}" alt="logo">
    </a>
    <button class="md:hidden" x-on:click="toggle">
      <ion-icon class="text-xl" name="close-outline"></ion-icon>
    </button>
  </div>
  <ul class="mt-10 space-y-3 px-5">
    <x-admin.navbar-link href="/admin" icon="stats-chart-outline">Dashboard</x-admin.navbar-link>
    <x-admin.navbar-link href="/admin/packages" icon="albums-outline">Paket Tour</x-admin.navbar-link>
    <x-admin.navbar-link href="/admin/sub-packages" icon="albums-outline">Sub Paket Tour</x-admin.navbar-link>
    <x-admin.navbar-link href="/admin/logout" icon="log-out-outline">Logout</x-admin.navbar-link>
  </ul>
</aside>
