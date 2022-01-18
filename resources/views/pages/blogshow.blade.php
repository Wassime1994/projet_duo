@extends('layouts.back')
<ul class="list-unstyled">
    <li class="media">
        <div class="media-body container">
            <h5 class="mt-0 mb-1">{{$table->titre}}</h5>
            <h5>{{$table->description}}</h5>
            <img class=" mr-3 "style="width: 400px;height:300px" src="{{$table->image}}" alt="Generic placeholder image">
     </div>

     <button type="button" class="btn btn-warning">
        <a href={{route('blog.change')}}>
         Back
     </a>  </button>


    </li>
