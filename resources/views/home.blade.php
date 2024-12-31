<x-client-layout>
  <x-slot:title>
    Home
  </x-slot:title>

  <header class="relative h-screen max-h-[800px] bg-cover"
    style="background-image: url({{ asset('images/sunrise-gili-trawangan.webp') }})">
    <div
      class="container absolute inset-0 z-[2] mx-auto flex h-full max-w-6xl flex-col items-center justify-center px-6">
      <div class="max-w-xl text-center">
        <h2 class="mb-2 text-2xl font-bold text-white md:text-3xl">It's time to</h2>
        <h1 class="text-3xl font-bold text-white sm:mb-5 md:text-7xl">
          Wisata Lombok
        </h1>
        <p class="text-sm font-medium leading-loose text-white md:text-base">
          Ingin sebuah petualangan baru, pengalaman mistis, dan pantai santai? Anda perlu mengunjungi Lombok. Kami
          memastikan itu Anda akan mendapatkan pengalaman yang tidak akan pernah Anda lupakan.
        </p>
        <a class="mt-5 inline-flex items-center justify-center rounded-md bg-primary px-6 py-3 font-semibold text-white hover:bg-opacity-90"
          href="/packages">
          Lihat Tour
          <ion-icon class="ml-2" name="arrow-forward-outline"></ion-icon>
        </a>
      </div>
    </div>
    <div class="absolute inset-0 z-[1] h-full bg-black bg-opacity-50"></div>
  </header>

  <x-package-slide />

  <section class="bg-gray-100 py-12">
    <div class="container mx-auto max-w-6xl px-6">
      <div class="mb-12 text-center">
        <h2 class="text-3xl font-bold">Mengapa Memilih Kami</h2>
        <p class="mt-4 text-gray-600">Kami menawarkan pengalaman wisata terbaik dengan layanan yang tak tertandingi.</p>
      </div>
      <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-lg bg-white p-6 shadow-lg">
          <div class="mb-4">
            <ion-icon class="text-5xl text-primary" name="thumbs-up-outline"></ion-icon>
          </div>
          <h3 class="mb-2 text-xl font-semibold">Layanan Terbaik</h3>
          <p class="text-gray-600">Kami berkomitmen untuk memberikan layanan terbaik kepada setiap pelanggan kami.</p>
        </div>
        <div class="rounded-lg bg-white p-6 shadow-lg">
          <div class="mb-4">
            <ion-icon class="text-5xl text-secondary" name="wallet-outline"></ion-icon>
          </div>
          <h3 class="mb-2 text-xl font-semibold">Harga Terjangkau</h3>
          <p class="text-gray-600">Kami menawarkan paket wisata dengan harga yang sangat terjangkau.</p>
        </div>
        <div class="rounded-lg bg-white p-6 shadow-lg">
          <div class="mb-4">
            <ion-icon class="text-5xl text-orange-600" name="pulse-outline"></ion-icon>
          </div>
          <h3 class="mb-2 text-xl font-semibold">Pengalaman Tak Terlupakan</h3>
          <p class="text-gray-600">Setiap perjalanan dengan kami akan menjadi pengalaman yang tak terlupakan.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="relative py-12">
    <div class="container mx-auto max-w-6xl px-6">
      <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

        <div class="flex flex-col justify-center">
          <h1 class="mb-5 text-3xl font-bold md:text-4xl">
            Get in Love with Lombok
          </h1>
          <p class="mb-5 text-gray-600">Mari berwisata ke Lombok, surga tropis yang menawarkan keindahan alam memukau
            dan pengalaman tak terlupakan! Nikmati pesona pantai berpasir putih seperti Kuta Mandalika, jelajahi dunia
            bawah laut di Gili Trawangan, hingga menyaksikan matahari terbenam yang magis dari Bukit Merese. Setiap
            sudut Lombok menyimpan cerita dan keajaiban yang akan membuat liburan Anda
            menjadi kenangan indah sepanjang masa. Jangan ragu, jadikan Lombok destinasi berikutnya untuk petualangan
            Anda!</p>
          <a href="/packages">
            <button
              class="flex h-12 items-center justify-center gap-5 rounded-lg bg-primary px-5 font-semibold text-white hover:bg-opacity-90">
              Lihat Tour
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </a>
        </div>
        <div class="">
          <img class="h-96 w-full rounded-lg object-cover shadow-lg"
            src="{{ asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif') }}" alt="get in love with lombok"
            loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <x-contact />

</x-client-layout>
