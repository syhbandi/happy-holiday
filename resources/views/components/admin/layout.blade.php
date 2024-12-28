<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
  </head>

  <body class="font-poppins">
    <main class="relative flex min-h-screen flex-col bg-neutral-100 transition-all duration-500 ease-in-out md:pl-64"
      x-data="sidebar" :class="{ 'md:pl-64': open }">
      <x-admin.sidebar />
      <x-admin.navbar />
      <div class="flex-1 p-5">
        {{ $slot }}
      </div>
      <x-admin.footer />
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

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
  </body>

</html>
