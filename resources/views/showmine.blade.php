<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome>
                    <x-slot name="user">{{Auth::user()->name}}</x-slot>
                    <x-slot name="karya">{{$project->count()}}</x-slot>
                    <x-slot name="like">{{$like}}</x-slot>
                    <x-slot name="komentar">{{$comment}}</x-slot>
                </x-jet-welcome>
            </div>
        </div>
    </div>
</x-app-layout>
