@extends('layouts.app')

@section('content')
<div class="container-XL mx-4">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Absen <b>Siswa</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i>
                            <span>Add New
                                User</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nomor Absen</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Muhamad Rizky</td>
                        <td>2021.10.001</td>
                        <td>12</td>
                        <td>RPL</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                    class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Muhamad Gibran</td>
                        <td>2021.10.002</td>
                        <td>10</td>
                        <td>TKJ</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                    class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Muhammad Azka</td>
                        <td>2021.10.003</td>
                        <td>11</td>
                        <td>MM</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                    class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Muhammad Firdaus</td>
                        <td>2021.10.004</td>
                        <td>12</td>
                        <td>AP</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                    class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Muhammad Alfarisy</td>
                        <td>2021.10.005</td>
                        <td>12</td>
                        <td>PKM</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i
                                    class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Sebelumnya</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">Selanjutnya</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection