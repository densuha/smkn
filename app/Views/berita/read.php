<section class="wrapper bg-soft-primary  bg-image" data-image-src="<?php echo $this->website->banner() ?>">
  <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
    <div class="row">
      <div class="col-md-10 col-lg-10 col-xl-10 mx-auto">
        <h1 class="display-1 mb-1 text-warning"><?php echo $title ?></h1>
    </div>
    <!-- /column -->
</div>
<!-- /.row -->
</div>
<!-- /.container -->
</section>
    <!-- /section -->
<section class="wrapper bg-light">
  <div class="container pb-14 pb-md-16">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="blog classic-view mt-n17">

            <article class="post">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale">
                    
                      <?php if($berita->gambar !='') { ?>
                            <img src="<?php echo base_url('assets/upload/image/'.$berita->gambar) ?>" alt="<?php echo $title ?>" class="img-thumbnail">
                        <?php } ?>
                    
                    
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="<?php echo base_url('berita/kategori/'.$berita->slug_kategori) ?>" class="hover" rel="category"><?php echo $berita->nama_kategori ?></a>
                      </div>
                     
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <?php echo $berita->isi ?>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-2">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i>
                      <span><?php echo $this->website->tanggal_bulan_menit($berita->tanggal_publish) ?></span></li>
                      <li class="post-comments"><a href="#"><i class="fa fa-eye"></i><span> Dibaca <?php echo $berita->hits ?> kali</span></a></li>
                      <span>
                      <li class="post-author"><a href="#"><i class="uil uil-user"></i><span><?php echo $berita->nama ?></span></a></li>
                      
                     
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->

            
    
</div>
</div>
</div>
</div>
</section>