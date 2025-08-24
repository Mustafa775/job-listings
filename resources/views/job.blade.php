<x-layout>
    <x-slot:title> Job </x-slot:title>
    <x-slot:heading> Job </x-slot:heading>

    <h2 class="font-bold text-lg"> {{$job['title']}}</h2>
    <p> Being a {{$job['title']}} gives you {{$job['salary']}} a year.</p>
</x-layout>
