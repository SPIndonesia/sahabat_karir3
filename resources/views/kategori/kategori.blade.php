@extends('layouts.backendsahabatpolri')

@section('content')
@if (session('status'))
<div class="alert alert-success" data-alert="{{ session('status') }}">

</div>
@endif
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kelola Kategori</h3>
            </div>
            <div class="col-12 col-md-6 order-md-1 order-last" align="right">
                <a href="{{ route('tambahkategori') }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-plus"></i> Tambah Kategori</a>
            </div>
        </div>
    </div>
    <!-- Basic card section start -->
    <section id="content-types">
        @if ($data_kategori != null)
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data_kategori as $key => $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <a href="{{ route('editkategori',$item->id_kategori) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('hapuskategori',$item->id_kategori) }}" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title=""><i class="fas fa-trash"></i></a>
                                    </td>
                                    </tr>
                                    @endforeach --}}
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
