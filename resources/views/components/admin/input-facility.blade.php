@props(['label', 'value'])
<div x-data="{ {{ $attributes['name'] }}: {{ $value == '' ? '[]' : $value }} }">
  <div class="text-sm font-medium md:text-base" for="{{ $attributes['id'] }}">{{ $label }}</div>
  <template x-for="(fac, index) in {{ $attributes['name'] }}" :key="index">
    <div class="mb-2 flex items-center gap-2">
      <input class="h-11 rounded-lg border border-neutral-300 px-4 outline-none focus:border-primary" type="text"
        :name="`{{ $attributes['name'] }}[${index}]`" x-model="{{ $attributes['name'] }}[index]"
        placeholder="e.g. Transport">
      <button
        class="flex h-11 w-11 items-center justify-center rounded-lg border border-red-600 text-red-600 outline-none"
        type="button" x-on:click="{{ $attributes['name'] }}.splice(index, 1)">
        <ion-icon name="trash-outline"></ion-icon>
      </button>
    </div>
  </template>
  <button class="font-sm h-8 text-primary" type="button" x-on:click="{{ $attributes['name'] }}.push('')">Tambah
    {{ $label }}</button>
</div>
