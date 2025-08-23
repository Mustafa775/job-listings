<x-layout>
    <x-slot:title> Jobs </x-slot:title>
    <x-slot:heading> Job listings </x-slot:heading>

    <ul>
    @foreach($jobs as $job)
            <li>
             <a href="/jobs/">
                 <strong>{{ $job['title'] }}:</strong> makes {{ $job['salary'] }} per year.
             </a>
            </li>
    @endforeach
    </ul>

</x-layout>
