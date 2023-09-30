<x-dashboard-layout>
    <x-slot:title>
        Update book
    </x-slot:title>
    @php
        $type = 'error';
        $messages = $errors->all();
    @endphp
    @if ($errors->any())
        <x-notification :type='$type' :messages='$messages' />
    @endif

    <form class="space-y-6" action="{{ route('update-book', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="book_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book
                Code</label>
            <input type="text" name="book_code" id="book_code" value="{{ $book->book_code }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Example: A001-01" required>
        </div>
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" name="title" id="title" placeholder="Example: Laravel Book"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                value="{{ $book->title }}" required>
        </div>
        <div>
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <input type="text" name="description" id="description" placeholder="Example: This is laravel tutorial"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                value="{{ $book->description }}" required>
        </div>
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
        <div class="flex gap-3">
            <div>
                <div class="flex items-center mb-4 ">
                    <input {!! $book->status == 'in_stock' ? 'checked' : '' !!} id="in_stock" type="radio" value="in_stock" name="status"
                        class="w-4 h-4 hover:cursor-pointer text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="in_stock"
                        class="ml-2 hover:cursor-pointer text-sm font-medium text-gray-900 dark:text-gray-300">In
                        Stock</label>
                </div>
            </div>

            <div>
                <div class="flex items-center ">
                    <input {!! $book->status == 'out_stock' ? 'checked' : '' !!} id="out_stock" type="radio" value="out_stock" name="status"
                        class="w-4 h-4 hover:cursor-pointer text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="out_stock"
                        class="ml-2 text-sm hover:cursor-pointer font-medium text-gray-900 dark:text-gray-300">Out
                        of Stock</label>
                </div>
            </div>


        </div>


        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>

    </form>

</x-dashboard-layout>
