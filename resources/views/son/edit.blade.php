<x-app-layout>
    <section class="container">
        <h2 class="mt-2 text-center">Edit Son: {{ $son->name }}</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-control" action="" method="post">
            @csrf
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name" value="{{$son->name}}">
            </div>
            <div>
                <label class='form-label'>Age:</label>
                <input class='form-control' type="number" name="age" value="{{$son->age}}">
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
    </section>
</x-app-layout>
