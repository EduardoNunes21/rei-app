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

      .guardiao-info form{
         display: block;

      }


   </style>
   
    
   @foreach ($guardioes as $guardiao)
      <div class="guardiao-card card col-md-3">
         <div class="guardiao-info">
            <img src="/img/guardioes/{{ $guardiao->image}}" alt="img">
            <div class="card-body">
               <h5 class="card-title">{{$guardiao->nome}}</h5>
               <p class="card-job">{{$guardiao->cargo}}</p>
               <a href="/guardioes/{{ $guardiao->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline" data-toggle="modal-edit" data-target="modal-edit"></ion-icon>Editar</a>
               <form action="/guardioes/{{$guardiao->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
               </form>
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

      <!-- Editar Guardiao -->
    
       <div>
         <div class="modal-edit fade modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
               <div class="modal-content">
      
                  <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Guardião</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
      
                   <div class="modal-body">
                           
                     <div id="gardiao-edit-container">
                        
                        <form action="/guardioes/update {{ $guardiao->id }}" method="put" enctype="multipart/form-data">
                           @csrf
                           @method('PUT');
                           <div class="form-group">
                              <label for="title">Nome:</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Gardião" value="{{ $guardiao->nome }}">
                           </div>
                           <div class="form-group">
                              <label for="title">Cargo:</label>
                              <input type="text" class="form-control" id="job" name="job" placeholder="Cargo do Gardião">
                           </div>                              <div class="form-group">
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
                               <!--<img src="/img/guardioes/ {{ $guardiao->image  }}" alt="{{ $guardiao->nome }}" class="img-preview">-->
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
      
     
@endsection