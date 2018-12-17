<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
	<div class="header_main_properties container-fluid">
		<!-- begin mobile sidebar expand / collapse button -->
		<div class="navbar-header">
			<!-- <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a> -->
			<a href="{{ url('/') }}" class="navbar-brand">
					<img src="{{ asset('imagenes/logo_mipro_white.png') }}" class="center-block img-responsive" alt="" width="130px" height="46px">
			</a>
			<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- begin navbar-collapse -->
		<div class="collapse navbar-collapse pull-left" id="top-navbar">
				<ul class="nav navbar-nav">
						<li>
							<a href="#que-es-miprolab">
									¿Qué es el MIPROLab?
							</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Servicios<b class="caret"></b>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Portafolio de Servicios de la Subsecretaría de Mipymes y Artesanías</a></li>
								<li><a href="#">Asesoría y soporte</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Actividades<b class="caret"></b>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Capacitaciones y formación</a></li>
								<li><a href="#">Integración con programas emblemáticos</a></li>
								<li><a href="#">Integración con el ecosistema de emprendimiento</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Programas<b class="caret"></b>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Programa de fortalecimiento nacional de incubadoras</a></li>
							</ul>
						</li>
						<li>
							<a href="/">
								Incubadoras acreditadas
							</a>
						</li>
						<li>
							<a href="/">
								Preguntas frecuentes
							</a>
						</li>
						<li>
							<a href="/">
								Contactos
							</a>
						</li>
						
				</ul>
		</div>

	</div>
</div>
<!-- end #header -->

<!-- ////// -->
<!-- SIDEBAR -->
<!-- ////// -->

