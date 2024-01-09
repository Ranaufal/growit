@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="container mr-4 ml-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="">Income Detail</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive container mt-3">
                        <table class="table" id="datarange_table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    {{-- <th scope="col">Date</th> --}}
                                    <th scope="col">Item Name</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtll as $item)
                                <tr>
                                    <th scope="row" style="color: #666666;">{{$loop->iteration}}</th>
                                    {{-- <td>{{$item->created_at}}</td> --}}
                                    <td>{{$item->item_name}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>Rp. {{$item->price}}</td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- {{$dosens->links()}} --}}
    </div>
@endsection
