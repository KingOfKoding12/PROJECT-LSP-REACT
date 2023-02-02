@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA SISWA</h2>
            @if (session('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('success'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif
        <form method="post" action="/siswa/update/{{ $siswa->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">NIS</td>
                    <td width="25%">
                        <input type="text" name="nis" value="{{ $siswa->nis }}"></td>
                </tr>
                <tr>
                    <td width="25%">Nama Siswa</td>
                    <td width="25%">
                        <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}"></td>
                </tr>
                <tr>
                    <td width="25%">Jenis Kelamin</td>
                    <td width="25%">
                        <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki Laki
                        <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td width="25%">Alamat</td>
                    <td width="25%">
                        <textarea name="alamat" cols="30" rows="5" value="">{{ $siswa->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td width="25%">Nama Kelas</td>
                    <td width="25%">
                        <select name="kelas_id">
                            <option></option>
                            @foreach  ($kelas as $k)
                                @if ($siswa->kelas_id == $k->id)
                                    <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                                @else
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endif
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td width="25%">Password</td>
                    <td width="25%">
                        <input type="password" name="password" value="{{ $siswa->password }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit"> UBAH </button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection