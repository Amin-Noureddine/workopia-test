<x-layout>

    <h1>Available Jobs</h1>

    {{-- The <ul> tag must enclose the entire @forelse/@empty block --}}
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <li>No Jobs Found</li>
        @endforelse
    </ul>

</x-layout>