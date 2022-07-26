<x-app-layout>
    <section class="container">
        <main id='app'>
            <hello></hello>
        </main>
        {{-- <h1>Crud Laravel</h1> --}}
        {{-- <h2 class="mt-2 text-center">Create Person:</h2> --}}
        {{-- {{route('person.store')}} --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {{-- <form class="form-control" action="/save" method="post">
            @csrf
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div>
                <label class='form-label'>Last Name:</label>
                <input class='form-control' type="text" name="lastname">
            </div>
            <div>
                <label class='form-label'>Age:</label>
                <input class='form-control' type="number" name="age">
            </div>
            <div>
                <label class='form-label'>Email:</label>
                <input class='form-control' type="email" name="email">
            </div>
            <div>
                <label class='form-label'>City:</label>
                <select class="form-select" name="city_id">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class='form-label'>Phone:</label>
                <input class='form-control' type="number" name="phone">
            </div>
            <div>
                <label class='form-label'>Address:</label>
                <input class='form-control' type="text" name="address">
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
        </form> --}}
        {{-- <h2>People</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->age }}</td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->phone }}</td>
                        <td>{{ $person->address }}</td>
                        <td>{{ $person->city->name }}</td>
                        <td><a class="btn btn-warning" href="/edit/{{ $person->id }}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/delete/{{ $person->id }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody> --}}

            {{-- <h2>Sons</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Parent</th>
                        <th scope="col">Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach ($hijos as $son)
                        <tr>
                            <td>{{ $son->sons }}</td>
                            <td>{{ $son }}</td>
                            <td>{{ $son}}</td>
                            <td><a class="btn btn-warning" href="/son/edit/{{ $son}}">Edit</a></td>
                            <td><a class="btn btn-danger" href="/son/delete/{{ $son}}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table> --}}
    </section>
</x-app-layout>
