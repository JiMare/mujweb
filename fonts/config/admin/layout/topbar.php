 <!-- Topbar -->
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>


<ul class="navbar-nav ml-auto">
   <div class="topbar-divider d-none d-sm-block"></div>
   <li class="nav-item dropdown no-arrow">
     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="mr-2 d-lg-inline text-gray-600 small"><i class="fa fa-user"></i> <?= $prihlasenyUzivatel->vratPrezdivku(); ?></span>
     </a>
     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
     <a class="dropdown-item" href="../?stranka=domu"> 
        <i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>
        Zpět na web
     </a>  
     <a class="dropdown-item" href="../?stranka=odhlasit"> 
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Odhlášení
     </a>
    </div>
  </li>
</ul>
</nav>
