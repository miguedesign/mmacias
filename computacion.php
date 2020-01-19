<?php
    #Variables de los meta
    $titulo = "Computación"; 
    $description = "GNU/Linux | LaTeX | Gnuplot | Software Libre | GeoGebra";
    $urlWork = ""
?>

<?php include('views/_header.php'); ?>

<body>

<?php include('views/_topBar.php'); ?>

<main class="main">
		<div class="container">
			<header class="courseHeader" style="background-image:url('./assets/imgs/courses/bg-computacion-full.jpg');">
      	<h1 class="courseHeader-title">
          <?= $titulo ?>
        </h1>
      </header>

			<!-- INFORMACIÓN Y RECURSOS -->
			<section class="cd-section courseContent purple" id="recursos">
				<div class="courseContent-container">
					<article class="courseContent-title">
						<h2>Recursos</h2>
					</article>
					<article class="courseContent-lists">
						<ul class="courseList">
							<li class="courseList-item">
								<a href="files/c/Dialnet-PlagioYDerechosDeAutor.pdf" class="courseList-link download-link">
									<h3>Plagio y derechos de autor</h3>
									<p>Archivo.pdf</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/APA-Javeriano.pdf" class="courseList-link download-link">
									<h3>Normas APA</h3>
									<p>Archivo pdf</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/APA.zip" class="courseList-link download-link">
									<h3>Más normas APA</h3>
									<p>Archivo comprimido</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/BuscadoresAcademicos.txt" class="courseList-link download-link">
									<h3>Algunos buscadores académicos</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="https://creativecommons.org/" class="courseList-link external-link">
									<h3>Creative Commons</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-note">
								<h3>Resolver dudas del lenguaje escrito</h3>
								<p>Libro: "El manual para escribir bien" de María del Pilar Montes de Oca Sicilia</p>
							</li>
						</ul>
					</article>
				</div>
			</section>
			
			<!-- SOFTWARE LIBRE -->
			<section class="cd-section courseContent blue" id="software">
				<div class="courseContent-container">
					<article class="courseContent-title">
						<h2>Software</h2>
					</article>
					<article class="courseContent-lists">
						<ul class="courseList">
							<li class="courseList-item">
								<a href="https://www.fsf.org/" class="courseList-link external-link">
									<h3>Free Software Foundation</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="https://www.gnu.org/philosophy/philosophy.html" class="courseList-link external-link">
									<h3>Filosofía del proyecto GNU</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="https://sourceforge.net" class="courseList-link external-link">
									<h3>SourceForge</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/1.pdf" class="courseList-link download-link">
									<h3>Unidad de aprendizaje 1.</h3>
									<p>Diapositivas</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/GuiaPracticaSobreSL.pdf" class="courseList-link download-link">
									<h3>Guía práctica sobre software libre</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/softwareLibre.pdf" class="courseList-link download-link">
									<h3>Mapa conceptual</h3>
									<p>¿Qué es el software libre?</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/apuntesLinux.pdf" class="courseList-link download-link">
									<h3>Paquete didáctico</h3>
									<p>Apuntes sobre GNU/Linux</p>
								</a>
							</li>
						</ul>
					</article>
				</div>
			</section>

			<!-- LaTeX -->
			<section class="cd-section courseContent pink" id="latex">
				<div class="courseContent-container">
					<article class="courseContent-title">
						<h2>Latex</h2>
					</article>
					<article class="courseContent-lists">
						<ul class="courseList">

							<!--
							<li class="courseList-item">
								<a href="http://www.tug.org/" class="courseList-link external-link">
									<h3>TeX Users Group</h3>
									<p>Grupo de usuarios de TeX con abundante documentación</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://www.cervantex.es/queestex" class="courseList-link external-link">
									<h3>CervanTeX</h3>
									<p>Grupo de usuarios de TeX hispanohablantes</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://www.ams.org/home/page" class="courseList-link external-link">
									<h3>American Mathematical Society</h3>
									<p>AMS</p>
								</a>
							</li>
							-->

							<li class="courseList-item">
								<a href="https://www.latex-project.org" class="courseList-link external-link">
									<h3>LaTeX</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://www.ctan.org/" class="courseList-link download-link">
									<h3>CTAN</h3>
									<p>Paquetes y documentación</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://miktex.org" class="courseList-link download-link">
									<h3>MikTeX</h3>
									<p>Para el s.o. Windows</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="https://es.overleaf.com/" class="courseList-link download-link">
									<h3>Overleaf</h3>
									<p>Online LaTeX Editor</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/2.pdf" class="courseList-link download-link">
									<h3>Presentación sobre LaTeX</h3>
									<p>Exposición en clase</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/principal-MM.pdf" class="courseList-link download-link">
									<h3>Introducción a LaTeX</h3>
									<p>mini-Libro pdf</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Mora-Borbon-LaTeX-2014.pdf" class="courseList-link download-link">
									<h3>Libro .pdf</h3>
									<p>Borbón, A. y Mora, W. (2014). Edición de textos científicos LATEX 2014 (2a ed.).</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/MoreMathIntoLaTeX4ed.pdf" class="courseList-link download-link">
									<h3>Libro .pdf</h3>
									<p>Gratzer, G.(2007). More Math into LaTeX (4a ed.).</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/symbols-a4.pdf" class="courseList-link download-link">
									<h3>Lista de símbolos en LaTeX</h3>
									<p>Archivo .pdf</p>
								</a>
							</li>





							<li class="courseList-item">
								<a href="files/c/beameruserguide-3.55.pdf" class="courseList-link download-link">
									<h3>The Beamer Class (inglés)</h3>
									<p>User Guide for version 3.55</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://www.texstudio.org/" class="courseList-link download-link">
									<h3>TeXstudio</h3>
									<p>Editor para Windows</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://www.xm1math.net/texmaker/" class="courseList-link download-link">
									<h3>Texmaker</h3>
									<p>Editor para Windows</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="http://www.winedt.com/" class="courseList-link download-link">
									<h3>WinEdt</h3>
									<p>Editor para Windows</p>
								</a>
							</li>
						</ul>
					</article>
				</div>
			</section>

			<!-- GeoGebra -->
			<section class="cd-section courseContent navy" id="geogebra">
				<div class="courseContent-container">
					<article class="courseContent-title">
						<h2>GeoGbra</h2>
					</article>
					<article class="courseContent-lists">
						<ul class="courseList">
							<li class="courseList-item">
								<a href="https://www.geogebra.org" class="courseList-link external-link">
									<h3>GeoGebra</h3>
									<p>---</p>
								</a>
							</li>
						</ul>
					</article>
				</div>
			</section>

			<!-- Actividades, Tareas -->
			<section class="cd-section courseContent purple" id="tareas">
				<div class="courseContent-container">
					<article class="courseContent-title">
						<h2>Tareas</h2>
					</article>
					<article class="courseContent-lists">
						<ul class="courseList">
							<li class="courseList-item">
								<a href="files/c/Martha.pdf" class="courseList-link download-link">
									<h3>Polinomios...</h3>
									<p>Exposición de Martha A. Romano</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="#" class="courseList-link external-link">
									<h3>Reporte</h3>
									<p>Booteo con livedistro de GNU/Linux</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Tarea1.txt" class="courseList-link download-link">
									<h3>Tarea 2</h3>
									<p>Fecha de entrega: <strong>31 de enero</strong></p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Ejercicio.tex" class="courseList-link download-link">
									<h3>Archivo LaTeX</h3>
									<p>Para practicar citas con APA</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Tarea3.txt" class="courseList-link download-link">
									<h3>Tarea 3</h3>
									<p>Fecha de entrega: <strong>22 de febrero</strong></p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/ejemplosArticulos.zip" class="courseList-link download-link">
									<h3>Revisión</h3>
									<p>Artículos sobre S.L.</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="" class="courseList-link download-link">
									<h3>Exposiciones LaTeX</h3>
									<p>Entornos matemáticos. <br>Actualización: <strong>4 de abril</strong></p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Tarea4.txt" class="courseList-link download-link">
									<h3>Tarea 4</h3>
									<p>Fecha de entrega: <strong>12 de abril</strong></p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/ArchivosBib.zip" class="courseList-link download-link">
									<h3>Archivos .bib</h3>
									<p>---</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/miscelanea3.zip" class="courseList-link download-link">
									<h3>Exposiciones LaTeX</h3>
									<p>Miscelánea de instrucciones y paquetes <br>
									Actualización: <strong>23 de abril</strong></p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/practicandoBeamer-2.zip" class="courseList-link download-link">
									<h3>Practicando Beamer</h3>
									<p>Más instrucciones...</p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Tarea5.txt" class="courseList-link download-link">
									<h3>Tarea 5</h3>
									<p>Fecha de entrega: <strong>27 de abril</strong></p>
								</a>
							</li>
							<li class="courseList-item">
								<a href="files/c/Tarea6.txt" class="courseList-link download-link">
									<h3>Tarea 6</h3>
									<p>Fecha de entrega: <strong>14 de mayo</strong></p>
								</a>
							</li>
						</ul>
					</article>
				</div>
			</section>
		</div>
</main>

<nav id="cd-vertical-nav">
	<ul>
		<li>
			<a href="#recursos" data-number="1">
				<span class="cd-dot"></span>
				<span class="cd-label">recursos</span>
			</a>
		</li>
		<li>
			<a href="#software" data-number="2">
				<span class="cd-dot"></span>
				<span class="cd-label">Software</span>
			</a>
		</li>
		<li>
			<a href="#latex" data-number="3">
				<span class="cd-dot"></span>
				<span class="cd-label">latex</span>
			</a>
		</li>
		<li>
			<a href="#geogebra" data-number="4">
				<span class="cd-dot"></span>
				<span class="cd-label">geogebra</span>
			</a>
		</li>
		<li>
			<a href="#tareas" data-number="5">
				<span class="cd-dot"></span>
				<span class="cd-label">tareas</span>
			</a>
		</li>
	</ul>
</nav>
<a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>
  

<?php include('views/_footer.php'); ?>