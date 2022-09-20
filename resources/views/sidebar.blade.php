<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{'beranda'}}">
                        <span style="color: #22a2c2; font-size : 20px;">
                            <i class="fa-solid fa-user-group fa-xs"></i>
                            Mitra-KU
                        </span>
                    </a> 
                </div>

                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="{{'beranda'}}" class='sidebar-link'>
                        <i class="fa-solid fa-table-cells-large"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{'daftar-mitra'}}" class='sidebar-link'>
                        <i class="fa-solid fa-address-book"></i>
                        <span>Daftar Mitra</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{'daftar-kegiatan'}}" class='sidebar-link'>
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span>Daftar Kegiatan</span>
                    </a>
                </li>
                @if(Auth::user()->role === 'administrator')
                <li class="sidebar-item">
                    <a href="{{'daftar-wilayah'}}" class='sidebar-link'>
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Manajemen Pengguna</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>