<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="container-fluid">
<h3>Data Ruang</h3>
    <table class="table table-bordered">
    <tr>
    <td>No</td>
    <th>Kode Ruang</th>
    <th>Uraian Ruang</th>
    <th>Lantai Ruang</th>
    <th>Penanggung Jawab Ruang</th>
    <th>No Telepon/Whatsapp</th>
    <th>Alamat</th>
    </tr>

    <?php
    $no=1;
    foreach($ruang as $rg) : ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $rg->kode_ruang ?></td>
        <td><?php echo $rg->uraian_ruang ?></td>
        <td><?php echo $rg->lantai ?></td>
        <td><?php echo $rg->pj_ruang ?></td>
        <td><?php echo $rg->no_tlp ?></td>
        <td><?php echo $rg->alamat ?></td>

        </tr>

    <?php endforeach;?>
    </table>
</div>

<!-- <div class="row text-center mt-3">
  <?php foreach ($Info as $blg) : ?>

  <div class="card ml-3 mb-3" style="width: 16rem;">
  <img src="<?php echo base_url().'/uploads/'.$blg->gambar_blog ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $blg->nama_blog ?></h5>

    

    <?php echo anchor('Dashboard/detail_blog/' .$blg->id_blog, '<div class="btn btn-sm btn-success">Detail</div>') ?>
    
  </div>
</div>

  <?php endforeach; ?>
</div> -->
</div>