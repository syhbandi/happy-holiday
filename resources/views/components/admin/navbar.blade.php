<nav class="flex h-16 items-center justify-between bg-white px-5 drop-shadow-md">
  <button x-on:click="toggle">
    <ion-icon class="text-xl" name="menu-outline"></ion-icon>
  </button>
  <div>
    <div>{{ Auth::user()->name }}</div>
  </div>
</nav>
