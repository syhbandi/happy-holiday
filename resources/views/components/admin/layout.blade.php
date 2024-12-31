<x-layout>
  <x-slot:title>{{ $title ?? 'Dashboard |' }}</x-slot:title>
  <x-slot:scripts>{{ $scripts ?? '' }}</x-slot:scripts>
  <main class="relative flex min-h-screen flex-col bg-neutral-100 transition-all duration-500 ease-in-out md:pl-64"
    x-data="sidebar" :class="{ 'md:pl-64': open }">
    <x-admin.sidebar />
    <x-admin.navbar />
    <div class="flex-1 p-5">
      {{ $slot }}
    </div>
    <x-admin.footer />
  </main>
</x-layout>

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('sidebar', () => ({
      open: true,
      toggle() {
        this.open = !this.open;
      },
      init() {
        this.open = window.innerWidth > 768;
        window.addEventListener('resize', () => {
          this.open = window.innerWidth > 768;
        });
      }
    }));
  });
</script>
