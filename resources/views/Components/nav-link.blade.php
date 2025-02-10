{{-- $attributes gets any attribute from that element. THis can be things like an id, class, href, etc. --}}
{{-- <a {{ $attributes }}>{{ $slot }}</a> --}}

{{-- You can also make type a prop, this allows us to use the styles and states on more than just the a tag. --}}

{{-- Props are anything that aren't HTML attributes --}}
@props(['active' => false, 'type' => 'a'])

@if ($type == 'a')
   <a class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'font-medium text-white' }}" 
      aria-current="{{ $active ? 'page' : 'false' }}" 
      {{ $attributes }}>
      {{ $slot }}
   </a>
@else
   <button class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'font-medium text-white' }}" 
      aria-current="{{ $active ? 'page' : 'false' }}" 
      {{ $attributes }}>
      {{ $slot }}
   </button>
@endif

{{-- You can replace the tag with <{ $type }> but this can throw some errors in the code, using an if statement is better practice.   --}}
