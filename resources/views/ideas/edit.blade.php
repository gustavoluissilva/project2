<x-layout>
    <form method="POST" action="/ideas/{{ $idea->id }}" class="max-w-sm mx-auto p-4 bg-gray-900 rounded-lg shadow">
        @csrf
        @method('PATCH')
        <label for="description" class="block mb-2 text-sm font-medium text-white">Edit your Idea</label>
        <textarea id="description" name="description" rows="4"
            class="bg-gray-800 border border-gray-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 placeholder-gray-400">{{ $idea->description }}</textarea>

        <div class="max-w-sm mx-auto mt-4">
            <button type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">Update
            </button>

            <button type="submit" form="delete-idea-form"
                class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-700 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">Delete
            </button>
        </div>
    </form>

    <form id="delete-idea-form" action="/ideas/{{ $idea->id }}" method="POST">
        @csrf
        @method('DELETE')

    </form>





</x-layout>
