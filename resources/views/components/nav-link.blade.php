<li>
  <a class="{{ url()->current() === url($attributes['href']) ? 'text-secondary' : '' }} text-base font-medium"
    {{ $attributes }}>{{ $slot }}</a>
</li>
