<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expand Pdf</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        .customers td, .customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        .customers tr:nth-child(even){background-color: #f2f2f2;}
        
        .customers tr:hover {background-color: #ddd;}
        
        .customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #0465aa;
          color: white;
        }
        </style>
    
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="table-responsive container mt-3">
                <h1>Expand</h1>
                <table class="customers" id="datarange_table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prices</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtl as $item)
                            <tr>
                                <td scope="row" style="color: #666666;">{{ $loop->iteration }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->description }}</td>
                                <td>Rp. {{ $item->total_price }}</td>
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
                <div class="mt-3">
                    <h3>Total : Rp. {{$dtl2->total_price}}</h3>
                </div>
            </div>
        </div>
    </div>
</body>
{{-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script> --}}
</html>