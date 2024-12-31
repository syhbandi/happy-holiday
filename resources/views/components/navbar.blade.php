<nav class="fixed inset-0 z-10 h-fit w-full text-white" x-data="nav"
  :class="{ 'bg-white shadow-md text-neutral-900': scroll, 'text-white': !scroll }">

  {{-- large screen navbar --}}
  <div class="container mx-auto max-w-6xl px-6">
    <div class="flex w-full items-center justify-between">
      <a href="/">
        <img class="w-14 lg:w-20" src="/android-chrome-512x512.png" alt="Happy Holiday" loading="lazy">
      </a>
      <ul class="hidden space-x-10 lg:flex">
        <x-nav-link href="/" greet="hai">Home</x-nav-link>
        <x-nav-link href="/packages">Paket Tour</x-nav-link>
        <x-nav-link href="/about">Tentang Kami</x-nav-link>
        <x-nav-link href="/contact">Kontak</x-nav-link>
      </ul>
      <button class="lg:hidden" x-on:click="open = !open">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>

  {{-- mobile navbar --}}
  <div
    class="fixed right-0 top-0 z-20 h-full w-full translate-x-full bg-white transition-all duration-500 ease-in-out md:w-[300px] lg:hidden"
    :class="{ 'translate-x-0 text-neutral-800': open, 'translate-x-full': !open }">
    <div class="flex items-center justify-between px-6">
      <a href="/">
        <img class="w-14" src="/android-chrome-512x512.png" alt="Happy Holiday" loading="lazy">
      </a>
      <button x-on:click="open = !open">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <ul class="flex flex-col space-y-4 px-6 py-4">
      <x-nav-link href="/" greet="hai">Home</x-nav-link>
      <x-nav-link href="/packages">Paket Tour</x-nav-link>
      <x-nav-link href="/about">Tentang Kami</x-nav-link>
      <x-nav-link href="/contact">Kontak</x-nav-link>
    </ul>
  </div>

  <div class="absolute inset-0 hidden h-screen bg-black bg-opacity-50" :class="{ 'block': open, 'hidden': !open }"
    x-on:click="open = false">
  </div>
</nav>

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('nav', () => ({
      scroll: false,
      open: false,

      init() {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
        window.addEventListener('scroll', () => {
          this.scroll = (window.scrollY > 50) ? true : false
        })
      },

      toggle() {
        this.open = !this.open
      }
    }))
  })
</script>
