<div class="container-fluid">
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info">Edit Data Mahasiswa</h6>
            </div>
            <div class="card-body">

	<?php foreach ($buku as $b){ ?>
<form action="<?php echo base_url().'admin/update_buku' ?>" method="post"
enctype="multipart/form-data">
<div class="form-group">
<label>Kategori</label>
<select name="id_kategori" class="form-control">
<option value="<?php echo $b->id_kategori; ?>"><?php echo
$b->nama_kategori; ?></option>
<?php foreach ($kategori as $k) { ?>
<option value="<?php echo $k->id_kategori; ?>"><?php echo
$k->nama_kategori; ?></option>
<?php } ?>
</select>
<?php echo form_error('id_kategori'); ?>
</div>
<div class="form-group">
<label>Judul Buku</label>
<input type="hidden" name="id" value="<?php echo $b->id_buku; ?>">
<input type="text" name="judul_buku" class="form-control" value="<?php
echo $b->judul_buku; ?>">
<?php echo form_error('judul_buku'); ?>
</div>
<div class="form-group">
<label>Pengarang</label>
<input type="text" name="pengarang" class="form-control" value="<?php
echo $b->pengarang; ?>">
<?php echo form_error('pengarang'); ?>
</div>
<div class="form-group">
<label>Penerbit</label>
<input type="text" name="penerbit" class="form-control" value="<?php
echo $b->penerbit; ?>">
<?php echo form_error('penerbit'); ?>
</div>
<div class="form-group">
<label>Tahun Terbit</label>
<input type="date" name="thn_terbit" class="form-control" value="<?php
echo $b->thn_terbit; ?>">
<?php echo form_error('thn_terbit'); ?>
</div>
<div class="form-group">
<label>ISBN</label>
<input type="text" name="isbn" class="form-control" value="<?php echo
$b->isbn; ?>">
<?php echo form_error('isbn'); ?>
</div>
<div class="form-group">
<label>Jumlah Buku</label>
<input type="text" name="jumlah_buku" class="form-control"
value="<?php echo $b->jumlah_buku; ?>">
<?php echo form_error('jumlah_buku'); ?>
</div>
<div class="form-group">
<label>Lokasi</label>
<input type="text" name="lokasi" class="form-control" value="<?php echo
$b->lokasi; ?>">
<?php echo form_error('lokasi'); ?>
</div>
<div class="form-group">
<label>Status Buku</label>
<select name="status_buku" class="form-control">
<option <?php if($b->status_buku == "1"){echo "selected='selected'";}
echo $b->status_buku; ?> value="1">Tersedia</option>
<option <?php if($b->status_buku == "0"){echo "selected='selected'";}
echo $b->status_buku; ?> value="0">Sedang dipinjam</option>
</select>
<?php echo form_error('status_buku'); ?>
</div>
<div class="form-group">
<label>Gambar</label>
<?php
if(isset($b->gambar)){
echo '<input type="hidden" name="old_pict" value="'.$b->gambar.'">';
echo '<img src="'.base_url().'asset/Upload/'.$b->gambar.'"
width="15%">';
}?>
<input name="foto" type="file" class="form-control">
</div>
<div class="form-group">
                       
          <button type="submit" value="Update"  class="btn btn-primary">Update</button>
          <button type="button" value="Kembali" class="btn btn-danger" onclick="window.history.go(-1)">Kembali</button>


         
	</form>
<?php } ?>

</div>
</div>
</div>







