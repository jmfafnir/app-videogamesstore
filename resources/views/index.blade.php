<x-guest-layout>
    <x-slot name="header">
        <h2 class="white-text">
            {{__('Home')}}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="card-panel indigo">
                    <h1 class="center-align white-text text-lighten-5">Home</h1>
                    <div class="col s6 offset-s11">
                        <a class="btn-floating btn-large waves-effect waves-light indigo" href="/login">
                            <i class="material-icons">account_circle</i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        @foreach($categories as $category)

            <div class="row">
                <div class="col s12">
                    <div class="card indigo lighten-1">
                        <div class="card-content white-text">
                            <span class="card-title"><h5>Category {{$category->name}}</h5></span>
                            <div class="">

                                <ul class="collection with-header indigo darken-1">

                                    <li class="collection-item indigo darken-1">Description: {{$category->description}}</li>
                                    <li class="collection-item indigo darken-1">Priority: {{$category->priority}}</li>
                                    <li class="collection-item indigo darken-1">Games in the category</li>
                                    <table class="striped indigo darken-3">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Developer Company</th>
                                            <th>Game Hours</th>
                                            <th>Classification</th>
                                            <th>Release Date</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category->games as $game)
                                            <tr>
                                                <td>{{$game->name}}</td>
                                                <td>{{$game->developer_company}}</td>
                                                <td>{{$game->game_hours}}</td>
                                                <td>{{$game->classification}}</td>
                                                <td>{{$game->release_date}}</td>
                                                <td>{{$game->price}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
</x-guest-layout>


