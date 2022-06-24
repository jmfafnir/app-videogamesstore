<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Games')}}
        </h2>
    </x-slot>

    <div class="row container">
        <div class="col s12 indigo lighten-2">
            <div class="card indigo accent-1">
                <div class="card-image indigo lighten-4">
                    <img src="/img/games.png" class="responsive-img" alt="...">
                    <span class="card-title black-text">Name: {{$game->name}} </span>
                </div>
                <div class="card-content">

                    <p>Name: {{$game->name}}</p>
                    <p>Developer Company: {{$game->developer_company}}</p>
                    <p>Game Hours: {{$game->game_hours}}</p>
                    <p>Classification: {{$game->classification}}</p>
                    <p>Release Date: {{$game->release_date}}</p>
                    <p>Category Name: {{$game->category->name}}</p>
                    <p>Price: {{$game->price}}</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
