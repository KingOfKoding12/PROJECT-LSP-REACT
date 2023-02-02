@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA NILAI</h2>
            @if(session('user')->role == 'guru')
            <a href="/nilai/create" class="button-primary"> TAMBAH DATA </a>
            @endif
            @if (session('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('success'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>GURU</th>
                    <th>NAMA SISWA</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NA</th>
                    @if(session('user')->role == 'guru')
                    <th>ACTION</th>
                    @endif
                </tr>
                @foreach($nilai as $nil)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $nil->mengajar->guru->nama_guru }}</td>
                    <td>{{ $nil->siswa->nama_siswa }}</td>
                    <td>{{ $nil->uh }}</td>
                    <td>{{ $nil->uts }}</td>
                    <td>{{ $nil->uas }}</td>
                    <td>{{ $nil->na }}</td>
                    @if(session('user')->role == 'guru')
                    <td>
                        <a href="/nilai/edit/{{ $nil->id }}" class="button-warning">EDIT</a>
                        <a href="/nilai/destroy/{{ $nil->id }}" class="button-danger" onClick="return confirm ('Yakin Hapus?')">HAPUS</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection