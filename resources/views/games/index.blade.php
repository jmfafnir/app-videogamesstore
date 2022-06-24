<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Games')}}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card-panel indigo">
            <h1 class="center-align white-text text-lighten-5">Games</h1>
        </div>
    </div>
    <div class="container">
            <table class="striped indigo darken-3">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Developer Company</th>
                    <th>Game Hours</th>
                    <th>Classification</th>
                    <th>Release Date</th>
                    <th>Category Name</th>
                    <th>Price</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{$game->name}}</td>
                        <td>{{$game->developer_company}}</td>
                        <td>{{$game->game_hours}}</td>
                        <td>{{$game->classification}}</td>
                        <td>{{$game->release_date}}</td>
                        <td>{{$game->category->name}}</td>
                        <td>{{$game->price}}</td>
                        <td>
                            <a href="/games/{{$game->slug}}" class="waves-effect waves-light btn indigo darken-1">
                                <i class="material-icons right">visibility</i>Show
                            </a>
                        </td>
                        <td>
                            <a href="/games/{{$game->slug}}/edit" class="waves-effect waves-light btn indigo darken-1">
                                <i class="material-icons right">edit</i>Edit
                            </a>
                        </td>
                        <td>
                            <form action="/games/{{$game->slug}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn waves-effect waves-light deep-orange darken-3"
                                        type="submit"
                                        name="action"
                                        onclick="return confirm('Are you sure ?')">
                                    <i class="material-icons right">delete</i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
    </div>


    <div class="container section">
        <div class="row">
            <a href="/games/create" class="waves-effect waves-light btn col s12 indigo darken-3">
                Create new Game
            </a>
        </div>
    </div>
</x-app-layout>
