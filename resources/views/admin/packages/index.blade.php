<x-admin.layout>
  <x-admin.header>Paket Tour</x-admin.header>
  <div class="mb-5 flex items-center">
    <a class="flex h-11 items-center rounded-lg bg-primary px-5 font-medium text-white hover:bg-opacity-80"
      href="/admin/packages/create">Tambah
      Paket <ion-icon class="ml-2 text-xl" name="add-outline"></ion-icon></a>
  </div>
  <x-card>
    <div class="relative flex flex-wrap gap-5">
      <img class="h-28 w-28 flex-1 rounded-lg object-cover md:shrink"
        src="{{ asset('images/d4d73ip-3e04e1e8-4d81-4d03-ad64-88511ad47860-mjE5LO27NRTV4bg2.avif') }}" alt="paket tour" />
      <div>
        <h2 class="mb-2 text-xl font-semibold">Tour Lombok 2 hari 1 malam</h2>
        <p class="mb-2 text-neutral-500">sequi pariatur! Obcaecati similique voluptas, nesciunt veritatis soluta quod
          harum incidunt
          consequuntur.</p>
        <p class="font-semibold">{{ Number::currency(254000, in: 'IDR', locale: 'id') }}</p>
        <button class="flex items-center text-sm font-medium text-primary">2 paket <ion-icon class="ml-2"
            name="chevron-down-outline"></ion-icon></button>
      </div>
    </div>
  </x-card>
</x-admin.layout>
