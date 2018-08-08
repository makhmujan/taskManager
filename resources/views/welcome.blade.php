@extends('layout')
@section('content')
    <div class="container">
    <h1 align="center">My Gallery</h1>
        <div class="row">
            @foreach($imagesInView as $image)
                <div class="col-md-3 gallery-item">
                    <div>
                        <img src="/{{$image->image}}" alt="" class="img-thumbnail">
                    </div>
                    <!-- Contextual button for informational alert messages -->
                    <a href="/show/{{$image->id}}" class="btn btn-info my-button">Посмотреть</a>

                    <!-- Indicates caution should be taken with this action -->
                    <a href="/edit/{{$image->id}}" class="btn btn-warning my-button">Изменить</a>

                    <!-- Indicates a dangerous or potentially negative action -->
                    <a href="/delete/{{$image->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger my-button">Удалить</a>
                </div>
             @endforeach
        </div>
    </div>
@endsection