<x-client-layout>
  <x-slot:title>Tentang kami</x-slot:title>
  <header class="relative h-96">
    <img class="absolute inset-0 h-full w-full object-cover"
      src="{{ asset('images/d4d73ip-3e04e1e8-4d81-4d03-ad64-88511ad47860-mjE5LO27NRTV4bg2.avif') }}" alt="tentang kami"
      loading="lazy" />
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <div class="absolute inset-0">
      <div class="container mx-auto flex h-full max-w-6xl items-center justify-center px-6">
        <h1 class="max-w-2xl text-center text-3xl font-bold text-white md:text-5xl">Ketahui lebih banyak tentang kami
        </h1>
      </div>
    </div>
  </header>
  <section class="relative py-12">
    <div class="container mx-auto max-w-6xl px-6">
      <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        <div class="flex flex-col justify-center">
          <h1 class="text-3xl font-bold">Semangat pemuda</h1>
          <p class="mt-4 text-lg text-gray-600">Dengan semangat muda yang membara, kami bertekad untuk membawa
            pariwisata Lombok ke
            tingkat yang lebih tinggi. Kami percaya bahwa dengan inovasi, kreativitas, dan kerja keras, Lombok dapat
            menjadi destinasi wisata yang lebih dikenal dan dicintai oleh wisatawan dari seluruh dunia.</p>
        </div>
        <img class="h-96 w-full rounded-2xl object-cover"
          src="{{ asset('images/d4d73ip-3e04e1e8-4d81-4d03-ad64-88511ad47860-mjE5LO27NRTV4bg2.avif') }}"
          alt="semangat pemuda" loading="lazy" />
      </div>
    </div>
  </section>
  <x-contact />
</x-client-layout>
