<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="">
            <a href="/beranda">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>

        <li class="header">DATA MASTER</li>
        <li class="">
            <a href="/m/periode">
                <i class="fa fa-list"></i> <span>Periode</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/kelas">
                <i class="fa fa-list"></i> <span>Kelas</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/mapel">
                <i class="fa fa-book"></i> <span>Mapel</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/guru">
                <i class="fa fa-users"></i> <span>Guru</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/siswa">
                <i class="fa fa-users"></i> <span>Siswa</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/m/predikat">
                <i class="fa fa-list"></i> <span>Predikat Nilai</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="header">TRANSAKSI</li>

        <li class="">
            <a href="/t/pkg">
                <i class="fa fa-list"></i> <span>Periode-Kelas-Guru</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>

        <li class="">
            <a href="/t/penilaian">
                <i class="fa fa-list"></i> <span>Penilaian</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="header">LAPORAN</li>
        <li class="">
            <a href="/laporan/guru">
                <i class="fa fa-file"></i> <span>Lap. Guru</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/laporan/siswa">
                <i class="fa fa-file"></i> <span>Lap. Siswa</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="">
            <a href="/laporan/raport">
                <i class="fa fa-file"></i> <span>Cetak Raport</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="header">SETTING</li>
        <li class="">
            <a href="/logout">
                <i class="fa fa-sign-out"></i> <span>Log Out</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>

    </ul>
</section>