@extends('layouts.backendsahabatpolri')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kelola Paket</h3>
            </div>
            <div class="col-12 col-md-6 order-md-1 order-last" align="right">
                <a href="paket/create" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-plus"></i> Tambah Paket</a>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        @if ($data_paket != null)
        <div class="row mt-4">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_paket as $key => $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->harga}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        {{-- bikin perkondisian --}}
                                        {{-- <td>{{$item->kategori->nama}}</td> --}}
                                        <td>
                                            <a href="" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                            <form action="#" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title=""><i class="fas fa-trash"></i></button>
                                                {{-- <a href="paket/{{  $item->id_paket}}" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title=""><i class="fas fa-trash"></i></a> --}}
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </body>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>
    <!-- Basic Card types section end -->
</div>

@endsection
