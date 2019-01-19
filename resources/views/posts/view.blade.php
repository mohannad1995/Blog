@extends('layouts.app')

<style type="text/css">
    
    .resize{
            float: right;
            max-width: 239px;
            height: 100px;
            background-position: 50% 50%;
            background-repeat:   no-repeat;
            background-size:     cover;
    }
      </style>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
                      
            <div class="card card-default text-center">
                <div class="card-header">Post View</div>
                  <div class="card-body">
                    <div class="col-md-4">
                            
                     <ul class="list-group">
                         @if(count($categories) >0)
                         @foreach ($categories ->all() as $category)
                            <li class="list-group-item"><a href='{{url("category/{$category->id}")}}'>{{$category->category}}</a></li>
                         @endforeach
                         @else
                         <p>No Category Found!</p>
                         @endif   
                    </ul>              
                    </div>
                  
                       
                                 
                           
                             @if(count($posts) >0)
                             @foreach ($posts->all() as $post)
                             <img src="{{$post->post_image}}"   align: right; class="resize" alt="">
                                  <h4>{{$post->post_title}}</h4>
                                  <p>{{$post->post_description}}</p>
                                 
                                  <hr/>
                             @endforeach
                             @else
                              <p>No Post Avaliable !</p>
                             @endif

                             {{-- not completed --}}
                             {{-- <form method="POST" action={{ url'("/comment/{$post_id}") }}'>
                             <div class="form-group">
                           
                             <textarea id="comment"  rows="6" class="form-control name="comment"  required></textarea>
  
                            </div> --}}
                        </div>
                     </div>  
                 </div>
                   </div>
                </div>  
            </div>
       
@endsection
