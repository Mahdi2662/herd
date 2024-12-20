<x-layout>
    <x-slot name="heading">
        Job
    </x-slot>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="{{ route('jobs.edit', $job->id) }}">Edit Job</x-button>
        </p>
    @endcan
</x-layout>