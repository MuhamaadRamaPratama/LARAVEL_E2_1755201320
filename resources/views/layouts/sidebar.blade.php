<div class="barmenu" style="background: salmon; height: 50px; padding: 15px 15px 15px 0px;">
	<h4 class="text-center">Menu</h4>
</div>

<div class="list-group list-group-flush">
<a href="/mhs" class="list-group-item list-group-item-action {{ (request()->is('mhs')) ?'active' : '' }}">Mahasiswa</a>
<a href="#" class="list-group-item list-group-item-action">Dosen</a>
<a href="/prodi" class="list-group-item list-group-item-action {{(request()->is('prodi')) ? 'active' : '' }}">Program Studi</a>
<a href="/matakuliah" class="list-group-item list-group-item-action {{ (request()->is('matakuliah')) ? 'active' : ''}}">Mata Kuliah</a>
<a href="#" class="list-group-item list-group-item-action">Kerja Praktek</a>
<a href="#" class="list-group-item list-group-item-action">Skripsi</a>
</div>