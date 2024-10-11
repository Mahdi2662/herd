<x-layout>

<x-slot name="heading">
        Jobs listings
    </x-slot>
    <ul>
        @foreach ($job as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:uderline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
            </li>
        @endforeach
</ul>
</x-layout>