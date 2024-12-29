<div class="mb-5 flex flex-col items-center justify-between md:flex-row">
  <h1 class="flex-1 text-3xl font-bold">{{ $slot }}</h1>
  @php
    $segments = Request::segments();
  @endphp
  <nav class="breadcrumb">
    <ol class="list-reset text-grey-dark flex">
      @foreach ($segments as $index => $segment)
        <li>
          <a class="text-blue-500 hover:text-blue-700"
            href="{{ url(implode('/', array_slice($segments, 0, $index + 1))) }}">
            {{ ucfirst($segment) }}
          </a>
          @if (!$loop->last)
            <span class="mx-2">/</span>
          @endif
        </li>
      @endforeach
    </ol>
  </nav>
</div>
