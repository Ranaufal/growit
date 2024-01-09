@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="container mr-5 ml-5">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="">Expand</h1>
            </div>
            @if (session()->has('pesan'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('pesan') }}
                </div>
            @endif
            <div class="d-flex flex-row-reverse">
                <a href="/expand-backend/create/{{ session('myworkspaceid') }}" class="btn btn-color mb-4 text-white"> <span
                        data-feather="plus-circle"></span>
                    Create Expand</a>
                <div class="box"> <span data-feather="plus-circle"></span>
                </div>
                {{-- <a href="/export_expand_pdf/{{ session('myworkspaceid') }}" class="btn btn-color mb-4 text-white"> <span
                        data-feather="plus-circle"></span>
                    Export pdf</a> --}}
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive container mt-3">
                        <table class="table" id="datarange_table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Prices</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtl as $item)
                                    <tr>
                                        <th scope="row" style="color: #666666;">{{ $loop->iteration }}</th>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>Rp. {{ $item->total_price }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="/{{ $item->id }}" class="btn btn-primary">Show</a>
                                            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample{{ $loop->iteration }}"
                                            aria-expanded="false" aria-controls="collapseExample{{ $loop->iteration }}">
                                            Show Details
                                        </button> --}}
                                        </td>
                                    </tr>
                                    {{-- <tr class="collapse" id="collapseExample{{ $loop->iteration }}">
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col">Nama item</td>
                                    <td scope="col">Quantity</td>
                                    <td scope="col">Price</td>
                                    <td scope="col"></td>
                                </tr>
                                @foreach (json_decode($item->detail_quantities) as $index => $quantity)
                                    <tr class="collapse"
                                        id="collapseExample{{ $loop->parent->iteration }}">
                                        <td></td>
                                        <td></td>
                                        <td>{{json_decode($item->detail_names)[$index]}}</td>
                                        <td>{{ $quantity }}</td>
                                        <td>Rp. {{ json_decode($item->detail_prices)[$index] }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach --}}
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
