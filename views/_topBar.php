<header class="header">
  <div class="container">
    <nav class="nav nav-left">
      <ul class="nav-list">
        <li><a href="" class="nav-item buap">BUAP</a></li>
        <li><a href="" class="nav-item fcfm">FCFM</a></li>
        <li><p id="fecha">12 de Diciembre del 2019</p></li>
      </ul>
    </nav>
    <a href="#" class="toggleMenu"><span>button menu</span></a>
    <nav class="nav nav-right menu">
      <ul class="nav-list">
        <li class="<?= $home ?>"><a href="./" class="nav-item">Inicio</a></li>
        <li><a href="" class="nav-item">Investigación</a></li>
        <li class="dropdown">
            <a href="" class="nav-item">Materias</a>
            <ul class="nav-list submenu">
              <li><a href="computacion.php" class="nav-item current">Computación</a></li>
              <li><a href="programacion.php" class="nav-item">Programación I</a></li>
              <li><a href="programacion2.php" class="nav-item">Programación II</a></li>
              <li><a href="dhtic.php" class="nav-item">DHTIC</a></li>
              <li><a href="detail-course.html" class="nav-item">Etc</a></li>
            </ul>
        </li>
        <li class="<?= $home ?>">
          <a href="./tareas.html" class="nav-item" id="upWork"><span>Subir tarea</span></a>
        </li>
      </ul>
    </nav>
  </div>
</header>