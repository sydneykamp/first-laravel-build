<x-layout>
    {{-- This is a named slot --}}
    <x-slot:heading>Home Page</x-slot:heading>
    
    <h1>{{ $greeting }}</h1>
    <p>We love {{ $name }}</p>
</x-layout>