
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
                
                <div class="sb-sidenav-menu-heading">MENU ASET</div>


                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Menu Pendaftaran
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion" style="font-size: 13px">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            pendaftaran aset
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages" style="font-size: 13px">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('/daftar-aset-alih/pembelian-majlis') }}">Pembelian Majlis</a>
                                <a class="nav-link" href="{{ url('/daftar-aset-alih/tanpa-lo-kerajaan') }}">Tanpa L/O Kerajaan</a>
                                <a class="nav-link" href="{{ url('/daftar-aset-alih/lama') }}">Lama</a>
                        </nav>
                        </div>
                        {{-- asingkan --}}
                        <a class="nav-link" href="{{ url('/Menu-Pendaftaran/kewpa3a5') }}">[KEW.PA 3 & 5] Daftar Harta Modal</a>
                        <a class="nav-link" href="{{ url('/Menu-Pendaftaran/kewpa4a6') }}">[KEW.PA 4 & 6] Daftar Aset Alih Bernilai Rendah</a>
                        <a class="nav-link" href="{{ url('/Menu-Pendaftaran/kewpa7') }}">[KEW.PA 7] Senarai Aset Alih</a>
                        <a class="nav-link" href="{{ url('/Menu-Pendaftaran/kewpa8') }}">[KEW.PA 8] Laporan Tahunan Aset Alih</a>
                        <a class="nav-link" href="{{ url('/Menu-Pendaftaran/kewpa9') }}">[KEW.PA-9] Pergerakan Aset</a>
                        <a class="nav-link" href="{{ url('/Menu-Pendaftaran/kewpa18') }}">[KEW.PA-18] Laporan Pindahan Aset Alih</a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        </div>
                    </nav>
                </div>

              
               
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>       
           