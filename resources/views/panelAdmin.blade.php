@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
 
 
<!-- Scripts -->
        <div class="container">

            <div class="panel panel-primary">
              <div class="panel-heading">Lista de Usuario</div>
              <div class="panel-body" >
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                        </tr>
                      </thead>
                      <tbody>         
                          <?php
                          $i = 0;
                          ?>
                        @foreach ($user_list as $user_array)
                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td> {{$user_array["nombre"]}}</td>
                          <td> {{$user_array["email"]}}</td>
                          <td> {{$user_array["rol"]}}</td>
                        </tr>
                          <?php
                            $i++;
                          ?>
                          @endForEach
                        
                      </tbody>
                </table>
              </div>
            </div>
        </div>
@endsection

