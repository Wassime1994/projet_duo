@extends('layouts.back')
<div class="d-flex">

    <div class="d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px ;  height:100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li >
                <a href={{route('home')}}   class="nav-link text-warning" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  HOME
                </a>
              </li>
              <li>
                <a href="{{route('blog.change')}}" class="nav-link text-white ">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Blog
                </a>
              </li>
              <li>
                <a href="{{route('portefolio.change')}}" class="nav-link active text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  PorteFolio
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Other
                </a>
              </li>
            </ul>
            <hr>

          </div>

    <div>

        <div class="container mt-3">
            <h1> MODIFIER LE PORTEFOLIO</h1>
            @forelse ($table as $item)
            <ul class="list-unstyled">
                <li>Titre :  {{$item->titre}}</li>
                <li>Description : {{$item->description}}</li>
                <ul class="d-flex list-unstyled" >
                    <li ><button type="button" class="btn btn-primary">Edit</button></li>
                    <li class="mx-3"><button type="button" class="btn btn-danger">Delete</button></li>
                </ul>
                <hr>
            </ul>
            @empty
     <h1> Il n'y a rien a modifier pour l'instant</h1>
            @endforelse

             {{-- {{dump($table)}} --}}
         </div>
</div>
