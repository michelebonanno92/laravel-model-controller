@extends('layouts.app')

<h1>
    Laravel Model Controller
</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>
        @foreach ($movies  as $movie )
            <tr>
                <th scope="row">{{ $movie['id'] }}</th>
                <td>{{ $movie->title }}</td>
                <td></td>
            </tr>
        @endforeach
    
    </tbody>
  </table>

