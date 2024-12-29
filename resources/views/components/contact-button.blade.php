<div class="fixed bottom-0 right-0 z-10 -translate-x-3" x-data="{ open: false }">
  <div class="relative">
    <button
      class="flex items-center justify-center gap-2 rounded-t-xl bg-green-600 px-4 py-3 font-medium text-white hover:bg-green-700"
      x-on:click="open = !open">
      <ion-icon name="logo-whatsapp"></ion-icon>
      Chat dengan kami
    </button>
    <div class="absolute -top-3 right-0 -translate-y-full overflow-hidden rounded-lg bg-white drop-shadow-md"
      x-show="open" x-on:click.away="open = false">
      <div class="flex w-full flex-col">
        <a class="w-full border-b border-neutral-200 p-3 font-medium hover:bg-green-600 hover:text-white"
          href="https://wa.me/62895384297876" target="_blank">Chat admin 1</a>
        <a class="w-full border-b border-neutral-200 p-3 font-medium hover:bg-green-600 hover:text-white"
          href="https://wa.me/6287743040833" target="_blank">Chat admin 2</a>
      </div>
    </div>
  </div>
</div>
