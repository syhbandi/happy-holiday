@props(['label', 'type'])
<div class="mt-2">
  <label class="text-sm font-medium md:text-base" for="{{ $attributes['id'] }}">{{ $label }}</label>
  @if ($type == 'textarea')
    <textarea
      class="{{ $errors->has($attributes['name']) ? 'border-red-600' : '' }} mt-2 h-32 w-full rounded-lg border border-neutral-300 p-4 outline-none focus:border-primary"
      {{ $attributes }}></textarea>
  @elseif ($type == 'file')
    <div x-data="imageUploader">
      <label
        class="{{ $errors->has($attributes['name']) ? 'border-red-600' : '' }} mt-2 flex h-11 w-full cursor-pointer items-center justify-center gap-2 rounded-lg border border-neutral-300 px-4 text-primary hover:bg-neutral-100"
        for="{{ $attributes['id'] }}">
        <ion-icon name="cloud-upload-outline"></ion-icon>
        Pilih File
      </label>
      <input type="file" {{ $attributes }} hidden x-on:change="handleFile($event)" />
      <div class="relative mt-3 overflow-hidden rounded-lg" x-show="imagePreview">
        <div class="absolute bottom-0 left-0 flex h-12 w-full items-end bg-gradient-to-t from-black">
          <button class="flex w-full items-center justify-center rounded-full py-2 text-white" type="button"
            x-on:click="removeFile">
            <ion-icon class="mr-2 text-lg text-red-600" name="trash-outline"></ion-icon>
            Hapus
          </button>
        </div>
        <img class="h-28 w-full object-cover" alt="Selected Image Preview" :src="imagePreview">
      </div>
    </div>

    <script>
      document.addEventListener('alpine:init', () => {
        Alpine.data('imageUploader', () => ({
          imagePreview: null,
          handleFile(event) {
            const file = event.target.files[0];
            if (file) {
              const reader = new FileReader();
              reader.onload = (e) => {
                this.imagePreview = e.target.result;
              };
              reader.readAsDataURL(file);
            }
          },
          removeFile() {
            this.imagePreview = null; // Hapus preview
            document.getElementById(`{{ $attributes['id'] }}`).value = ''; // Reset input file
          }
        }));
      });
    </script>
  @else
    <input
      class="{{ $errors->has($attributes['name']) ? 'border-red-600' : '' }} mt-2 h-11 w-full rounded-lg border border-neutral-300 px-4 outline-none focus:border-primary"
      type="{{ $type }}" {{ $attributes }} />
  @endif
  <x-input-error name="{{ $attributes['name'] }}" />
</div>
