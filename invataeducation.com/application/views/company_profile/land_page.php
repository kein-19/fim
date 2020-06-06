<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top position-fixed">
    <div class="container">
      <p class="navbar-brand" href="#">Invata</p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link page-scroll" href="#about">About</a>
          <a class="nav-item nav-link page-scroll" href="#portfolio">Portfolio</a>
          <a class="nav-item nav-link page-scroll" href="#feature">Features</a>
          <a class="nav-item nav-link page-scroll" href="#contac">Contac</a>
          <a class="nav-item btn btn-primary tombol" href="<?= base_url('Auth'); ?>">Join Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Akhir Navbar -->

  <!-- Jumbotron -->

  <div class="jumbotron jumbotron-fluid" >
    <div class="container">
      <h1 class="display-4">Get work <span>Faster</span><br> and <span>Batter</span> with us</h1>
      <a href="" class="btn btn-primary tombol">Our Work</a>
    </div>
  </div>

  <!-- Akhir Jumbotron -->

  <!-- Container -->
  <div class="container">
    <!-- Info Panel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row justify-content-center">
          <div class="col-lg">
            <img src="<?= base_url('asset')?>/img/company_profile/img/employee.png" alt="employe" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="<?= base_url('asset')?>/img/company_profile/img//hires.png" alt="hires" class="float-left">
            <h4>Hight-Res</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img src="<?= base_url('asset')?>/img/company_profile/img//security.png" alt="security" class="float-left">
            <h4>Security</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->


    <!-- about -->
    <section class="about" id="about">
      <div class="row text-center">
        <div class="col-sm-12">
          <h2>About</h2>
          <hr>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-4">
            <p>
              Grid systems are used for creating page layouts through a series of rows and columns that house your
              content. Here's how the Bootstrap grid system works:

              Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper
              alignment and padding.
              Use rows to create horizontal groups of columns.
              Content should be placed within columns, and only columns may be immediate children of rows.
              Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins
              can also be used for more semantic layouts.
              Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the
              first and last column via negative margin on .rows.
              The negative margin is why the examples below are outdented. It's so that content within grid columns is
              lined up with non-grid content.
              Grid columns are created by specifying the number of twelve available columns you wish to span. For
              example, three equal columns would use three .col-xs-4.
              If more than 12 columns are placed within a single row, each group of extra columns will, as one unit,
              wrap onto a new line.
              Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and
              override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an
              element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class
              is not present.

              Look to the examples for applying these principles to your code.
            </p>
          </div>

          <div class="col-sm-4">
            <p>
              Grid systems are used for creating page layouts through a series of rows and columns that house your
              content. Here's how the Bootstrap grid system works:

              Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper
              alignment and padding.
              Use rows to create horizontal groups of columns.
              Content should be placed within columns, and only columns may be immediate children of rows.
              Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins
              can also be used for more semantic layouts.
              Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the
              first and last column via negative margin on .rows.
              The negative margin is why the examples below are outdented. It's so that content within grid columns is
              lined up with non-grid content.
              Grid columns are created by specifying the number of twelve available columns you wish to span. For
              example, three equal columns would use three .col-xs-4.
              If more than 12 columns are placed within a single row, each group of extra columns will, as one unit,
              wrap onto a new line.
              Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and
              override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an
              element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class
              is not present.

              Look to the examples for applying these principles to your code.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->
  </div>
  <!-- Akhir Container -->


  <!-- portfolio -->
  <section class="portfolio" id="portfolio">
    <!-- container -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Portfolio</h2>
          <hr>
        </div>
      </div>
      <div class="tz-gallery">
        <div class="row">
          <div class="col-sm-4">
            <a href="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/1.jpg" class="mybox">
              <img src="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/1.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/2.jpg" class="mybox">
              <img src="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/2.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/3.jpg" class="mybox">
              <img src="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/3.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/4.jpg" class="mybox">
              <img src="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/4.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/5.jpg" class="mybox">
              <img src="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/5.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/6.jpg" class="mybox">
              <img src="<?= base_url('asset')?>/img/company_profile/img_body/portfolio/6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
  </section>
  <!-- akhir portfolio -->
  </div>
  <!-- Akhir container -->


  <!-- Working Space -->
  <section class="workingspacesection" id="feature">
    <!-- container -->
    <div class="container">
      <div class="row workingspace">
        <div class="col-lg">
          <img src="<?= base_url('asset')?>/img/company_profile/img/workingspace.png" alt="workingspace" class="img-fluid">
        </div>
        <div class="col-lg">
          <h3>You <span>work</span> like at <span>home</span></h3>
          <p>bekerja dengan suasana hati yang lebih asik dan mempelajairi hal baru setiap harinya.</p>
          <a href="" class="btn btn-primary tombol">Gallery</a>
        </div>
      </div>
      <!-- Akhir Container -->
    </div>
  </section>
  <!-- Akhir Working Space -->

  <!-- contac -->
  <section class="contac" id="contac">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contac</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 offset-2">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control-file" id="nama" placeholder="masukan Nama anda">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control-file" id="email" placeholder="masukan Email anda">
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="tel" class="form-control-file" id="telepon" placeholder="masukan Telepon anda">
            </div>
            <div class="form-group">
              <label for="inputState">Pilih kategori</label>
              <select class="form-control">
                <option>--pilih kategori--</option>
                <option>test 1</option>
                <option>test 2</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pesan"> Kirim pesan</label>
              <textarea class="form-control-file" rows="10" placeholder="masukan pesan"></textarea>
            </div>
            <button type="button" class="btn btn-success">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir contac -->