<?= $this->session->flashdata('message') ?>
<!-- Basic features section-->

<!-- Banner Starts Here -->
<div class="main-banner header-text">
      <div class="container-fluid">

        <div class="owl-banner owl-carousel">
        <?php foreach ($list as $p) { ?>
            
          <div class="item">
          <a href="<?= base_url('post/detail/' . $p->permalink) ?>">
                                        <?php
                                        $imgPost = base_url('assets/dist/img/no-image.png');
                                        if ($p->gambar_post !== '') {
                                            $imgPost = base_url('assets/img/thumb/' . $p->gambar_post);
                                        }
                                        ?>
            <img src="<?= $imgPost ?>" alt="gambar_<?= $p->judul_post ?>" width="520" 
             height="500">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                <span> <?= $p->nama_kategori ?></span>
                  
                </div>
              
                <a href="<?= base_url('post/detail/' . $p->permalink) ?>" >
                                          <h4><?= $p->judul_post ?></h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a><?= mediumdate_indo($p->tanggal_post) ?><a></li>
                  <li><a> </a></li>
                  
                </ul>
              </div>
              
            </div>
           
            </div>
            <?php } ?>
            </div>
                                      </div>

            <section class="call-to-action">
            <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span></span>
                  <h4></h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://www.youtube.com/c/KentangTech_official" target="_parent">Subscribe</a>
                  </div>
                </div>
              </div>
             </div>
          
           
      </div>
    </section>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                  <?php foreach ($post as $p) { ?>
                    <div class="blog-thumb">
                    <a href="<?= base_url('post/detail/' . $p->permalink) ?>">
                                        <?php
                                        $imgPost = base_url('assets/dist/img/no-image.png');
                                        if ($p->gambar_post !== '') {
                                            $imgPost = base_url('assets/img/thumb/' . $p->gambar_post);
                                        }
                                        ?>
                    <img src="<?= $imgPost ?>" alt="gambar_<?= $p->judul_post ?>">
                    </div>
                    <div class="down-content"  id="komen">
                      <span> <?= $p->nama_kategori ?></span>
                      <a href="<?= base_url('post/detail/' . $p->permalink) ?>" >
                                          <h4><?= $p->judul_post ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#"><?= mediumdate_indo($p->tanggal_post) ?></a></li>
                      
                   
                    </li>
                      </ul>
                      <p class="fs-6"><?= word_limiter(strip_tags(htmlspecialchars_decode($p->konten_post)), 40) ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                                
                              <li><i class="fa fa-tags"></i></li>
                              <li><a><?php if ($p->tags == null) : ?>
                                        <?php else : ?>
                                            <?php
                                            $id_post = $p->id_post;
                                            if ($p->tags !== null) {
                                                $tag = explode(',', $p->tags);
                                                foreach ($tag as $t) { ?>
                                                    <?php $tg = $this->db->get_where('tag', ['id_tag' => $t])->row() ?>
                                                    <a href="<?= base_url('tag/' . strtolower($tg->permalink_tg)) ?>">
                                                        <?= $tg->nama_tag ?></span>
                                                    </a>
                                            <?php }
                                            } ?>
                                        <?php endif; ?></a></li>
                             
                            </ul>
                          </div>
                          
                          
                        </div>
                      
                      </div>
                      
                    </div>
                    <?php } ?>
                  </div>
                  
                </div>
           
                
                
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <?= $halaman; ?>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                   
                    <form method="GET" action="<?= base_url('search'); ?>">
                   
                    <input type="text" name="cari" class="form-control form-control-lg" placeholder="Cari Postingan ...." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="submit" id="button-addon2">Cari </button>
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                   
                    <div class="content">
                    <?php foreach ($list as $ls) { ?>
                      <ul>
                        <li><a>
                          <h5>
                          <?= anchor('post/detail/' . $ls->permalink, word_limiter($ls->judul_post, 15), [$ls->judul_post]) ?>
                          
                          </h5>
                          <span><?= mediumdate_indo($p->tanggal_post) ?></span>
                        </a></li>
                        &nbsp;
                      
                      </ul>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                <?php $all = $this->db->get_where('post', ['status_post' => 1])->num_rows(); ?>
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php foreach ($kategori->result() as $k) { ?>
                        <li><a href="<?= base_url('kategori/' . strtolower($k->permalink_kt)) ?>"><?= $k->nama_kategori ?> (<?= $k->jumlah ?>)</a></li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <?php
                    $tag = $this->db->query('SELECT * FROM `tag` ORDER BY nama_tag ASC')->result();
                    foreach ($tag as $t) {
                    ?>
                    <div class="content">
                    
                      <ul>
                      
                    <?php $tg = $this->db->query("SELECT * FROM post WHERE post.status_post = 1 AND tags LIKE '%$t->id_tag%'")->num_rows() ?>
                       
                                       <li><a href="<?= base_url('tag/' . strtolower($t->permalink_tg)) ?>"><?= $t->nama_tag ?> (<?= $tg ?>)</a></li>

                                       
                      </ul>
                      
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><script>
    (function() {
        'use strict'

        var forms = document.querySelectorAll('.butuh-validasi')
       
        var errEmail = document.getElementById('erroremail')
        var errIsi = document.getElementById('errorisi')
        var errNama = document.getElementById('errornama')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                   
                    var l = response.length
                    var mail_format = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                    var nama = document.Komentar.comment_name.value;
                    var email = document.Komentar.comment_email.value;
                    var isi = document.Komentar.comment_body.value;

                    if (!form.checkValidity() || l == 0 || nama == "" || email == "" || isi == "") {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    

                    if (nama == "") {
                        errNama.innerHTML =
                            "Silahkan isi nama anda";
                        errNama.classList.add('d-block')
                    } else {
                        errNama.classList.remove('d-block')
                        errNama.innerHTML = " ";
                    }

                    if (email == "") {
                        errEmail.innerHTML =
                            "Silahkan isi email anda";
                        errEmail.classList.add('d-block')
                    } else if (email.match(mail_format)) {
                        errEmail.innerHTML = " ";
                        errEmail.classList.remove('d-block')
                    } else {
                        event.preventDefault()
                        event.stopPropagation()
                        // email.classList.add('mail')
                        errEmail.innerHTML =
                            "Mohon untuk memasukkan Format Email yang benar";
                        errEmail.classList.add('d-block')
                    }

                    if (isi == "") {
                        errIsi.innerHTML =
                            "Silahkan isi komentar";
                        errIsi.classList.add('d-block')
                    } else {
                        errIsi.classList.remove('d-block')
                        errIsi.innerHTML = " ";
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
