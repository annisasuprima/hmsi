@extends('Template.index')

@section('title','Tambah Rapat')
@section('sapaan','Penambahan Notulensi Rapat')
@section('submenu','Rapat')
@section('container')
<div class="card-title">
    <h4>Form Notulensi Rapat</h4>
</div>
<div class="caard-body">
    <form>
        <table>
            <tr>
                <td width="100px">
                    <label>Divisi</label>
                </td>
                <td>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
                <!-- <td rowspan="5">
                    <label>Divisi</label>
                    <textarea name="" id="" cols="100" rows="10" class="form-control input-default "></textarea>
                </td> -->
            </tr>
            <tr>
                <td>
                    <label>Tanggal</label>
                </td>
                <td>
                    <input type="date" name="" class="form-control input-default ">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Waktu Mulai</label>
                </td>
                <td>
                    <input type="time" name="" class="form-control input-default ">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Waktu Selesai</label>
                </td>
                <td>
                    <input type="time" name="" class="form-control input-default ">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Topik</label>
                </td>
                <td>
                    <input type="text" name="" class="form-control input-default ">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Hasil Rapat</label>
                </td>
                <td></td>
            </tr>
        </table>
        <div class="adjoined-bottom">
            <div class="grid-container">
                <div class="grid-width-100">
                    <div id="editor">
                        <h1>Notulensi :</h1>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection