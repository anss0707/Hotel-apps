@extends('app')
@section('title')
@section('content')
<div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Manage Guest</h3>
                    <div align="right" class="mb-3">
                        <a href="{{ url('guestinformation/create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-borderer">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Tamu</th>
                                <th>Tanggal Check-in & Check-Out</th>
                                <th>Nomor Kamar</th>
                                <th>Kontak Tamu</th>
                                <th></th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ( $guests as $i )

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $i->nama_tamu }}</td>
                                <td>{{ $i->check_in . ',' . $i->check_out }}</td>
                                <td>{{ $i->no_kamar }}</td>
                                <td>{{ $i->email . ',' . $i->no_tel }}</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('guest.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="" method="post" onclick="return confirm('yakin delete ?')" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
</div>


@endsection
