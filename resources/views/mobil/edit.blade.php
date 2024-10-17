@extends('master')

@section('title')
    Mobil Update
@endsection

@section('content')
    <div class="container-fluid">  <!-- Changed to container-fluid -->
        <div class="min-vh-100 d-flex align-items-center justify-content-center">
            <div class="w-75">  <!-- Make the inner div full width -->
                <div class="card p-3">
                    <form action="" method="POST">
                        @csrf
                        <div class="d-grid gap-3">
                            <div class="row row-cols-2 g-5">
                                <div class="d-grid gap-3">
                                    <label for="noplat">No Plat</label>
                                    <input type="text" id="noplat" class="form-control" name="noplat" value="{{ $data->noplat }}">
                                </div>
                                <div class="d-grid gap-3">
                                    <label for="type">Type</label>
                                    <input type="text" id="type" class="form-control" name="type" value="{{ $data->type }}">
                                </div>
                            </div>
                            <div class="row row-cols-2 g-5">
                                <div class="d-grid gap-3">
                                    <label for="merk">Merk</label>
                                    <input type="text" id="merk" class="form-control" name="merk" value="{{ $data->merk }}">
                                </div>
                                <div class="d-grid gap-3">
                                    <label for="warna">Warna</label>
                                    <input type="text" id="warna" class="form-control" name="warna" value="{{ $data->warna }}">
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
