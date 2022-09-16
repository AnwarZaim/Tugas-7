@extends('admin.AdminProduk')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Edit Data User
                </div>

                <div class="card-body">
                    <form action="{{ url('AdminUser', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="from-grub">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="from-grub">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="f   rom-grub">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from-grub">
                                    <label for="" class="control-label">Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="from-grub">
                                    <label for="" class="control-label">NO HP</label>
                                    <input type="text" class="form-control" name="no_handphone">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark float-right mt-5"><i class="fa fa-save"></i> Simpan</button>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection