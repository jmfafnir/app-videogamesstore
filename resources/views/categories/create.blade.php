<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('categories')}}
        </h2>
    </x-slot>
    <div class="container">
        <div class="card-panel indigo">
            <h1 class="center-align white-text text-lighten-5">Create Category</h1>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <form action="/categories" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="priority" class="form-label">Priority</label>
                    <input type="number" class="form-control" id="priority" name="priority" value="{{old('priority')}}">
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
