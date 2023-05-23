@extends('layouts.app')

@section('content')
    <div class="comics_page bg-dark my-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-6 g-4 py-4">

                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card bg-transparent border-0 rounded-0 h-100">
                            <img src="{{ $comic['thumb'] }}" class="">
                            <div class="text-center text-white"> {{ $comic['title'] }} </div>
                        </div>
                    </div>
                @endforeach

                <button type="button" class="btn btn-primary mt-5 m-auto rounded-0">LOAD MORE</button>
            </div>

        </div>
    </div>
@endsection
