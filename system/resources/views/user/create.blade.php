@extends('admin.AdminProduk')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>

                <div class="card-body">
                    <form action="{{ url('AdminUser') }}" method="post">
                        @csrf
                        <div class="from-grub">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="from-grub">
                            <label for="" class="control-label">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="from-grub">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="from-grub">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="from-grub">
                            <label for="" class="control-label">NO HP</label>
                            <input type="no_handphone" class="form-control" name="no_handphone">
                        </div>
                        <button class="btn btn-dark float-right mt-5"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection