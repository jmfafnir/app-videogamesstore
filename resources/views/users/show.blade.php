<x-app-layout>
    <x-slot class="header">
        <h2 class="white-text">
            {{__('Users')}}
        </h2>
    </x-slot>

    <div class="row container">
        <div class="col s12 indigo lighten-2">
            <div class="card indigo accent-1">
                <div class="card-image indigo lighten-4">
                    <img src="https://www.gravatar.com/avatar/{{$user->email_hashed}}?d=robohash&s=400" class="responsive-img" alt="...">
                    <span class="card-title black-text">Name: {{$user->name}} </span>
                </div>
                <div class="card-content">

                    <p>Email: {{$user -> email}}</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
