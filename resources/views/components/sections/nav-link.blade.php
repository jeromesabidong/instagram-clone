@props(['href'])

<a href="{{ $href }}">
    <div class="flex place-items-center gap-3 hover:bg-slate-100/10 rounded-md py-3 mt-1">
        {{ $slot }}
    </div>
</a>