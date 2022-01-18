@extends('layouts.back')

<form action={{route('blog.update', $data->id)}} method="POST">
    @csrf
    @method('PUT')
    <label for="nom"> Image : </label>
    <input type="text" name="image" value= {{$data->image}}> <br>
    <label for="prenom"> Description : </label>
    <input type="text" name="description" value={{$data->description}}> <br>
    <label for="prenom"> Titre : </label>
    <input type="text" name="titre" value={{$data->titre}}> <br>
    <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
