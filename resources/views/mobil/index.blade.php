@extends('master')

@section('title')
    Mobil
@endsection

@section('content')
    <div class="p-5">
        <a href="/mobil/add" class="btn btn-primary mb-5">Add Mobil</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No Plat</th>
                    <th scope="col">Type</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->noplat }}</td>
                        <td>{{ $row->type }}</td>
                        <td>{{ $row->merk }}</td>
                        <td>{{ $row->warna }}</td>
                        <td>
                            <a href="/mobil/edit/{{ $row->noplat }}" class="btn btn-success">Update</a>
                            <a href="/mobil/delete/{{ $row->noplat }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
