<li>
  <a class="{{ request()->is(Str::after($attributes['href'], '/')) ? 'bg-primary text-neutral-100' : 'text-neutral-600' }} flex h-12 items-center gap-3 rounded-lg px-5 hover:bg-primary hover:text-neutral-100"
    {{ $attributes }}>
    <ion-icon class="text-lg" name="{{ $icon }}"></ion-icon>
    {{ $slot }}
  </a>
</li>
