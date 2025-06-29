<?php if ($client) { ?>
  <section class="wrapper bg-light">
    <div class="container pt-3 pt-md-6">
      <div class="px-lg-5 mb-4 mb-md-6">

        <div class="row gx-0 gx-md-8 gx-xl-9 gy-8 align-items-center">
          <div class="text-center mb-5">
            <h2>Mitra Kami</h2>
          </div>
          <?php
          $count = 0;
          foreach ($client as $client) {
            if ($count >= 30) break; // Only show first 9 images
          ?>

            <div class="col-4 col-md-3 col-lg-2 mb-4">
              <figure class="px-2 px-md-2">
                <img src="<?php echo base_url('assets/upload/image/' . $client->gambar) ?>" alt="<?php echo $client->nama_client ?>" class="img-fluid" />
              </figure>
            </div>
            <!--/column -->
          <?php
            $count++;
          } ?>
        </div>
        <!--/.row -->
      </div>
      <!-- /div -->
    </div>
  </section>
<?php } ?>