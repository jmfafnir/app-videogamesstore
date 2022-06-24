<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Games')}}
        </h2>
    </x-slot>
    <div class="container">
        <div class="card-panel indigo">
            <h1 class="center-align white-text text-lighten-5">Create User</h1>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <form action="/games" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="developer_company" class="form-label">Developer Company</label>
                    <input type="text" class="form-control" id="developer_company" name="developer_company" value="{{old('developer_company')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="game_hours" class="form-label">Game Hours</label>
                    <input type="number" class="form-control" id="game_hours" name="game_hours" value="{{old('game_hours')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="classification" class="form-label">Classification</label>
                    <input type="text" class="form-control" id="classification" name="classification" value="{{old('classification')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input type="date" class="form-control" id="release_date" name="release_date" value="{{old('release_date')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{old('category_name')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
                </div>


                <div class="row">
                    <div class="col s6">
                        <button class="btn waves-effect waves-light indigo darken-3" type="submit" value="Save" name="action">
                            Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
            @if($errors->any())

                <div class="row">
                    <div class="col s12 m5">
                        <div class="card-panel red lighten-1">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
