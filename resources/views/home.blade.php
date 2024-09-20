<x-layout>

    <x-slot name="heading">
        Home page
    </x-slot>

    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.</li>
    @endforeach
</x-layout>