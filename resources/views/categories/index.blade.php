<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Categories')}}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card-panel indigo">
            <h1 class="center-align white-text text-lighten-5">Categories</h1>
        </div>
    </div>
    <div class="container">
            <table class="striped indigo darken-3">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->priority}}</td>
                        <td>
                            <a href="/categories/{{$category->slug}}" class="waves-effect waves-light btn indigo darken-1">
                                <i class="material-icons right">visibility</i>Show
                            </a>
                        </td>
                        <td>
                            <a href="/categories/{{$category->slug}}/edit" class="waves-effect waves-light btn indigo darken-1">
                                <i class="material-icons right">edit</i>Edit
                            </a>
                        </td>
                        <td>
                            <form action="/categories/{{$category->slug}}" method="POST">
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
            <a href="/categories/create" class="waves-effect waves-light btn col s12 indigo darken-3">
                Create new Category
            </a>
        </div>
    </div>
</x-app-layout>
