@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li style="color: red;font-weight: bold; font-size: 13px ; margin: 10px" >{{ $message }}</li>
        @endforeach
    </ul>
@endif