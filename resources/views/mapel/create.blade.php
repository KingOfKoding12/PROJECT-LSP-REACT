@extends('main.layout')
@section('content')
     <center>
        <h2>TAMBAH DATA MAPEL</h2>
        <form action="/mapel/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">MAPEL</td>
                    <td width="25%"><input type="text" name="nama_mapel"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">SIMPAN</button></center>
                    </td>
                </tr>
            </table>
        </form>
     </center>
@endsection