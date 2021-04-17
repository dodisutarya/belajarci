<div id="TambahModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Data Pelajar</h4>
            </div>
            <div class="modal-body">
                <form action="<?=base_url()?>Niomic/add" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label>
                        <input type="number" class="form-control" name="nis" placeholder="Masukan NIS">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" placeholder="Masukan jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="simpan">
            </div>
            </form>
        </div>
    </div>
</div>


<div id="UbahModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Ubah Data Pelajar</h4>
            </div>
            <div class="modal-body">
                <form action="<?=base_url()?>Niomic/update" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label>
                        <input type="number" class="form-control nis" name="nis" placeholder="Masukan NIS" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input type="text" class="form-control nama_siswa" name="nama" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <input type="text" class="form-control kelas" name="kelas" placeholder="Masukan Kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control jurusan" name="jurusan" placeholder="Masukan jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control email" name="email" placeholder="Masukan email">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="simpan">
            </div>
            </form>
        </div>
    </div>
</div>