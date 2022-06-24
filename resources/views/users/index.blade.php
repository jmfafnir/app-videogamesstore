<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Users')}}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card-panel indigo">
            <h1 class="center-align white-text text-lighten-5">Users</h1>
        </div>
    </div>
    <div class="container">
            <table class="striped indigo darken-3">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="/users/{{$user->id}}" class="waves-effect waves-light btn indigo darken-1">
                                <i class="material-icons right">visibility</i>Show
                            </a>
                        </td>
                        <td>
                            <a href="/users/{{$user->id}}/edit" class="waves-effect waves-light btn indigo darken-1">
                                <i class="material-icons right">edit</i>Edit
                            </a>
                        </td>
                        <td>
                            <form action="/users/{{$user->id}}" method="POST">
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
            <a href="/users/create" class="waves-effect waves-light btn col s12 indigo darken-3">
                Create new User
            </a>
        </div>
    </div>
</x-app-layout>
