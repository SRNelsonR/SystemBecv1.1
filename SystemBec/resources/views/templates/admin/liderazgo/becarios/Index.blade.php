@extends('templates.main')

@section('content')
								
@section('subtitle')
Home Becarios
@endsection                

  <!--Buscador dinamico -->     
  <section id="search" class="alt">
      {!! Form::open(['route'=>'Becarios.index', 'method'=>'Get'])!!}
      {!!Form::text('name', null,[ 'id'=>'query','placeholder'=>'Buscar'])!!}
      {!!Form::close()!!}        
  </section>

	<table class="table table-hover table-striped">
     	<thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre Completo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Cargo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Identidad</th>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Universidad</TH>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Editar</TH>
        
     	</thead>
      <tbody id="table-content">
       
         	<tr>

          <td style="text-align: center;"> 
        		  <!--Condicion para colocar la imagen segun su genero -->      
                         
                        <a href="{{route('taller_becarios.perfil',1)}}"   class="image">
                          <img id="perfil" src="{{asset('images/masculino.jpg')}}" 
                                    style=" 
                                    height: 70px;
                                    width: 70px;
                                    /* los siguientes valores son independientes del tamaño del círculo */
                                    background-repeat: no-repeat;
                                    background-position: 50%;                                    
                                    background-size: 100% auto;" 
                          />
                        </a>

            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
    			  </td>

        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                <br><br>nombre
              </td>        		
              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
                   <span ><br><br>cargo</span>                 
              </td>
        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                   <span ><br><br>identidad</span>                                              
              </td>

        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                   <br><br>universidad   
              </td>
              <!--Boton para editar al becario sus datos -->
        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                    <a href="#" class="image"><br><img src="{{asset('images/editar.png')}}" style="height: 70px; width: 70px;" ></a>
              </td> 

            </tr>
        
        </tbody>           
  
  </table>
    <!--Paginacion -->
   


<script  src="{{asset('plugins/js-especiales/mensajes.js')}}"> </script>
@endsection