<x-client-layout>
  <x-slot:title>Kontak</x-slot:title>
  <header class="relative h-96">
    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/Hubbul_Wathan_Islamic_Center.jpg') }}"
      alt="tentang kami" />
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <div class="absolute inset-0">
      <div class="container mx-auto flex h-full max-w-6xl items-center justify-center px-6">
        <h1 class="max-w-2xl text-center text-3xl font-bold text-white md:text-5xl">Kontak
        </h1>
      </div>
    </div>
  </header>
  <section class="relative py-12">
    <div class="container mx-auto max-w-6xl px-6">
      <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        <img class="order-last h-96 w-full rounded-2xl object-cover md:order-first"
          src="{{ asset('images/f625881d-b405-4d28-987e-569d9a28f8f2_Large.jpeg') }}" alt="semangat pemuda" />
        <div class="flex flex-col justify-center">
          <h1 class="text-3xl font-bold">Let's Visit</h1>
          <p class="mt-4 text-lg text-gray-600">
            Kami dengan hangat mengundang Anda untuk mengunjungi kantor kami dan menjelajahi keindahan serta budaya
            daerah kami. Apakah Anda mencari petualangan, relaksasi, atau pemahaman yang lebih dalam tentang warisan
            kami, tim kami siap untuk membimbing Anda. Datang dan rasakan keramahan serta pesona yang membuat destinasi
            kami unik. Kami menantikan kedatangan Anda!
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="relative py-12">
    <div class="container mx-auto max-w-6xl px-6">
      <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        <div class="flex flex-col justify-center">
          <div class="mb-5">
            <h1 class="mb-4 text-2xl font-bold">Kantor</h1>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-primary" name="location-outline"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

          </div>
          <div class="mb-5">
            <h1 class="mb-4 text-2xl font-bold">Kontak</h1>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-primary" name="call-outline"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">0812-3456-7890</p>
            </div>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-green-600" name="logo-whatsapp"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">0812-3456-7890</p>
            </div>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-primary" name="mail-outline"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">happyholiday@gmail.com</p>
            </div>
          </div>
          <div class="mb-5">
            <h1 class="mb-4 text-2xl font-bold">Sosial Media</h1>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-blue-600" name="logo-facebook"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">@happy.holiday</p>
            </div>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-red-600" name="logo-instagram"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">@happy.holiday</p>
            </div>
            <div class="mb-3 flex flex-wrap gap-3">
              <ion-icon class="text-2xl text-blue-600" name="logo-twitter"></ion-icon>
              <p class="flex-1 text-lg text-gray-600">@happy.holiday</p>
            </div>
          </div>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.6919592259708!2d116.19802833167444!3d-8.559031497949663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc720384a52fd%3A0xe62f951ba6943d96!2sPenjahit%20Yuyun!5e0!3m2!1sid!2sid!4v1735303596992!5m2!1sid!2sid"
          style="border:0;" width="600" height="450" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <x-contact />
</x-client-layout>
