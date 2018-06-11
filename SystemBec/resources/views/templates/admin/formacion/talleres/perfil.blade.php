@extends('templates.main')

@section('content')
								

		@section('subtitle')
		
		Taller   

		@endsection

            <!-- Fichiers CSS -->
			<link rel="stylesheet" href="{{ asset('plugins/cv/sheldon/reset.css')}}">			
			<link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('plugins/cv/sheldon/mobile.css')}}">
			<link rel="stylesheet" media="screen and (min-width:481px)" href="{{ asset('plugins/cv/sheldon/cv.css')}}">
			<link rel="stylesheet" media="print" href="{{ asset('plugins/cv/sheldon/print.css')}}">


	<header role="banner">
		<div style="background-color: #76a79d;height: 50%; width: 75%; position: absolute;"></div>
		<div class="row" style="padding-top: 150px;">
			<div class="col-lg-9 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				<div class="row well">
					<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12" style="height: 80%; width: 35%;">
		
						<!-- aqui va el codigo de la imagen-->						
							<a href="#" class="image"><img src="{{asset('images/f.png')}}" alt="Taller" class="img-responsive img-rounded" style="padding-top: 6.5%" /></a>				
	                    
					</div>
					<div class=" col-md-6 col-sm-10 col-xs-12">
						<h3><b>Formando Liderez</b></h3>
						<h3 style="color:#b9b1b1;"> Hotel: Maya </h3>            
	                        
	                    <a data-toggle="modal" data-target="#myGuia" >
	                        <font  id="espaciados" size="6" face="arial" >Cargo: Importante</font>
	                    </a>

						<div style="margin-top: 8px;">
							<div style="background: rgba(139,197,65,1); height: 40px; width: 100px; border-radius: 10px; padding-top:8px;">
							 	<a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; ">
								<font style="padding: 8px;margin-top:  8px;" size="6"  > Activo</font></a>
							</div>
						</div>
						
											  				        
                     
                        <!-- Trigger the modal para agregar los modulos -->
                        <div align="center">                     
	                        <br><br>
	                        <a data-toggle="modal" data-target="#myModal" >
	                        	<font class="glyphicon glyphicon-user" id="espaciados" size="4" face="arial" > Agregar Modulo</font>
	                        </a>	                      	
					    </div>
					</div>
				</div>

				<div class="row">
					<div class="btn-group col-lg-11 col-lg-offset-1">
						<!-- Modal de la referencia de los becarios -->
						<div id="myModal"   class="modal fade" role="dialog">
						  <div class="modal-dialog" >
						    <!-- Modal content-->
						    <div class="modal-content" ">
						      <div class="modal-header">
						        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color: deepskyblue; ">Modulo</h4>
						      </div>
						      <div class="modal-body">

						      	<label>Nombre:</label>
						      	<input class="form" type="txt" name="nombre" placeholder="nombre del modulo....">

						      <div class="modal-footer">
						        <button type="button" class="btn" data-dismiss="modal">Guardar</button>
						      </div>
						    </div>
						  </div>
						</div>


						<!-- Modal del estado de los becarios -->
						<div id="myGuia" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Estado del taller</h4>
						      </div>
						      <div class="modal-body">
						        <font><b>Estado:</b><font style="color: grey;"> Asistieron 44</font></font><br>
						       	<font><b>Descripcion:</b> <br><font style="color: grey;">Un taller excelente</font></font>
						        <br>
						      </div>
						      <div class="modal-footer">
						      	<div align="left">
						      	    <font >Fecha de Actualizacion: <br><font style="color: grey;">1 de mayo</font></font>
						      	</div>
						        <button type="button" class="btn" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>		
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					</div><br>
				</div>
				<br><br>

				<div class="row hidden-xs well">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div align="center">
						 <span><h3>Información del taller</h3></span>
						</div>
						<section role="main" class="container_16 clearfix">
							<div class="grid_16">
								<!-- Formacion academica -->
								<div align="center" class="grid_8 apropos">
									<h3 >Universidad</h3>				
									<font size="5" id="grids">El taldffffffffffffffffffffffffffffffffffffffffffffffffffler es muy bueno </font>
								</div>
								<!-- Informacion Adicional -->
								<div align="center" class="grid_8 apropos">
									<h3>Direccion</h3>
									<font size="5" id="grids">Colonia amersdddddddddddddddddddddwefwefffffffffddddfsfweeeeeeeeeeeeeeeeeeeeica</font>
									<br>
									<br>
									<br>
								</div>
									<br>
									<br>
									<br>
								<!-- Formacion Profesional -->
								<div align="center" class="grid_8 apropos">
									<h3>Carrera</h3>				
									<font size="5" id="grids">sin fines</font>
									<br>
									<br>
									<br>
								</div>
									
								<!-- Contact -->
								<div align="center" class="grid_8 apropos">
									<h3>Contacto</h3>
									<ul>
										<font size="5" id="grids">22353602</font> <br>
									    <font size="5" id="grids">edu@gmail.com</font>
									</ul>
								</div>
							</div>
						</section>
					</div>
				</div>
                <br>
                <br>

                <div class="row hidden-xs well">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div align="center">
						 <span><h3>Modulos</h3></span>
						</div>
						<section role="main" class="container_16 clearfix">
							<div class="grid_16">
								<!-- Formacion academica -->
								
									<h3 >1) Modulo de ensena a conducir</h3>				
									<font size="5" id="grids">El taldffffffffffffffffffffffffffffffffffffffffffffffffffler es muy bueno </font>
									<br>
									<br>
									<br>
								<!-- Informacion Adicional -->
								
									<h3>2) Preparando un lider</h3>
									<font size="5" id="grids">Colonia amersdddddddddddddddddddddwefwefffffffffddddfsfweeeeeeeeeeeeeeeeeeeeica</font>
									<br>
									<br>
									<br>
								
								
								<!-- Formacion Profesional -->
								
									<h3>3) Guian a los segudores</h3>				
									<font size="5" id="grids">sin fines</font>
									<br>
									<br>
									<br>
								
									
								<!-- Contact -->
								
									<h3>4) Creando capacitores</h3>
									<ul>
										<font size="5" id="grids">22353602</font> <br>
									    <font size="5" id="grids">edu@gmail.com</font>
									</ul>
								
							</div>
						</section>
					</div>
				</div>



			</div>
		</div>            
	</header>

	

	
@endsection