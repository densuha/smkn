 <?php

  use App\Models\Nav_model;
  use App\Models\Konfigurasi_model;
  use App\Libraries\Website;

  $this->website          = new Website();
  $m_menu                 = new Nav_model();
  $m_site                 = new Konfigurasi_model();
  $site_setting           = $m_site->listing();
  $nav_profil             = $m_menu->profil('Profil');
  $nav_profil2            = $m_menu->profil('Profil');
  $nav_berita             = $m_menu->berita();
  $nav_layanan            = $m_menu->profil('Layanan');
  $nav_layanan2           = $m_menu->profil('Layanan');
  $nav_portfolio          = $m_menu->portfolio();
  $nav_prestasi           = $m_menu->prestasi();
  $nav_ekstrakurikuler    = $m_menu->ekstrakurikuler();
  $nav_fasilitas          = $m_menu->fasilitas();
  $nav_link_website       = $m_menu->link_website('Publish');
  $nav_download           = $m_menu->download();
  $nav_menu               = $m_menu->menu();

  $menu_tambahan          = '';
  foreach ($nav_menu as $nav_menu) {
    $sub_menu             = $m_menu->sub_menu($nav_menu->id_menu);
    if ($sub_menu) {
      $sub_menu_tambahan = '';
      foreach ($sub_menu as $sub_menu) {
        $sub_menu_tambahan .= '<li><a class="dropdown-item" href="' . $sub_menu->link . '">' . $sub_menu->nama_sub_menu . '</a></li>';
      }
      $menu_tambahan        .= '<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">' . $nav_menu->nama_menu . '</a>
                  <ul class="dropdown-menu">' . $sub_menu_tambahan . ' </ul>
                </li>';
    } else {
      $menu_tambahan        .= '<li class="nav-item">
                  <a class="nav-link" href="' . $nav_menu->link . '">' . $nav_menu->nama_menu . '</a>
                </li>';
    }
  }
  // echo $menu_tambahan;
  ?>
 <style type="text/css" media="screen">
   /* Add your custom styles here */
   .whatsapp-link {
     position: fixed;
     bottom: 30px;
     right: 80px;
     z-index: 9999;
     transition: transform 0.3s ease-in-out;
   }

   a.whatsapp-link {
     color: green;
     background-color: #f5f5f5;
     border: solid thin #eee;
     border-radius: 10px;
     padding: 10px 20px;
   }

   .whatsapp-link:hover {
     transform: scale(1.1);
   }

   .line-md--tiktok::after {
     display: inline-block;
     width: 1em;
     height: 1.5em;
     vertical-align: -0.125em;
     content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cmask id='lineMdTiktok0'%3E%3Cg fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'%3E%3Cpath fill='%23fff' stroke='none' d='M16.6 5.82c-0.68 -0.78 -1.06 -1.78 -1.06 -2.82h-3.09v12.4c-0.02 0.67 -0.31 1.31 -0.79 1.77c-0.48 0.47 -1.13 0.73 -1.8 0.73c-1.42 0 -2.6 -1.16 -2.6 -2.6c0 -1.72 1.66 -3.01 3.37 -2.48v-3.16c-3.45 -0.46 -6.47 2.22 -6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69 -2.55 5.69 -5.7v-6.29c1.25 0.9 2.76 1.38 4.3 1.38v-3.09c0 0 -1.88 0.09 -3.24 -1.48Z'/%3E%3Cpath stroke='%23000' stroke-dasharray='36' stroke-dashoffset='72' stroke-width='4' d='M11 11h-1c-2.21 0 -4.5 1.79 -4.5 4c0 2.21 1.5 4.5 4.5 4.5c2.21 0 4 -2.29 4 -4.5v-12.5'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' dur='1.2s' values='72;36'/%3E%3C/path%3E%3Cpath stroke='%23000' stroke-dasharray='10' stroke-dashoffset='20' stroke-width='4' d='M18 2.5v8'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' begin='1s' dur='0.2s' values='20;10'/%3E%3C/path%3E%3C/g%3E%3C/mask%3E%3Crect width='24' height='24' fill='white' mask='url(%23lineMdTiktok0)'/%3E%3C/svg%3E");
   }

   .line-md--twitter-x::after {
     display: inline-block;
     width: 1em;
     height: 1.5em;
     vertical-align: -0.125em;
     content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cg fill='white'%3E%3Cpath d='M1 2h2.5L3.5 2h-2.5zM5.5 2h2.5L7.2 2h-2.5z'%3E%3Canimate fill='freeze' attributeName='d' dur='0.56s' values='M1 2h2.5L3.5 2h-2.5zM5.5 2h2.5L7.2 2h-2.5z;M1 2h2.5L18.5 22h-2.5zM5.5 2h2.5L23 22h-2.5z'/%3E%3C/path%3E%3Cpath d='M3 2h5v0h-5zM16 22h5v0h-5z'%3E%3Canimate fill='freeze' attributeName='d' begin='0.56s' dur='0.56s' values='M3 2h5v0h-5zM16 22h5v0h-5z;M3 2h5v2h-5zM16 22h5v-2h-5z'/%3E%3C/path%3E%3Cpath d='M18.5 2h3.5L22 2h-3.5z'%3E%3Canimate fill='freeze' attributeName='d' begin='0.7s' dur='0.56s' values='M18.5 2h3.5L22 2h-3.5z;M18.5 2h3.5L5 22h-3.5z'/%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
   }

   .line-md--youtube-twotone::after {
     display: inline-block;
     width: 1em;
     height: 1.5em;
     vertical-align: -0.125em;
     content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23e20303' fill-opacity='0' d='M12 11L12 12L12 13z'%3E%3Canimate fill='freeze' attributeName='d' begin='1.5s' dur='0.4s' values='M12 11L12 12L12 13z;M10 8.5L16 12L10 15.5z'/%3E%3Cset fill='freeze' attributeName='fill-opacity' begin='1.5s' to='1'/%3E%3C/path%3E%3Cpath fill='%23e20303' fill-opacity='0' stroke='%23e20303' stroke-dasharray='64' stroke-dashoffset='64' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 5c9 0 9 0 9 7c0 7 0 7 -9 7c-9 0 -9 0 -9 -7c0 -7 0 -7 9 -7Z'%3E%3Canimate fill='freeze' attributeName='fill-opacity' begin='1.2s' dur='0.3s' values='0;0'/%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' dur='1.2s' values='64;0'/%3E%3C/path%3E%3C/svg%3E");
   }

   .line-md--facebook::after {
     display: inline-block;
     width: 1em;
     height: 1em;
     vertical-align: -0.125em;
     content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cg fill='none' stroke='%233403e2' stroke-linecap='round' stroke-linejoin='round' stroke-width='4'%3E%3Cpath stroke-dasharray='24' stroke-dashoffset='24' d='M17 4l-2 0c-2.5 0 -4 1.5 -4 4v12'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' dur='0.8s' values='24;0'/%3E%3C/path%3E%3Cpath stroke-dasharray='8' stroke-dashoffset='8' d='M8 12h7'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' begin='1s' dur='0.4s' values='8;0'/%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
   }

   .line-md--instagram::after {
     display: inline-block;
     width: 1em;
     height: 1em;
     vertical-align: -0.125em;
     content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Ccircle cx='17' cy='7' r='1.5' fill='%23e2036f' fill-opacity='0'%3E%3Canimate fill='freeze' attributeName='fill-opacity' begin='2.6s' dur='0.3s' values='0;1'/%3E%3C/circle%3E%3Cg fill='none' stroke='%23e2036f' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'%3E%3Cpath stroke-dasharray='72' stroke-dashoffset='72' d='M16 3c2.76 0 5 2.24 5 5v8c0 2.76 -2.24 5 -5 5h-8c-2.76 0 -5 -2.24 -5 -5v-8c0 -2.76 2.24 -5 5 -5h4Z'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' dur='1.2s' values='72;0'/%3E%3C/path%3E%3Cpath stroke-dasharray='28' stroke-dashoffset='28' d='M12 8c2.21 0 4 1.79 4 4c0 2.21 -1.79 4 -4 4c-2.21 0 -4 -1.79 -4 -4c0 -2.21 1.79 -4 4 -4'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' begin='1.4s' dur='1.2s' values='28;0'/%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
   }
 </style>

 <div class="content-wrapper">
   <header class="wrapper bg-light">
     <div class="bg-primary text-white fw-bold fs-14 mb-0">
       <div class="container py-1 d-md-flex flex-md-row">
         <div class="d-flex flex-row align-items-center">
           <div class="icon text-white fs-14 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
           <address class="mb-0"><?php echo word_limiter(strip_tags($site_setting->alamat), 5) ?></address>
         </div>
         <div class="d-flex flex-row align-items-center me-6 ms-auto">
           <div class="icon text-white fs-14 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
           <p class="mb-0"><?php echo $site_setting->telepon ?></p>
         </div>
         <div class="d-flex flex-row align-items-center">
           <div class="icon text-white fs-14 mt-1 me-2"> <i class="uil uil-message"></i></div>
           <p class="mb-0"><a href="mailto:<?php echo $site_setting->email ?>" class="link-white hover"><?php echo $site_setting->email ?></a></p>
         </div>
       </div>
       <!-- /.container -->
     </div>
     <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
       <div class="container flex-lg-row flex-nowrap align-items-center">
         <div class="navbar-brand ">
           <a href="<?php echo base_url() ?>">
             <img src="<?php echo $this->website->logo() ?>" srcset="<?php echo $this->website->logo() ?>" alt="<?php echo $this->website->namaweb() ?>" style="max-width: 250px; max-height: 52px;" />
             <a class="text-primary fs-30 mb-0"><?php echo $this->website->namaweb() ?></a>
           </a>
         </div>
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target=".offcanvas" aria-controls="offcanvasNav">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="navbar-collapse  offcanvas offcanvas-nav offcanvas-start">
           <div class="offcanvas-header d-lg-none">
             <hr>
             <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
           </div>
           <div class="offcanvas-body ms-lg-10 d-flex flex-column">
             <ul class="navbar-nav">

               <?php if ($site_setting->menu_home == 'Publish') { ?>
                 <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
                 </li>
               <?php }
                if ($site_setting->letak_menu == 'Home') {
                  echo $menu_tambahan;
                }
                if ($site_setting->menu_berita == 'Publish') { ?>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Berita</a>
                   <ul class="dropdown-menu bg-dark">
                     <?php foreach ($nav_berita as $nav_berita) { ?>
                       <li class="nav-item"><a class="dropdown-item text-primary" href="<?php echo base_url('berita/kategori/' . $nav_berita->slug_kategori) ?>"><?php echo $nav_berita->nama_kategori ?></a></li>
                     <?php } ?>
                     <li class="nav-item"><a class="dropdown-item text-warning" href="<?php echo base_url('berita') ?>">Indeks Berita</a></li>

                   </ul>
                 </li>
               <?php }
                if ($site_setting->letak_menu == 'Berita') {
                  echo $menu_tambahan;
                }
                if ($site_setting->menu_profil == 'Publish') { ?>
                 <li class="nav-item dropdown dropdown-mega">
                   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
                   <ul class="dropdown-menu mega-menu mega-menu-dark">
                     <li class="mega-menu-content">
                       <div class="row gx-0 gx-lg-3">
                         <div class="col-lg-4">
                           <h6 class="dropdown-header text-warning">Profil, Guru &amp; Staff</h6>
                           <ul class="list-unstyled pb-lg-1">
                             <?php foreach ($nav_profil as $nav_profil) { ?>
                               <li><a class="dropdown-item" href="<?php echo base_url('berita/profil/' . $nav_profil->slug_berita) ?>"><?php echo $nav_profil->judul_berita ?></a></li>
                             <?php } ?>
                             <li><a class="dropdown-item" href="<?php echo base_url('staff') ?>">Guru &amp; Staff <?php echo $this->website->namaweb() ?></a></li>
                           </ul>
                           <h6 class="dropdown-header mt-lg-6 text-warning">Layanan &amp; Produk</h6>
                           <ul class="list-unstyled">
                             <?php foreach ($nav_layanan2 as $nav_layanan2) { ?>
                               <li><a class="dropdown-item" href="<?php echo base_url('layanan/detail/' . $nav_layanan2->slug_berita) ?>"><?php echo $nav_layanan2->judul_berita ?></a></li>
                             <?php } ?>
                             <li><a class="dropdown-item text-warning" href="<?php echo base_url('layanan') ?>">Semua Layanan</a></li>
                           </ul>
                         </div>
                         <!--/column -->

                         <div class="col-lg-4">
                           <h6 class="dropdown-header text-warning">Karya &amp; Portfolio</h6>
                           <ul class="list-unstyled">
                             <?php foreach ($nav_portfolio as $nav_portfolio) { ?>
                               <li><a class="dropdown-item" href="<?php echo base_url('portfolio/kategori/' . $nav_portfolio->slug_kategori_portfolio) ?>"><?php echo $nav_portfolio->nama_kategori_portfolio ?></a></li>
                             <?php } ?>
                             <li><a class="dropdown-item text-wrap" href="<?php echo base_url('portfolio') ?>">Semua Karya</a></li>


                           </ul>
                           <h6 class="dropdown-header mt-lg-6 text-warning">Ekstrakurikuler</h6>
                           <ul class="list-unstyled">
                             <?php foreach ($nav_ekstrakurikuler as $nav_ekstrakurikuler) { ?>
                               <li><a class="dropdown-item" href="<?php echo base_url('ekstrakurikuler/kategori/' . $nav_ekstrakurikuler->slug_kategori_ekstrakurikuler) ?>"><?php echo $nav_ekstrakurikuler->nama_kategori_ekstrakurikuler ?></a></li>
                             <?php } ?>
                             <li><a class="dropdown-item text-warning" href="<?php echo base_url('ekstrakurikuler') ?>">Semua Ekstrakurikuler</a></li>
                           </ul>
                         </div>
                         <!--/column -->
                         <div class="col-lg-4">
                           <h6 class="dropdown-header text-warning">Fasilitas, Sarana &amp; Prasarana</h6>
                           <ul class="list-unstyled">
                             <?php foreach ($nav_fasilitas as $nav_fasilitas) { ?>
                               <li><a class="dropdown-item" href="<?php echo base_url('fasilitas/read/' . $nav_fasilitas->slug_fasilitas) ?>"><?php echo $nav_fasilitas->judul_fasilitas ?></a></li>
                             <?php } ?>
                             <li><a class="dropdown-item text-warning" href="<?php echo base_url('fasilitas') ?>">Semua Fasilitas</a></li>
                           </ul>
                         </div>
                         <!--/column -->
                       </div>
                       <!--/.row -->
                     </li>
                     <!--/.mega-menu-content-->
                   </ul>
                   <!--/.dropdown-menu -->
                 </li>
               <?php }
                if ($site_setting->letak_menu == 'Profil') {
                  echo $menu_tambahan;
                }
                if ($site_setting->menu_prestasi == 'Publish') { ?>

                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Prestasi</a>
                   <ul class="dropdown-menu bg-dark">
                     <?php foreach ($nav_prestasi as $nav_prestasi) { ?>
                       <li><a class="dropdown-item text-white" href="<?php echo base_url('prestasi/kategori/' . $nav_prestasi->slug_kategori_prestasi) ?>"><?php echo $nav_prestasi->nama_kategori_prestasi ?></a></li>
                     <?php } ?>
                     <li><a class="dropdown-item text-warning" href="<?php echo base_url('prestasi') ?>">Semua Prestasi</a></li>
                   </ul>
                 </li>


               <?php }
                if ($site_setting->letak_menu == 'Prestasi') {
                  echo $menu_tambahan;
                }
                if ($site_setting->menu_galeri == 'Publish') { ?>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Galeri</a>
                   <ul class="dropdown-menu bg-dark">

                     <li class="nav-item"><a class="dropdown-item text-white" href="<?php echo base_url('galeri') ?>">Galeri Gambar</a></li>
                     <li class="nav-item"><a class="dropdown-item text-white" href="<?php echo base_url('video') ?>">Galeri Video</a></li>

                   </ul>
                 </li>
               <?php }
                if ($site_setting->letak_menu == 'Galeri') {
                  echo $menu_tambahan;
                }
                if ($site_setting->menu_unduhan == 'Publish') { ?>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Unduhan</a>
                   <ul class="dropdown-menu bg-dark">

                     <?php foreach ($nav_download as $nav_download) { ?>
                       <li><a class="dropdown-item text-white" href="<?php echo base_url('download/kategori/' . $nav_download->slug_kategori_download) ?>"><?php echo $nav_download->nama_kategori_download ?></a></li>
                     <?php } ?>
                     <li><a class="dropdown-item text-warning" href="<?php echo base_url('download') ?>">Semua Unduhan</a></li>

                   </ul>
                 </li>
               <?php }
                if ($site_setting->letak_menu == 'Unduhan') {
                  echo $menu_tambahan;
                }
                if ($site_setting->menu_tautan == 'Publish') { ?>
                 <li class="nav-item dropdown dropdown-mega">
                   <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tautan</a>
                   <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                     <li class="mega-menu-content">
                       <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                         <?php foreach ($nav_link_website as $nav_link_website) { ?>
                           <li class="col"><a class="dropdown-item" href="<?php echo $nav_link_website->link_website ?>" target="<?php echo $nav_link_website->metode_link ?>">
                               <div class="rounded img-svg d-none d-lg-block p-0 mb-lg-2">
                                 <img class="img img-thumbnail bg-light rounded" src="<?php echo base_url('assets/upload/image/thumbs/' . $nav_link_website->gambar) ?>" alt="<?php echo $nav_link_website->nama_link_website ?>">
                               </div>
                               <span><?php echo $nav_link_website->nama_link_website ?>
                               </span>
                             </a>
                           </li>
                         <?php } ?>

                       </ul>
                       <!--/.row -->
                     </li>
                     <!--/.mega-menu-content-->
                   </ul>
                   <!--/.dropdown-menu -->
                 </li>
               <?php }
                if ($site_setting->letak_menu == 'Tautan') {
                  echo $menu_tambahan;
                } ?>
               <?php if ($site_setting->menu_kontak == 'Publish') { ?>
                 <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url('kontak') ?>">Kontak</a>
                 </li>
               <?php } ?>


             </ul>
             <!-- /.navbar-nav -->
             <div class="offcanvas-footer d-lg-none">
               <div>
                 <a href="mailto:first.last@email.com" class="link-inverse">smkn1buahdua@gmail.com</a>
                 <a href="mailto:first.last@email.com" class="link-inverse">smkn1buahdua@yahoo.com</a>
                 <br /> 00 (123) 456 78 90 <br />
                 <nav class="nav social social-white mt-4">
                   <a href="<?php echo $site_setting->facebook ?>"><i class="line-md--facebook"></i></a>
                   <a href="<?php echo $site_setting->instagram ?>"><i class="line-md--instagram"></i></a>
                   <a href="<?php echo $site_setting->tiktok ?>"><i class="line-md--tiktok"></i></a>
                   <a href="<?php echo $site_setting->youtube ?>"><i class="line-md--youtube-twotone"></i></a>
                   <a href="<?php echo $site_setting->twitter ?>"><i class="line-md--twitter-x"></i></a>
                 </nav>
                 <!-- /.social -->
               </div>
             </div>
             <!-- /.offcanvas-footer -->
           </div>
           <!-- /.offcanvas-body -->
         </div>
         <!-- /.navbar-collapse -->
         <?php if ($site_setting->fitur_pendaftaran == 'On') { ?>
           <div class="navbar-other w-100 d-flex ms-auto">
             <ul class="navbar-nav flex-row align-items-center ms-auto">



               <?php if (Session()->get('username_siswa') != '') { ?>
                 <li class="nav-item d-none d-md-block">
                   <a href="<?php echo base_url('siswa/dasbor') ?>" class="btn btn-sm btn-danger px-2 py-1 text-sm">
                     <i class="fa fa-user"></i>&nbsp; Dasbor Siswa
                   </a>
                 </li>

                 <li class="nav-item d-none d-md-block">
                   <a href="<?php echo base_url('signin/logout') ?>" class="btn btn-sm btn-outline-danger px-2 py-1 text-sm">
                     <i class="fa fa-sign-out-alt"></i>
                   </a>
                 </li>

               <?php } else { ?>

                 <li class="nav-item d-none d-md-block">
                   <a href="<?php echo base_url('pendaftaran') ?>" class="btn btn-sm btn-primary px-2 py-1 text-sm">Pendaftaran</a>
                 </li>

                 <li class="nav-item d-none d-md-block">
                   <a href="<?php echo base_url('signin') ?>" class="btn btn-sm btn-danger px-2 py-1 text-sm">Login</a>
                 </li>

               <?php } ?>

               <li class="nav-item d-lg-none">
                 <button class="hamburger offcanvas-nav-btn"><span></span></button>
               </li>
             </ul>
             <!-- /.navbar-nav -->
           </div>
           <!-- /.navbar-other -->
         <?php } ?>
       </div>
       <!-- /.container -->
     </nav>
     <!-- /.navbar -->
   </header>
   <!-- /header -->