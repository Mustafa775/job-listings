<x-layout>
    <x-slot:title> Jobs </x-slot:title>
    <x-slot:heading> Job listings </x-slot:heading>

    <ul>
    @foreach($jobs as $job)
            <li>
             <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                 <strong>{{ $job['title'] }}:</strong> makes {{ $job['salary'] }} per year.
             </a>
            </li>
    @endforeach
    </ul>

</x-layout>
