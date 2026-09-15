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
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your ideas</h2>
            <ul class="mt-6">
                @foreach ($ideas as $idea)
                    <a href="/ideas/{{ $idea->id }}" class="text-sm block">{{ $idea->description }}</a>
                @endforeach
            </ul>
            <a href="/ideas/create" class='underline mt-6'>Create a new one.</a>
        </div>
    @else
        <p>No ideas yet.<a href="/ideas/create" class="underline">Create a new one.</a></p>
    @endif






</x-layout>
