<footer class="bg-gray-800 py-12 text-white">
  <div class="container mx-auto max-w-6xl px-6">
    <div class="mb-5 grid grid-cols-1 gap-5 md:grid-cols-4">
      <div>
        <img class="h-24" src="{{ asset('android-chrome-512x512.png') }}" alt="happy holiday logo">
        <h1 class="text-2xl font-bold text-white">Happy Holiday</h1>
      </div>
      <div>
        <h2 class="mb-5 text-xl font-bold">Menu</h2>
        <ul class="flex flex-col gap-3 font-medium text-white">
          <li><a class="hover:text-primary" href="/">Home</a></li>
          <li><a class="hover:text-primary" href="/packages">Paket Tour</a></li>
          <li><a class="hover:text-primary" href="/about">Tentang Kami</a></li>
          <li><a class="hover:text-primary" href="/contact">Kontak</a></li>
        </ul>
      </div>
      <div class="">
        <h2 class="mb-5 text-xl font-bold">Kontak</h2>
        <div class="mb-3 flex flex-wrap gap-3">
          <ion-icon class="text-xl text-secondary" name="location-outline"></ion-icon>
          <p class="flex-1">Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="mb-3 flex flex-wrap gap-3">
          <ion-icon class="text-xl text-secondary" name="call-outline"></ion-icon>
          <p class="flex-1">0812-3456-7890</p>
        </div>
        <div class="mb-3 flex flex-wrap gap-3">
          <ion-icon class="text-xl text-secondary" name="mail-outline"></ion-icon>
          <p class="flex-1">happyholiday@gmail.com</p>
        </div>
      </div>
      <div>
        <h2 class="mb-5 text-xl font-bold">Sosial Media</h2>
        <div class="flex gap-5">
          <a href="">
            <ion-icon class="text-2xl text-secondary" name="logo-facebook"></ion-icon>
          </a>
          <a href="">
            <ion-icon class="text-2xl text-secondary" name="logo-instagram"></ion-icon>
          </a>
          <a href="">
            <ion-icon class="text-2xl text-secondary" name="logo-twitter"></ion-icon>
          </a>
        </div>
      </div>
    </div>
    <div class="border-t border-neutral-500 pt-5">
      <p class="text-center text-neutral-300">© {{ date('Y') }} Happy Holiday. All rights reserved.</p>
    </div>
  </div>
</footer>
