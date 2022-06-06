@extends('layouts.backendsahabatpolri')

@section('content')
<div class="page-heading">
    <h3>Tambah Paket</h3>
</div>
<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <form method="POST" action="/paket" enctype="multipart/form-data" class="form form-vertical col-md-6 col-12 mt-4">
                                @csrf
                                <div class="form-body">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Nama Paket</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="nama" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Harga Paket</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" name="harga" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Deskripsi</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="deskripsi" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Kategori</label>
                                            <div class="form-group">
                                                <select class="choices form-select" name="id_kategori">
                                                    @foreach($data_kategori as $key => $item)
                                                    <option value="{{$item->id_kategori}}">{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- // Basic Vertical form layout section end -->

@endsection
