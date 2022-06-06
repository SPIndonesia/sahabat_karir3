@extends('templates.templateAdminSK')

@section('content')

<div class="data-peserta">
    <div class="sec-one">
        <form class="pencarian">
            <div class="cari input-icon">
                <input type="text" id="cariApapun" name="whatever" placeholder="Cari Data Peserta">
                <i class="svg-pencarian fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="date input-icon">
                <input id="cariTanggal" type="date" name="date">
                <i class="svg-pencarian fa-solid fa-calendar"></i>
            </div>

            <div class="print">
                <h2>Print</h2>
                <i class="print-svg fa-solid fa-print"></i>
            </div>
        </form>
    </div>

    <div class="sec-two konten">
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
                        <td>
                            <form action="{{ route('user.delete', $d->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit"> <i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="next-prev">
            <a href="" class="prev">Prev</a>
            <a href="" class="next">Next</a>
        </div>
    </div>
</div>

@endsection
