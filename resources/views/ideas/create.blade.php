<x-layout>
    <form method="POST" action="/ideas" class="max-w-sm mx-auto p-4 bg-gray-900 rounded-lg shadow">
        @csrf
        <label for="description" class="block mb-2 text-sm font-medium text-white"> Create New Idea</label>
        <textarea id="description" name="description" rows="4"
            class="bg-gray-800 border border-gray-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 placeholder-gray-400"
            placeholder="Have an idea you want to save for later?"></textarea>

        <div class="max-w-sm mx-auto mt-4">
            <button type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">Save</button>
        </div>
    </form>
</x-layout>
