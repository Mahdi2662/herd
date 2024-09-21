<x-layout>

<x-slot name="heading">
        Job
    </x-slot>
    <ul>
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

        <p>
            this job pays {{$job['salary']}}
        </p>
</ul>
</x-layout>
