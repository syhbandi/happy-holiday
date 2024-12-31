<nav class="flex h-16 items-center justify-between bg-white px-5 drop-shadow-md">
  <button x-on:click="toggle">
    <ion-icon class="text-xl" name="menu-outline"></ion-icon>
  </button>
  <div class="relative py-3" x-data="{ show: false }">
    <button class="flex items-center justify-center gap-2" x-on:click="show=!show">
      <p>{{ Auth::user()->name }}</p>
      <ion-icon name="caret-down-outline"></ion-icon>
    </button>
    <div class="absolute right-0 top-full min-w-full overflow-hidden rounded-lg bg-white drop-shadow-md"
      x-on:click.outside="show=false" x-cloak x-show="show" x-transition.duration.300ms>
      <a class="flex h-10 items-center gap-3 px-5 hover:bg-neutral-100" href="/admin/profile" role="button"><ion-icon
          name="person-outline"></ion-icon>Profil</a>
      <a class="flex h-10 items-center gap-3 px-5 hover:bg-neutral-100" href="/admin/logout" role="button"><ion-icon
          name="log-out-outline"></ion-icon>Logout</a>
    </div>

  </div>
</nav>
