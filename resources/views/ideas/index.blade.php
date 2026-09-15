<x-layout>

    {{-- vardump do blade = @dd() --}}

    {{-- @dd($tasks) --}}
    {{--
    @if (count($tasks))
            <p>Yes we have some tasks. how many? <?= count($tasks) ?> tasks</p>

    @endif --}}


    {{-- @forelse($tasks as $task)
        <li>{{ $task }}</li>

    @empty
        <p>There are no tasks for now</p>
    @endforelse --}}

    {{-- @can()

    @endcan

    @auth

    @endauth --}}
    {{--
    some of many blade directives --}}
    {{--
        <h1> Start nos estudos de Laravel do laracasts </h1>
        <h2>Com base no que sei de CAKEPHP </h2>


        <p>
            {{ $greeting }} {{ $person }}
        </p>
 --}}


    <form method="POST" action="/ideas" class="max-w-sm mx-auto p-4 bg-gray-900 rounded-lg shadow">
        @csrf
        <label for="description" class="block mb-2 text-sm font-medium text-white">New Idea</label>
        <textarea id="description" name="description" rows="4"
            class="bg-gray-800 border border-gray-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 placeholder-gray-400"
            placeholder="Have an idea you want to save for later?"></textarea>

        <div class="max-w-sm mx-auto mt-4">
            <button type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">Save</button>
        </div>
    </form>

    @if ($ideas->count())
        <div class="mt-06 text-white">
            <h2 class="font-bold">Your ideas</h2>
            <ul class="mt-6">
                @foreach ($ideas as $idea)
                    <a href="/ideas/{{ $idea->id }}" class="text-sm">{{ $idea->description }}</a>
                @endforeach
            </ul>
        </div>
    @endif






</x-layout>
