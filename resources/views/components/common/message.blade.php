<p>here is the message component</p>
@if ($flash = session('message'))
    <div class="h-10 w-44 bg-violet-800 text-white">
        {{ $flash }}
    </div>
@endif