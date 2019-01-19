@extends('layouts.app')

         <style type="text/css">
        .avatar {
  
                border-radius: 100%;
                max-width: 100px;
                }
        .resize{
                float: right;
                max-width: 239px;
                height: 100px;
                background-position: 50% 50%;
                background-repeat:   no-repeat;
                background-size:     cover;
            
        }
        .cor{
                background-color:#E2E2E2;
        } 
       
     
          </style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
                       @if(count($errors) >0)
                       @foreach($error->all() as $error)
                             <div class="alert alert-danger">{{$error}}</div>
                       @endforeach
                       @endif
                       @if(session('response'))
                             <div class="alert alert-success">{{session('response')}}</div>
                       @endif
            <div class="card card-default text-center">
                <div class="card-header">Dashboard</div>
                  <div class="card-body">
                    <div class="col-md-4">
                            
                        @if( !empty($profile))
                             <img src="{{$profile->profile_pic}}"  class="avatar" alt="">  
                        @else
                             <img src="{{url('images/avatar.png')}}"  class="avatar" alt="">   
                        @endif
                        @if( !empty($profile))
                             <h4 class="lead"> {{$profile->username}}</h4>
                        @else
                             <h4></h4>
                        @endif
                        @if( !empty($profile))
                             <p class="lead"> {{$profile->designation}}</p>
                        @else
                             <p></p>
                        @endif
                    
                    </div>
                     <hr/>
                    <div class="col-md-9" >
                            
                      
                        @if(count($posts) >0)
                        @foreach ($posts->all() as $post)
                        <img src="{{$post->post_image}}"   align: right; class="resize" alt="">
                             <h4>{{$post->post_title}}</h4>
                             <p>{{substr($post->post_description,0,150)}}</p>

                            
                              <ul class="nav nav-pills">
                              <li role="presentation"><a href='{{url("/view/{$post->id}")}}'><span class="fa fa-eye">View</span></a></li>
                                <li role="presentation"><a href='{{url("/edit/{$post->id}")}}'><span class="fa fa-pencil-squar-o">Edit</span></a></li>
                                <li role="presentation"><a href='{{url("/delete/{$post->id}")}}'><span class="fa fa-trash">Delete</span></a></li>
                              </ul>
                            



                             <hr/>
                        @endforeach
                        @else
                         <p>No Post Avaliable !</p>
                        @endif

                        {{$posts->links()}}
                       </div>
                   </div>
                </div>  
            </div>
        </div>
    </div>

@endsection
