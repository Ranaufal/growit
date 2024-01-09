@extends('pages.layouts.main')

@section('container')
    <div class="d-flex justify-content-center align-items-center" style="height: 90vh">
        <div class="">
            <div class="card ">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center bg-dark">
                    <h1 class="text-success">Pembayaran Berhasil</h1>
                    <p class="text-success">Terima kasih telah melakukan pembayaran</p>
                    <a href="/" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