<div id="sidebar" class="sidebar toggled">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="info">
					Contenido
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li><a href="/">Inicio</a></li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<span>Información para el Inversionista</span>
					</a>
				<ul class="sub-menu">
					<li><a href="{{ asset('archivos/beneficios_ley_organica_para_el_fomento_productivo.pdf') }}">Beneficios de la Ley Orgánica para el Fomento Productivo</a></li>
					<li class="has-sub">
						<a href="javascript:;">
				            <b class="caret pull-right"></b>
				            Costos y Gastos Industrialesss
				        </a>
						<ul class="sub-menu" style="display: none;">
							<li><a href="/costosindustriales/junio2018">Boletín de Costos Nro. 1 - Junio 2018</a></li>
							<li><a href="/costosindustriales/julio2018">Boletín de Costos Nro. 2 - Julio 2018</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
				            <b class="caret pull-right"></b>
				            Datos Caracterización por Provincia
				        </a>
						<ul class="sub-menu" style="display: none;">
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_azuay.pdf') }}">Caracterización de la provincia de Azuay</a></li>
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_cotopaxi.pdf') }}">Caracterización de la provincia de Cotopaxi</a></li>
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_cotopaxi_mana.pdf') }}">Caracterización de la provincia de Cotopaxi-Maná</a></li>
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_guayas_canton_milagro.pdf') }}">Caracterización de la provincia de Guayas, Cantón Milagro</a></li>
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_manabi.pdf') }}">Caracterización de la provincia de Manabí</a></li>
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_morona_santiago_macas.pdf') }}">Caracterización de la provincia de Morona Santiago-Macas</a></li>
							<li><a href="{{ asset('archivos/datos_caracterizacion_por_provincia/caracterizacion_de_la_provincia_de_pichincha.pdf') }}">Caracterización de la provincia de Pichincha</a></li>
						</ul>
					</li>
					<li class="has-sub">
								<a href="javascript:;">
				            <b class="caret pull-right"></b>
				            Informes de Economía Internacional
				        </a>
						<ul class="sub-menu" style="display: none;">
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_apec.pdf') }}">Informe de economía internacional Ecuador - APEC</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_argentina.pdf') }}">Informe de economía internacional Ecuador - Argentina</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_china.pdf') }}">Informe de economía internacional Ecuador - China</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_colombia.pdf') }}">Informe de economía internacional Ecuador - Colombia</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_corea_del_sur.pdf') }}">Informe de economía internacional Ecuador - Corea del Sur</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_eeuu.pdf') }}">Informe de economía internacional Ecuador - EEUU</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_espana.pdf') }}">Informe de economía internacional Ecuador - España</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_israel.pdf') }}">Informe de economía internacional Ecuador - Israel</a></li>

							<li class="has-sub">
									<a href="javascript:;">
					            <b class="caret pull-right"></b>
					            Ecuador - Japón
					        </a>
									<ul class="sub-menu" style="display: none;">
										<li><a href="{{ asset('archivos/informes_de_economia_internacional/japon/informe_economia_internacional_ecuador_japon_agosto.pdf') }}">Agosto</a></li>
										<li><a href="{{ asset('archivos/informes_de_economia_internacional/japon/informe_economia_internacional_ecuador_japon_septiembre.pdf') }}">Septiembre</a></li>
									</ul>
							</li>

							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_mexico.pdf') }}">Informe de economía internacional Ecuador - México</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_mundo.pdf') }}">Informe de economía internacional Ecuador - Mundo</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_turquia.pdf') }}">Informe de economía internacional Ecuador - Turquía</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_union_europea.pdf') }}">Informe de economía internacional Ecuador - Unión Europea</a></li>
							<li><a href="{{ asset('archivos/informes_de_economia_internacional/informe_economia_internacional_ecuador_uruguay.pdf') }}">Informe de economía internacional Ecuador - Uruguay</a></li>
						</ul>
					</li>
					<li><a href="/zonas-especiales-de-desarrollo-economico">Zonas Especiales de Desarrollo Económico</a></li>
					<li><a href="/asociaciones-publico-privadas">Alianzas Público Privadas</a></li>
					<li><a href="/polos-de-desarrollo">Polos de Desarrollo</a></li>
					<li><a href="/incentivos-tributarios-y-arancelacios">Incentivos para el Inversionista</a></li>
					<li><a href="/indice">&Iacute;ndice Único de Competitividad</a></li>
					<li><a href="/cifras">Cifras Económicas</a></li>
					<li><a href="/vocaciones">Vocaciones Productivas</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<span>Reportes</span>
					</a>
				<ul class="sub-menu">
					<li><a href="/reporte-home/lista-propuesta/1/1">Propuestas en Revisión</a></li>
					<li><a href="/reporte-home/lista-propuesta/3/1">Propuestas en Desarrollo</a></li>
					<li><a href="/reporte-home/lista-propuesta/4/1">Propuestas en Finalizado</a></li>
					<li><a href="/dialogo-nacional-estadisticas">Estadisticas</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<span>Herramientas</span>
					</a>
				<ul class="sub-menu">
					<!-- <li><a href="http://servicios.industrias.gob.ec/site_rue/rue.html">Registro Único de Empresas</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rum/rum.html">Registro Único de MiPymes</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rua/rua.html">Registro Único Artesanal</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rpn/rpn.html">Registro de Producción Nacional</a></li>
					<li><a href="http://servicios.industrias.gob.ec/cdec">Centro de Desarrollo Empresarial Ciudadano</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_rop/rop.html">Gestión de Operadores y Productos Reglamentados</a></li>
					<li><a href="http://capacitacion.industrias.gob.ec/">Formación y Capacitación para el Sector Industrial</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_sircar/sircar.html">Sistema de Recicladores, Centros de Acopio, Embotelladores e Importadores</a></li>
					<li><a href="https://ecuapass.aduana.gob.ec/">Sistema de Importadores y Exportadores</a></li>
					<li><a href="http://servicios.industrias.gob.ec/siipro">Sistema de Información Industrial y Productiva</a></li>
					<li><a href="http://servicios.industrias.gob.ec/tramites/">Ficha de Trámites Institucionales</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_encuesta/encuesta.html">Encuestas en Línea</a></li> -->
					<li><a href="http://servicios.industrias.gob.ec/tramites/">Mipro Trámites</a></li>
					<li><a href="http://www.exportafacil.gob.ec/">Exporta Facil</a></li>
					<!-- <li><a href="http://encuestas.administracionpublica.gob.ec/index.php/887844/lang-es#">Encuesta de Simplificación de Trámites Productivos</a></li> -->
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<span>Biblioteca</span>
					</a>
				<ul class="sub-menu">
					<li><a href="http://servicios.industrias.gob.ec/biblioteca/">Consultorias & Estudios</a></li>
					<li><a href="http://servicios.industrias.gob.ec/siipro/informes.html">Sistema de Información Industrial y Productiva</a></li>
					<li><a href="/foro-de-la-produccion-impulso-innovacion">I Foro de la Producción e Impulso a la Innovación</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_foro_empresarial/foro_empresarial.html">I Foro Empresarial Andino 2018</a></li>
					<li><a href="{{ asset('archivos/foros/foro_inclusion_financiera.pdf') }}">Foro Inclusión Financiera</a></li>
					<li><a href="http://servicios.industrias.gob.ec/site_industria_4/">Congreso Internacional Industria 4.0</a></li>
				</ul>
			</li>

		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
