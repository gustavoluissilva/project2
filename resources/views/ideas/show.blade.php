<x-layout>



    <div class="mt-6 text-white">
        <h2 class="font-bold">Your ideas</h2>
        <div class="mt-6">
            {{ $idea->description }}
        </div>

        <div class="mt-6">
            <a href="/ideas/{{ $idea->id }}/edit" type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">Edit
            </a>
        </div>

    </div>







</x-layout>
