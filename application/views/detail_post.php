<?= $this->session->flashdata('message') ?>
<!--  ======================= Start Main Area ================================ -->
<div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4></h4>
                <h2></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <?php
                                $imgPost = base_url('assets/dist/img/no-image.png');
                                if ($post->gambar_post !== '') {
                                    $imgPost = base_url('assets/img/post/' . $post->gambar_post);
                                }
                                ?>
                      <img src="<?= $imgPost ?>" alt="gambar-post <?= $post->judul_post ?>">
                    </div>
                    <div class="down-content">
                      <span><?= $post->nama_kategori ?> </span>
                      <a><h4><?= $post->judul_post ?></h4></a>
                      <ul class="post-info">
                        <li><a>Admin</a></li>
                        <li><a><?= longdate_indo($post->tanggal_post) ?></a></li>
                        <li><a><?= $komen ?> Komentar</a></li>
                      </ul>
                      
                     <p> <?= htmlspecialchars_decode($post->konten_post) ?></p>
                              
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a> <?php if ($post->tags == null) : ?>
                                        <?php else : ?>
                                            <?php
                                            $id_post = $post->id_post;
                                            if ($post->tags !== null) {
                                                $tag = explode(',', $post->tags);
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
                          <div class="col-6">
                            <ul class="post-share">
                             
                              <li><!-- AddToAny BEGIN -->
                              <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v15.0" nonce="NI1eqmPW"></script>

<div class="a2a_kit a2a_kit_size_29 a2a_default_style">
<div class="fb-share-button" data-href="http://localhost/kentangtech/post/detail/arkane-pastikan-dishonored-dan-deathloop-berada-di-semesta-sama" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fkentangtech%2Fpost%2Fdetail%2Farkane-pastikan-dishonored-dan-deathloop-berada-di-semesta-sama&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>

<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_line"></a>

</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END --></li>
                             
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2><?= $komen ?> Komentar</h2>
                    </div>
                    <?= $komentar ?>
                    
                  </div>
                   </div>
                 <div class="col-lg-12">
                   <p>
                            <?= $this->session->has_userdata('loggedIn') == true ? '' : $this->session->flashdata('error_msg');
                            ?></p>
                        <div id="info_balas"></div>
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Komentar Anda</h2>
                    </div>
                    <?= form_open('beranda/add_comment', ['id' => 'form_komentar', 'name' => 'Komentar', 'class' => 'row g-3 butuh-validasi', 'novalidate' => ''], ['parent_id' => '', 'id_post' => $post->id_post, 'url' => current_url()])
                    ?>
                     <!-- <form action="<?= base_url('kirim_komentar') ?>" id="form_komentar" name="Komentar" class="row g-3 needs-validation" method="post" novalidate> -->
                    <div class="content" id="komen">
                      <form id="comment" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                            <input class="form-control" placeholder="nama Anda" type="text" name="comment_name" id="name" value="<?= set_value('comment_name', ($this->session->has_userdata('name') == true ? $this->session->userdata('name') : $this->session->userdata('cnama'))) ?>" <?= $this->session->has_userdata('name') == true ? 'readonly' : '' ?> required />
                                <div id="errornama" class="invalid-feedback"></div>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                            <input class="form-control" type="email" placeholder="email Anda" name="comment_email" id="email" value="<?= set_value('comment_email', ($this->session->has_userdata('email') == true ? $this->session->userdata('email') : $this->session->userdata('cemail'))) ?>" <?= $this->session->has_userdata('email') == true ? 'readonly' : '' ?> required />
                            </fieldset>
                          </div>
                          
                          <div class="col-lg-12">
                            <fieldset>
                          
                            <textarea placeholder="isi komentar Anda" rows="5" type="text" class="form-control" name="comment_body" id="comment_body" required></textarea>
                            <div id="errorisi" class="invalid-feedback"></div>
                            </fieldset>
                          </div>
                          <div id="submit_button" class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Tambahkan Komentar</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                    <?= form_close()
                        ?>
                  </div>
                  
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
                          <span><?= mediumdate_indo($post->tanggal_post) ?></span>
                        </a></li>
                        &nbsp;
                      
                      </ul>
                      <?php } ?>
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
    </section>


<script>
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