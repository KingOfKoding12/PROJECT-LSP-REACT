@extends('main.layout')
@section('content')
   <center>
    <b>
        <h2>LIST DATA MAPEL</h2>
        <a href="/mapel/create" class="button-primary">TAMBAH DATA</a>
        @if (session('success'))
            <p class="text-success">{{  session('success') }}</p>
        @endif
        @if (session('error'))
           <p class="text-danger">{{  session('error') }}</p>
        @endif

        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <th>MAPEL</th>
                <th>ACTION</th>
            </tr>
            @foreach ($mapel as $j )
              <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{  $j->nama_mapel }}</td>
                <td>
                    <a href="/mapel/edit/{{ $j->id }}" class="button-warning">EDIT</a>
                    <a href="/mapel/destroy/{{ $j->id }}" onclick="return confirm('Yakin Hapus?')" class="button-danger">HAPUS</a>
                </td>
              </tr>
            @endforeach
        </table>
    </b>
   </center>
   @endsection