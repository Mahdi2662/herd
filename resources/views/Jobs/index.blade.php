<x-layout>

    <x-slot name="heading">
        Jobs listings
    </x-slot>
    <div class="space-y-4">
        @foreach ($jobs as $job)    
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-grey-200 rounden-lg">
                    <div class="fon-bold text-blue text-sm">{{ $job->employer->name }} </div>
                    <div>
                        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
        @endforeach
    
    
        <div>
            {{ $jobs->links() }}
        </div>
        </div>
    </x-layout>