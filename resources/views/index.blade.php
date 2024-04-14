@include('partials.header')

<div class="container mx-auto mt-4">
    <h1 class="text-3xl font-bold mb-4">List of Books</h1>
    
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Author</th>
                <!-- Add more table headers if needed -->
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($books as $book)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $book->title }}</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $book->author }}</td>
                <!-- Add more table cells for other fields -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')
