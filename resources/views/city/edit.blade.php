<x-app-layout>
    <section class="container">
        <h2 class="mt-2 text-center">Update City: {{$city->name}}</h2>
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
        <form class="form-control" action="/city/edit/{{$city->id}}" method="post">
            @csrf
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name" value="{{$city->name}}">
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
        </form>
    </section>
</x-app-layout>