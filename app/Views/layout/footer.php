<?php

use App\Models\Nav_model;
use App\Models\Konfigurasi_model;

$m_menu         = new Nav_model();
$nav_profil     = $m_menu->profil('Profil');
$site_setting   = $m_site->listing();
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
<?php
$sek  = date('Y');
$awal = $sek - 100;
?>

<script>
  $(".datepicker").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php $tahundepan = date('Y') + 2;
                                    echo $tahundepan; ?>"
  });

  $(".tanggal").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php $tahundepan = date('Y') + 2;
                                    echo $tahundepan; ?>"
  });

  $(".tanggalan").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php $tahundepan = date('Y') + 2;
                                    echo $tahundepan; ?>"
  });
</script>
<a href="https://api.whatsapp.com/send?phone=<?php echo $site_setting->hp ?>" class="whatsapp-link" target="_blank">
  <i class="fab fa-whatsapp fa-3x"></i>
</a>

<!--==============================
Footer Area
==============================-->
<footer class="bg-navy text-inverse">
  <div class="container py-13 py-md-15">
    <div class="row gy-6 gy-lg-0">
      <div class="col-md-4 col-lg-4">
        <div class="widget">
          <img class="mb-4 img-fluid" src="<?php echo $this->website->logo() ?>" srcset="<?php echo $this->website->logo() ?> 2x" alt="<?php echo $this->website->namaweb() ?>" />
          <p class="mb-4">© <?php echo date('Y') ?> <?php echo $this->website->namaweb() ?>.<br class="d-none d-lg-block" /> SMKN 1 BUAHDUA <br class="d-none d-lg-block" />All rights reserved.</p>
          <nav class="nav social ">
            <a href="<?php echo $site_setting->facebook ?>"><i class="line-md--facebook"></i></a>
            <a href="<?php echo $site_setting->instagram ?>"><i class="line-md--instagram"></i></a>
            <a href="<?php echo $site_setting->tiktok ?>"><i class="line-md--tiktok"></i></a>
            <a href="<?php echo $site_setting->youtube ?>"><i class="line-md--youtube-twotone"></i></a>
            <a href="<?php echo $site_setting->twitter ?>"><i class="line-md--twitter-x"></i></a>
          </nav>
          <!-- /.social -->
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->
      <div class="col-md-4 col-lg-4">
        <div class="widget">
          <h4 class="widget-title  mb-3 text-white">Hubungi Kami</h4>
          <address class="pe-xl-15 pe-xxl-17"><?php echo $site_setting->alamat ?></address>
          <a href="mailto:<?php echo $site_setting->email ?>" class="link-body"><?php echo $site_setting->email ?></a><br /> <?php echo $site_setting->telepon ?>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->
      <div class="col-md-4 col-lg-4">
        <div class="widget">
          <h4 class="widget-title  mb-3 text-white">Tentang Kami</h4>
          <ul class="list-unstyled text-reset mb-0">
            <li><a href="<?php echo base_url('portfolio') ?>">Profil Kami</a></li>
            <li><a href="<?php echo base_url('berita') ?>">Berita dan Artikel</a></li>
            <li><a href="<?php echo base_url('prestasi') ?>">Prestasi &amp; Penghargaan</a></li>
            <li><a href="<?php echo base_url('download') ?>">Download File</a></li>
            <li><a href="<?php echo base_url('galeri') ?>">Galeri Gambar</a></li>
            <li><a href="<?php echo base_url('video') ?>">Galeri Video</a></li>
          </ul>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->

    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</footer>
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<script src="<?php echo base_url() ?>assets/template/assets/js/plugins.js"></script>
<script src="<?php echo base_url() ?>assets/template/assets/js/theme.js"></script>
<script>
  $(document).ready(function() {
    $('input.jam').timepicker({
      timeFormat: 'HH:mm:ss',
      // year, month, day and seconds are not important
      minTime: new Date(0, 0, 0, 8, 0, 0),
      maxTime: new Date(0, 0, 0, 15, 0, 0),
      // time entries start being generated at 6AM but the plugin 
      // shows only those within the [minTime, maxTime] interval
      startHour: 6,
      // the value of the first item in the dropdown, when the input
      // field is empty. This overrides the startHour and startMinute 
      // options
      startTime: new Date(0, 0, 0, 8, 20, 0),
      // items in the dropdown are separated by at interval minutes
      interval: 10
    });
  });

  // Popup Delete
  $(document).on("click", ".delete-link", function(e) {
    e.preventDefault();
    url = $(this).attr("href");
    Swal.fire({
      title: 'Anda yakin?',
      text: "Jika dihapus, data tidak dapat dikembalikan lagi!",
      icon: 'info',
      timer: 5000,
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus Data!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: url,
          success: function(resp) {
            window.location.href = url;
          }
        });
      }
    })
  });

  // Popup Delete
  $(document).on("click", ".disable-link", function(e) {
    e.preventDefault();
    url = $(this).attr("href");
    Swal.fire({
        title: "Yakin akan mengupdate data ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: 'btn btn-danger',
        cancelButtonClass: 'btn btn-success',
        buttonsStyling: false,
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel",
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
            url: url,
            success: function(resp) {
              window.location.href = url;
            }
          });
        }
        return false;
      });
  });


  <?php if (isset($_GET['logout'])) { ?>
    Swal.fire({
      icon: 'success',
      heightAuto: false,
      timer: 3000,
      title: 'Sukses...',
      text: 'Anda berhasil logout.',
    })
  <?php }
  if (Session()->getFlashdata('warning')) { ?>
    // Notifikasi
    Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      timer: 3000,
      heightAuto: false,
      text: '<?php echo Session()->getFlashdata('warning'); ?>',
    })
  <?php } ?>
  <?php if (Session()->getFlashdata('sukses')) { ?>
    // Notifikasi
    Swal.fire({
      icon: 'success',
      heightAuto: false,
      timer: 3000,
      title: 'Alhamdulillah...',
      text: '<?php echo Session()->getFlashdata('sukses'); ?>',
    })
  <?php } ?>
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  // adada
  $(function() {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function() {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function(e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>

</body>

</html>