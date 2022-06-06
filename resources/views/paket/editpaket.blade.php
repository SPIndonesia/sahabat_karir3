@extends('layouts.backendsahabatpolri')

@section('content')
<div class="page-heading">
    <h3>Edit paket</h3>
</div>
<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <form method="POST" action="{{ route('perbaruipaket') }}" enctype="multipart/form-data" class="form form-vertical col-md-6 col-12 mt-4">
                                @csrf
                                @method('patch')
                                <div class="form-body">
                                    <input type="hidden" class="form-control" name="id_paket" value="{{$data_paket->id_paket}}" placeholder="{{$data_paket->id_paket}}" id="mobile-id-icon">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Nama paket</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="nama" value="{{$data_paket->nama}}" placeholder="{{$data_paket->nama}}" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">harga paket</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control" name="harga" value="{{$data_paket->harga}}" placeholder="{{$data_paket->harga}}" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">deskripsi</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="deskripsi" value="{{$data_paket->deskripsi}}" placeholder="{{$data_paket->deskripsi}}" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">kategori</label>
                                            <div class="form-group">
                                                <select class="choices form-select" name="id_kategori">
                                                    <option value="{{$data_paket->id_kategori}}" selected>{{$data_paket->kategori->nama}}</option>
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