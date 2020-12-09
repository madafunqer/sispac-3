
 {{-- sidebar --}}

 <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{ asset('/img/adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">syazwan aslam</a>
                </div>
              </div>
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('/') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">MODUL Aset</div>
                <a class="nav-link" href="{{ url('/aset-ict') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    <span class="menu-title">ICT</span>
                  </a>
              
                  <a class="nav-link" href="{{ url('/aset-sewaan') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    <span class="menu-title">sewaan</span>
                  </a>
                
                  <a class="nav-link" href="{{ url('/aset-pinjaman') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    <span class="menu-title">pinjaman</span>
                  </a>

                  <a class="nav-link" href="{{ url('/aset-insurans') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    <span class="menu-title">insurans</span>
                  </a>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
            
           