@extends('templates.main')

@section('content')
								
@section('subtitle')
Home Talleres
@endsection
    <div align="center"> 
    <br>   
    <font size="4" id="mes">
        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 
                    Talleres 

                    @if($carbon->format('m')==01)
                     <b>Enero</b>
                    @elseif($carbon->format('m')==02)
                      <b>Febrero</b>
                    @elseif($carbon->format('m')==03)
                      <b>Marzo</b>
                    @elseif($carbon->format('m')==04)
                      <b>Abril</b>
                    @elseif($carbon->format('m')==05)
                      <b>Mayo</b>
                    @elseif($carbon->format('m')==06)
                      <b>Junio</b>
                    @elseif($carbon->format('m')==07)
                      <b>Julio</b>
                    @elseif($carbon->format('m')==8)
                      <b>Agosto</b>
                    @elseif($carbon->format('m')==9)
                      <b>Septiembre</b>
                    @elseif($carbon->format('m')==10)
                      <b>Octubre</b>
                    @elseif($carbon->format('m')==11)
                      <b>Noviembre</b>
                    @elseif($carbon->format('m')==12)
                      <b>Diciembre</b>                    
                    @endif 
                     
    </font >
            <br><br>
            <br>    
    </div>        
	
     <table class="table table-hover table-striped">
      <thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre del Taller</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Lugar</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Fecha Inicio</th>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Fecha Final</TH>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Editar</TH>
        <th id="letra" style="text-align: center; color: deepskyblue;">Apagar</th>        
      </thead>
      <tbody id="table-content">
          <tr>

          <td style="text-align: center;"> 
              <!--Imagen segun el nombre del taller-->                    
                        <a href="{{route('taller.perfil',1)}}"  class="image">
                          <img id="perfil" src="{{asset('images/f.png')}}" 
                                    style=" 
                                    height: 50px;
                                    width: 50px;
                                    /* los siguientes valores son independientes del tamaño del círculo */
                                    border-radius: 50%;
                                    background-repeat: no-repeat;
                                    background-position: 50%;                                    
                                    background-size: 100% auto;" 
                          />
                        </a>
             
                    
            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
            </td>
            
              <td style="color: rgb(150, 156, 156  ); text-align: center;">
                <br><br>Formando Lideres
              </td>           
              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
                   <span ><br><br>Hotel Maya</span>                 
              </td>
              <td style="color: rgb(150, 156, 156  ); text-align: center;">
                   <span ><br><br>3 de mayo del 2018</span>                                              
              </td>

              <td style="color: rgb(150, 156, 156  ); text-align: center;">
                   <br><br>23 de mayo del 2018   
              </td>
              <!--Boton para editar al becario sus datos -->
              <td style="color: rgb(150, 156, 156  ); text-align: center;">
                    <a href="{{route('Talleres.edit',2)}}" class="image"><br><img src="{{asset('images/editar.png')}}" style="height: 35px; width: 35px;" ></a>
              </td>

              <td id="letra" style="text-align: center;">
                <a href="#" style="background-color: #f51e18; color: white; " onclick="return confirm('seguro que deseas desactivarla?')" class="btn"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></td>      

            </tr>
        </tbody>           
  
  </table>
      
@endsection