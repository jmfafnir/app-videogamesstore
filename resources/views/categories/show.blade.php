<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Categories')}}
        </h2>
    </x-slot>

    <div class="row container">
        <div class="col s12 indigo lighten-2">
            <div class="card indigo accent-1">
                <div class="card-image indigo lighten-4">
                    <img src="/img/categories.png" class="responsive-img" alt="...">
                    <span class="card-title black-text">Name: {{$category->name}} </span>
                </div>
                <div class="card-content">

                    <p>Email: {{$category -> description}}</p>
                    <p>Email: {{$category -> priority}}</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
