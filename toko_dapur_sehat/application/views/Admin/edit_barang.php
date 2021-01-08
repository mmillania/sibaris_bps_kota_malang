<div class="container-fluid">
    <h3>Edit Data Barang</h3>

    <?php foreach($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url().'Admin/Data_barang/update' ?>">

        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="<?php echo $brg->kode_barang?>">
        </div><div

         class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang?>">
        </div>

        <div class="form-group">
            <label>Jumlah Barang</label>
            <input type="text" name="jumlah" class="form-control" value="<?php echo $brg->jumlah?>">
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <select class="form-control" name="satuan">
              <option>Buah</option>
              <option>Unit</option>
            </select>
        </div>

        <div class="form-group">
            <label>Ruang</label>
            <select class="form-control" name="id_ruang">
            <?php foreach ($ruang as $r) : ?>
                <option value="<?= $r['id_ruang'] ?>"><?= $r['uraian_ruang'] ?></option>
              <?php endforeach; ?>
            </select>
        </div>
                       
        <div class="form-group">
            <label>Keadaan</label>
            <select class="form-control" name="keadaan">
              <option>Baik</option>
              <option>Rusak Ringan</option>
              <option>Rusak Berat</option>
            </select>
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?>">
        </div>

    

        <button type="submit" class="btn btn-danger btn-sm">Batalkan</button>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    <?php endforeach; ?> 
</div>