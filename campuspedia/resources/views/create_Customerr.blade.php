<h1>Masukan Data Beasiswa</h1>
<form class="form" method="post" action="" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <p>Judul Beasiswa: <input type="text" name="name" > </p>
		<p>Penyelenggara: <input type="text" name="email" > </p>
		<p>Detail Beasiswa: <input type="text" name="occupation"> </p>
  			 
    </div>
    <div class="form-group">
        <button type="submit" name="comment" class="btn btn-primary">Simpan Data</button>
    </div>
</form>