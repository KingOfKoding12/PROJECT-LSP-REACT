@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA NILAI</h2>
        <form method="post" action="/nilai/update/{{ $nilai->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Guru Mapel</td>
                    <td class="bar">
                        <select name="mengajar_id">
                            <option></option>
                            @foreach ($mengajar as $nil)
                                <option value="{{ $nil->id }}" @if ($nil->id == $nilai->mengajar_id) selected @endif>
                                    {{ $nil->guru->nama_guru }} -
                                    {{ $nil->mapel->nama_mapel }}
                                </option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="bar">
                        <select name="siswa_id">
                            <option></option>
                            @foreach ($siswa as $nil)
                                <option value="{{ $nil->id }}" @if ($nil->id == $nilai->siswa_id) selected @endif>
                                    {{ $nil->nama_siswa }}
                                </option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">UH</td>
                    <td class="bar">
                        <input type="number" name="uh" value="{{ $nilai->uh }}"></td>
                </tr>
                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar">
                        <input type="number" name="uts" value="{{ $nilai->uts }}"></td>
                </tr>
                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar">
                        <input type="number" name="uas" value="{{ $nilai->uas }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit"> SIMPAN </button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection