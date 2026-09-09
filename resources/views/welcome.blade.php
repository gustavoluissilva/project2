<x-layout>

    {{-- vardump do blade = @dd() --}}

    {{-- @dd($tasks) --}}
{{--
    @if(count($tasks))
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

        <h1> Start nos estudos de Laravel do laracasts </h1>
        <h2>Com base no que sei de CAKEPHP </h2>


        <p>
            {{ $greeting }} {{ $person }}
        </p>


</x-layout>

