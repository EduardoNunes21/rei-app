@extends('layouts.main')

@section('title', 'Guardiões')

@section('content')

   <style>
      .guardiao-card {
         display: flex;
         justify-content: center;
         align-items: center;
         margin: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
      }

      .guardiao-card img {
         display: inline;
      }

      .guardiao-info {
         display: flex;
         justify-content: space-between;
         align-items: center;
         width: 100%;
      }

      .guardiao-info a {
         cursor: pointer;
      }
   </style>

   @foreach ($guardioes as $guardiao)
      <div class="guardiao-card card col-md-3">
         <div class="guardiao-info">
            <img src="/img/guardioes/{{ $guardiao->image}}" alt="img">
            <div class="card-body">
               <h5 class="card-title">{{$guardiao->nome}}</h5>
               <p class="card-job">{{$guardiao->cargo}}</p>
               <a class="card-link" data-toggle="modal" data-target=".edit-modal-{{$guardiao->id}}">Editar Guardião</a>
             
           </div>
         </div>
     </div>


    @endforeach

    

   <!-- Cadastro de Gardião -->

      <div>
    
         <button id="Gcard" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastar Gardião</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
               <div class="modal-content">

                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Gardião</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>

                  <div class="modal-body">
                        
                     <div id="gardiao-crate-container">
                        <form action="/guardioes" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group">
                              <label for="title">Nome:</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Gardião">
                           </div>
                           <div class="form-group">
                              <label for="title">Cargo:</label>
                              <input type="text" class="form-control" id="job" name="job" placeholder="Cargo do Gardião">
                           </div>
                           <div class="form-group">
                              <label for="title">Data de Nascimento:</label>
                              <input type="date" class="form-control" id="birth" name="birth" placeholder="Data de Nascimento do Gardião">
                           </div>
                           <div class="form-group">
                              <label for="title">Estágio:</label>
                              <select name="trainee" id="trainee" class="form-control">
                                 <option value="0">Não</option>
                                 <option value="1">Sim</option>
                              </select>
                           </div>
                           <div>
                              <label for="image">Adicione sua imagem</label>
                              <input type="file" id="image" name="image" class="from-control-file">
                           </div>
                           <input type="submit" class="btn btn-primary" value="Cadastrar Guardião">
                        </form>
                     </div>

                  </div>
                  <div class="modal-footer">
                  </div>
               </div>
            </div>
         </div>

         

      </div>   


      @foreach ($guardioes as $guardiao)
      <div class="modal fade edit-modal-{{$guardiao->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
               <div class="modal-content">

                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Gardião</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>

                  <div class="modal-body">
                        
                     <div id="gardiao-crate-container">
                        <form action="/guardioes" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group">
                              <label for="title">Nome:</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Gardião">
                           </div>
                           <div class="form-group">
                              <label for="title">Cargo:</label>
                              <input type="text" class="form-control" id="job" name="job" placeholder="Cargo do Gardião">
                           </div>
                           <div class="form-group">
                              <label for="title">Data de Nascimento:</label>
                              <input type="date" class="form-control" id="birth" name="birth" placeholder="Data de Nascimento do Gardião">
                           </div>
                           <div class="form-group">
                              <label for="title">Estágio:</label>
                              <select name="trainee" id="trainee" class="form-control">
                                 <option value="0">Não</option>
                                 <option value="1">Sim</option>
                              </select>
                           </div>
                           <div>
                              <label for="image">Adicione sua imagem</label>
                              <input type="file" id="image" name="image" class="from-control-file">
                           </div>
                           <input type="submit" class="btn btn-primary" value="Cadastrar Guardião">
                        </form>
                     </div>

                  </div>
                  <div class="modal-footer">
                  </div>
               </div>
            </div>
      @endforeach

@endsection