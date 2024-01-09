@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="container m-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="">Expand Detail</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive bg-white">
                        <table class="table mb-0">
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
                                    <td>{{$item->price}}</td>
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
