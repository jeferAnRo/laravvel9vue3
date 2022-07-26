<x-app-layout>
    <section class="container">
        <h2 class="mt-2">Edit Person: {{ $person->name }}</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-control" action="/edit/{{ $person->id }}" method="post">
            @csrf
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name" value="{{ $person->name }}">
            </div>
            <div>
                <label class='form-label'>Last Name:</label>
                <input class='form-control' type="text" name="lastname" value="{{ $person->lastname }}">
            </div>
            <div>
                <label class='form-label'>Age:</label>
                <input class='form-control' type="number" name="age" value="{{ $person->age }}">
            </div>
            <div>
                <label class='form-label'>Email:</label>
                <input class='form-control' type="email" name="email" value="{{ $person->email }}">
            </div>
            <div>
                <label class='form-label'>City:</label>
                <select class="form-select" name="city" id="">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class='form-label'>Phone:</label>
                <input class='form-control' type="number" name="phone" value="{{ $person->phone }}">
            </div>
            <div>
                <label class='form-label'>Address:</label>
                <input class='form-control' type="text" name="address" value="{{ $person->address }}">
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Edit">
            </div>
        </form>
    </table>
    </section>
</x-app-layout>
