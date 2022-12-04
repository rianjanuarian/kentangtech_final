<!-- Fopageoter-->

  <!-- Remove the container if you want to extend the Footer to full width. -->


<!-- Footer -->
<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/kentangtechmedia/">Facebook</a></li>
              <li><a href="https://www.instagram.com/kentangtech_aja/">Instagram</a></li>
              <li><a href="https://www.tiktok.com/@kentangkrispich?lang=id-ID">TikTok</a></li>
              
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p> © <?= date('Y') ?> Kentang Tech
                    
             
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body border-0">
                <form method="GET" action="<?= base_url('search'); ?>">
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control form-control-lg" placeholder="Cari Postingan ...." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-dark" type="submit" id="button-addon2">Cari <i class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <!-- Additional Scripts -->
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.js"></script>
    <script src="<?= base_url() ?>assets/js/slick.js"></script>
    <script src="<?= base_url() ?>assets/js/isotope.js"></script>
    <script src="<?= base_url() ?>assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

</html>