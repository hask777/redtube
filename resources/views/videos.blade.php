@extends('welcome')
@section('content')

    @foreach($categories as $category)
        <form action="{{route('show', $category['id'])}}"  method="get">
            @csrf
            <input type="hidden" name="cat_id" value="{{$category['id']}}">
            <input type="hidden" name="cat_name" value="{{$category['category']}}">
            <button type="submit">{{$category['category']}}</button>
        </form>
        <br>
    @endforeach
@endsection



