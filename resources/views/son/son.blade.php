<x-app-layout>
    <section>
        {{-- <main> --}}
            vue son
            <son></son>
        {{-- </main> --}}
    {{-- <section class="container">
        <h2 class="mt-2 text-center">Create Son:</h2>
        {{-- {{route('person.store')}} --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-control" action="/son/save" method="post">
            @csrf
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div>
                <label class='form-label'>Age:</label>
                <input class='form-control' type="number" name="age">
            </div>
            <div>
                <label class='form-label'>Parent:</label>
                <select class="form-select" name="person_id" id="">
                    @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
        </form>
        <h2>Sons</h2>
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
                @foreach ($sons as $son)
                    <tr>
                        <td>{{ $son->name }}</td>
                        <td>{{ $son->age }}</td>
                        <td>{{ $son->person->name }}</td>
                        <td><a class="btn btn-warning" href="/son/edit/{{ $son->id }}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/son/delete/{{ $son->id }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
            </tbody> --}}
        {{-- </table> --}}
    </section>
</x-app-layout>
