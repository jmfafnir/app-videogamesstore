<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <a class="waves-effect waves-light btn-large indigo" href="/users"><i class="material-icons right">people</i>Users</a>
                <a class="waves-effect waves-light btn-large indigo" href="/categories"><i class="material-icons right">category</i>Categories</a>
                <a class="waves-effect waves-light btn-large indigo" href="/games"><i class="material-icons right">games</i>Games</a>

            </div>
        </div>
    </div>
</x-app-layout>
