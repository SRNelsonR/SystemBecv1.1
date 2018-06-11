<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','SYSTEMBEC' )</title>
       
		  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		  <link rel="stylesheet" href="{{ asset('plugins/home/assets/css/main.css')}}" />
          <link rel="icon" type="image/png" href="{{asset('images/icon/beca.jpg')}}" />
          <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">		  
		  <script src="{{ asset('plugins/home/assets/js/jquery.min.js')}}"></script>
  		  <script  src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"> </script>
          {!!Html::style('assets/css/smoke.css') !!}
          <link rel="stylesheet" type="text/css" href="{{asset('assets/css/smoke.css')}}">
          <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/build/toastr.min.css')}}">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         
</head>
<body>

			<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main" style="background-color: white;">
						<div class="inner">
                                <header id="header">
									<strong id="titulos1">@yield('subtitle','Home') <strong style="color: #b7b3b3;">EDUCREDITO</strong></strong>
									<ul class="icons" style="color: #c7ced4">
										<li><a href="https://twitter.com/becashn2020" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/BecasHonduras2020/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/becashonduras2020/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
										<li><a href="https://www.snapchat.com/l/es/" class="icon fa-snapchat-ghost" target="_blank"><span class="label">Snapchat</span></a></li>
										<li><a href="https://medium.com/" class="icon fa-medium" target="_blank"><span class="label">Medium</span></a></li>
									</ul>
                				</header>
                                <br>
			                    @include('flash::message')
			                    @yield('content')  
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">						
								<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2 style="color: white">Menú</h2>
									</header>
									<ul>
										<li><a id="decoracion" href="{{route('Actividades.inicio')}}"><h5>Inicio</h5></a></li>


									<!--***************************************************************************************************************** -->
									 @if(Auth::user()->Formacion())																
														<li>
															<span class="opener">Talleres</span>
															<ul>
																<li><a id="decoracion" href="{{route('taller.agregar')}}">Agregar Taller</a></li>
																<li><a id="decoracion" href="{{route('Talleres.store')}}">Buscar Taller</a></li>		
																<li><a id="decoracion" href="{{route('Actividades.historial')}}">Historial de Talleres</a></li>
															</ul>
														</li>								 
																		
														<li>
															<span class="opener">Becarios</span>
															<ul>
															<li><a id="decoracion" href="{{route('taller_becarios.index')}}">Perfil</a></li>
															</ul>
														</li>												
									@endif
									<!--***************************************************************************************************************** -->	


									@if(Auth::user()->liderazgo())
														<li>
															<span class="opener">Reunion</span>
															<ul>
																<li><a id="decoracion" href="{{route('taller.agregar')}}">Agregar Reunion</a></li>
																<li><a id="decoracion" href="{{route('Talleres.store')}}">Buscar Reunion</a></li>		
																<li><a id="decoracion" href="{{route('Actividades.historial')}}">Historial de Reuniones</a></li>
															</ul>
														</li>								 
																		
														<li>
															<span class="opener">Becarios</span>
															<ul>
															<li><a id="decoracion" href="{{route('taller_becarios.index')}}">Becarios</a></li>
															<li><a id="decoracion" href="{{route('taller_becarios.index')}}">Becarios sin grupo</a></li>
															</ul>
														</li>
														<li>
															<span class="opener">Reporte</span>
															<ul>
															<li><a id="decoracion" href="{{route('taller_becarios.index')}}">Ver reportes</a></li>
															</ul>
														</li>	
									@endif
									<!--***************************************************************************************************************** -->	


									@if(Auth::user()->admin() || Auth::user()->operaciones())
										<li>
											<span class="opener"><h6>Actividades</h6></span>
											<ul>
												<li><a id="decoracion" href="{{route('Actividades.create')}}">Agregar Actividad</a></li>
												<li><a id="decoracion" href="{{route('taller.agregar')}}">Agregar Taller</a></li>
												<li><a id="decoracion" href="{{route('Actividades.store')}}">Buscar Actividad</a></li>		
												<li><a id="decoracion" href="{{route('Actividades.historial')}}">Historial de Actividad</a></li>
											</ul>
										</li>
									@endif
									

									@if(Auth::user()->admin() || Auth::user()->seguimiento() || Auth::user()->operaciones())
										<li>
											<span class="opener"><h6>Becarios</h6></span>
											<ul>
												@if(Auth::user()->admin() || Auth::user()->seguimiento())
												<li><a id="decoracion" href="{{route('Becarios.create')}}">Agregar Becarios</a></li>
											   	@endif
												<li><a id="decoracion" href="{{route('Becarios.store')}}">Perfil de Becarios</a></li>
												<li><a id="decoracion" href="{{route('Becarios.sin_asignar')}}">Asignar Becarios</a></li>											    
											</ul>
										</li>
									@endif

									@if(Auth::user()->admin() || Auth::user()->operaciones())
										<li>
											<span class="opener"><h6>Reportes</h6></span>
											<ul>
												<li><a id="decoracion" href="{{route('planilla.index')}}">Becarios Actividades Completas</a></li>
												<li><a id="decoracion" href="{{route('planilla_complementaria.index')}}">Becarios Actividades Incompletas</a></li>
												
											</ul>
										</li>
									@endif
										@if(Auth::user()->admin())
										<li>
											<span class="opener"><h6>Documentación Becarios</h6></span>
												<ul>
													<li><a id="decoracion" href="{{route('trimestrales.index')}}"><h6>Activar/Desactivar Carreras Trimestrales</h6></a></li>
													<li><a id="decoracion" href="{{route('semestrales.index')}}"><div style="font-size: 30">Activar/Desactivar Carreras Semestrales</div></a></li>
												</ul>
										</li>
										@endif
										@if(Auth::user()->admin() || Auth::user()->operaciones())
										<li>
											<span class="opener"><h7>Estadisticas</h7></span>
											<ul>
												<li><a id="decoracion" href="{{route('estadisticas.general')}}">Estadistica General</a></li>
												<li><a id="decoracion" href="{{route('estadisticas.casas')}}">Estadistica Casas</a></li>
												<li><a id="decoracion" href="#">Otro tipo de estadistica</a></li>
												
											</ul>
										</li>
										@endif	

									<!-- Esta es la seccion del usario logeado-->	
									<li>
										<span style="color: green;" class="opener">
											<font face="Comic Sans MS,arial,verdana" class="glyphicon glyphicon-user" size="2"> Usuario</font>
										</span>
											<ul>
												<li>{{ Auth::user()->name }}</li>
												
												<li style="color: green;">
												    
												    <a href="{{ route('logout') }}"
                                                 	 onclick="event.preventDefault();
                                     				 document.getElementById('logout-form').submit();">
                                           		 	 Salir
                                           		 	</a>

                                           		 	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                         {{ csrf_field() }}
                                                    </form>
                                  
                                   				</li>
                                   			</ul>	                                 
									</li>														
								</nav>

								<!-- Baner de la parte izquierda donde aparecen las fotos -->
								<section >
									<header class="major">
										<h2 style="color: white">GERENCIAS</h2>
									</header>
									<div id="piepagina" class="mini-posts">
										<article>
											<a href="#" class="image"><img src="{{asset('images/gerencias/Liderazgo.jpg')}}" alt="" /></a>
											<p style="color: white">Gerencia de Liderazgo</p>
										</article>
										<article>
											<a href="#" class="image"><img src="{{asset('images/gerencias/Formacion.png')}}" alt="" /></a>
											<p style="color: white">Gerencia de Formación y Capacitación</p>
										</article>
										<article>
											<a href="#" class="image"><img src="{{asset('images/gerencias/Compromiso.png')}}" alt="" /></a>
											<p style="color: white">Gerencia de Compromiso Social y Juvenil </p>
										</article>
										<article>
											<a href="#" class="image"><img src="{{asset('images/gerencias/Monitoreo.jpg')}}" alt="" /></a>
											<p style="color: white">Gerencia de Monitoreo y Evaluación</p>
										</article>
									</div>									
								</section>

							<!-- Pie de la pagina con toda la informacion de educredito -->
								<section >
									<header class="major">
										<h2 style="color: white">EDUCREDITO</h2>
									</header>
									<section id="piepagina">
										<p style="color: white">El Programa Presidencial de Becas Honduras 20/20 tiene como objetivo brindar oportunidades educativas para un futuro mejor, potenciando al máximo la capacidad de formación de nuestros jóvenes hondureños.</p>
										<ul class="contact">
											<li class="fa-envelope-o", style="color: white"><a href="#">info@becashonduras2020.gob.hn</a></li>
											<li class="fa-phone", style="color: white">(504) 3265-9265</li>
											<li class="fa-home", style="color: white">Col. Lomas del Guijarro Frente a Mueblería Elements,<br />
											Tegucigalpa</li>
										</ul>
									</section>	
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright", style="color: white">&copy; EDUCREDITO. All rights reserved. <a href="#"> Corporaciones</a>.</p>
								</footer>

						</div>
					</div>

			
			<!-- Scripts -->
			<script src="{{ asset('plugins/home/assets/js/jquery.min.js')}}"></script>
			<script src="{{ asset('plugins/home/assets/js/skel.min.js')}}"></script>
			<script src="{{ asset('plugins/home/assets/js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js')}}></script><![endif]-->
			<script src="{{ asset('plugins/home/assets/js/main.js')}}"></script>             
            <script src="{{ asset('assets/js/smoke.js')}}"></script>
            <script src="{{ asset('assets/lang/es.js')}}"></script>
			{!!Html::script('assets/js/smoke.js') !!}
			{!!Html::script('assets/lang/es.js') !!}
			<script  src="{{asset('plugins/toastr/build/toastr.min.js')}}"> </script>

			<!--este script se enlaza con el archivo para utilizar vue
			<script src="{{asset('js/app.js')}}"></script>

			 Conexion con vuetify 
         	 <script src="https://unpkg.com/vue/dist/vue.js"></script>
			  <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
			  
			  <script>
			    new Vue({ el: '#app' })

			  </script>

			-->

</body>
</html>