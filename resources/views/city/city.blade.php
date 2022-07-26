<x-app-layout>
    <section class="container">
        <h2 class="mt-2 text-center">Create City:</h2>
        {{-- {{route('person.store')}} --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-control" action="/city/save" method="post">
            @csrf
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
        </form>
        <h2>Cities</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->name }}</td>
                        <td><a class="btn btn-warning" href="/city/edit/{{ $city->id }}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/city/delete/{{ $city->id }}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
            </tbody>
        </table>
    </section>
</x-app-layout>