@extends('welcome')
@section('content')
    <h1>{{$cat_name}}</h1>
    
       
        <div class="">
            @foreach ($videos as $video)
                @foreach ($video as $video_item)
                    <div>
                        <a href="">
                            <img src="{{$video_item['default_thumb']}}" alt="">
                        </a>
                       
                    </div>
                    
                @endforeach 
            @endforeach    
        </div>
        
    
    
@endsection