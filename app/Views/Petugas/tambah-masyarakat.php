<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<h2>Penambahan Data Masyarakat</h2>
<p>Silahkan gunakan form dibawah ini untuk mendata masyarakat baru.</p>
<form method="POST" action="/masyarakat/simpan">
<div class="form-group">
<label class="font-weight-bold">NIK</label>
<input type="text" name="txtInputNik" maxlength="16" class="form-control" placeholder="Masukan NIK" autocomplete="off" autofocus>
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Username</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan username" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Nomor HP</label>
<input name="txtTelp" type="text" maxlength="13" class="form-control" placeholder="Masukan Nomor HP" required>
</div>
<div class="form-group">
    <label class="font-weight-bold">Password</label>
    <input name="txtPassword" id="password-field" type="password" class="form-control" placeholder="Masukan Password" required>
    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<button class="btn btn-primary">Simpan</button>

</div>
</form>
<?= $this->endSection() ?>