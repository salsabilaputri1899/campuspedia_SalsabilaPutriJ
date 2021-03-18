<form class="form" method="post" action="" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <p>Judul Beasiswa: <input type="text" name="name" value = "{{$customerr->name}}"> </p>
		<p>Penyelenggara: <input type="text" name="email" value = "{{$customerr->email}}"> </p>
		<p>Detail Beasiswa: <input type="text" name="occupation" value = "{{$customerr->occupation}}" > </p>
		<input type="hidden" name="id" value="{{$customerr->id}}">
    </div>
    <div class="form-group">
        <button type="submit" name="comment" class="btn btn-primary">Simpan Data</button>
    </div>
</form>
