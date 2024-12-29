<footer class="bg-gray-800 py-12 text-white">
  <div class="container mx-auto max-w-6xl px-6">
    <div class="mb-5 grid grid-cols-1 gap-5 md:grid-cols-4">
      <a href="/">
        <img class="h-24" src="{{ asset('android-chrome-512x512.png') }}" alt="happy holiday logo">
        <h1 class="text-2xl font-bold text-white">Happy Holiday</h1>
      </a>
      <div>
        <h2 class="mb-5 text-xl font-bold">Menu</h2>
        <ul class="flex flex-col gap-3 font-medium text-white">
          <li><a class="hover:underline" href="/">Home</a></li>
          <li><a class="hover:underline" href="/packages">Paket Tour</a></li>
          <li><a class="hover:underline" href="/about">Tentang Kami</a></li>
          <li><a class="hover:underline" href="/contact">Kontak</a></li>
        </ul>
      </div>
      <div class="">
        <h2 class="mb-5 text-xl font-bold">Kontak</h2>
        <a class="mb-3 flex flex-wrap gap-3 hover:underline" href="https://maps.app.goo.gl/xTThap87rq6UnSyB6"
          target="_blank">
          <ion-icon class="text-xl text-secondary" name="location-outline"></ion-icon>
          <p class="flex-1">Jl. Baiturrahman gang Harum No. 2 Mataram, Nusa Tenggara Barat, Indonesia</p>
        </a>
        <div class="mb-3 flex flex-wrap gap-3">
          <ion-icon class="text-xl text-secondary" name="logo-whatsapp"></ion-icon>
          <div class="flex flex-col">
            <a class="hover:underline" href="https://wa.me/62895384297876" target="_blank">
              0895-3842-97876
            </a>
            <a class="hover:underline" href="https://wa.me/6287743040833" target="_blank">
              0877-4304-0833
            </a>
          </div>
        </div>
        <a class="mb-3 flex flex-wrap gap-3 hover:underline" href="mailto:abahalkaff56@gmail.com">
          <ion-icon class="text-xl text-secondary" name="mail-outline"></ion-icon>
          <p class="flex-1">abahalkaff56@gmail.com</p>
        </a>
      </div>
      <div>
        <h2 class="mb-5 text-xl font-bold">Sosial Media</h2>
        <div class="flex gap-5">
          <a href="https://www.facebook.com/happyholiday" target="_blank">
            <ion-icon class="text-2xl text-secondary" name="logo-facebook"></ion-icon>
          </a>
          <a href="https://www.instagram.com/happyholyyday" target="_blank">
            <ion-icon class="text-2xl text-secondary" name="logo-instagram"></ion-icon>
          </a>
          <a href="https://tiktok.com/@happyholliday__" target="_blank">
            <ion-icon class="text-2xl text-secondary" name="logo-tiktok"></ion-icon>
          </a>
        </div>
      </div>
    </div>
    <div class="border-t border-neutral-500 pt-5">
      <p class="text-center text-neutral-300">© {{ date('Y') }} Happy Holiday. All rights reserved.</p>
    </div>
  </div>
</footer>
