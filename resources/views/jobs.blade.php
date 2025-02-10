<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li><a class="hover:underline" href="/jobs/{{ $job['id'] }}"><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year</a></li>
        @endforeach
    </ul>
</x-layout>