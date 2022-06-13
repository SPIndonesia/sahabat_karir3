@extends('templates.templateAdminSK')

@section('content')

<div class="sec-one">
    <div class="pencarian">
        <form action="">
            <input type="text" placeholder="Cari Peserta" autocomplete="off">
            <i class="fa-solid fa-magnifying-glass"></i>
            <button type="submit" hidden></button>
        </form>
    </div>

    <div class="print">
        <i class="fa-solid fa-print"></i>
    </div>
</div>

<div class="sec-two">
    <div class="judul">
        <h1>Tabel Data Peserta</h1>
    </div>

    <div class="tabel">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Tanggal Dibuat</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data_user as $d)
                <tr>
                    <td>{{ $d->name}}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->role }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td>Aktif</td>
                    <td class="aksi">
                        <div class="hapus">
                            <form action="{{ route('user.delete', $d->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <i class="hapus fa-solid fa-trash"></i>

                                <button type="submit" hidden></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="next-prev">
            <a href="" class="prev">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <a href="" class="next">
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

@endsection