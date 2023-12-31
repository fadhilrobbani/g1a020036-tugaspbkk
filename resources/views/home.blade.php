<x-main-layout>
    <x-slot:title>
        Home | SI Perpustakaan
    </x-slot:title>
    <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center mt-6 mx-8 gap-4">
        @foreach ($books as $book)
            <x-book :book='$book' />
        @endforeach
    </main>
</x-main-layout>
