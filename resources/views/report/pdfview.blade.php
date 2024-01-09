<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Income Pdf</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
</head>
<body>
    <div style="width: 100%; font-family: Arial, Helvetica, sans-serif">
        <div
            style="text-align: center; color:white; background-color: #113475;">
            <br>
            <span style="font-size: 25px; "><b>grow<span style="color: #0096F7">it</span></b></span><br><br>
            <span>BALANCE SHEETS REPORT</span><br>
            <span>Period 01-09-2023 s/d 30-09-2023</span>
            <br>
            <br>
        </div>
        <div style="padding: 15px">
            {{-- INCOME ---------------- --}}
            <p style="text-align: center"><b>---------INCOME---------</b></p>
            <table style="width: 100%;" border="1px">
                {{-- buat foreach disini ---------------- --}}
                @foreach ($dtli as $item)
                            
                <tr>
                    <td>{{$item->description}}</td>
                    <td style="text-align: end">Rp. {{ $item->total_price }}</td>
                    
                </tr>
                @endforeach
                {{-- buat total income disini ---------------- --}}
                <tr>
                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td><b>TOTAL INCOME</b></td>
                    <td style="text-align: end"><b>Rp. {{$toti->total_price}}</b></td>
                </tr>
            </table>
            {{-- EXPAND ---------------- --}}
            <br>
            <p style="text-align: center"><b>---------EXPAND---------</b></p>
            <table style="width: 100%;" border="1px">
                {{-- buat foreach disini ---------------- --}}
                @foreach ($dtle as $item)
                            
                <tr>
                    <td>{{$item->description}}</td>
                    <td style="text-align: end">Rp. {{ $item->total_price }}</td>
                    
                </tr>
                @endforeach
                {{-- buat total expand disini ---------------- --}}
                <tr>
                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td><b>TOTAL EXPAND</b></td>
                    <td style="text-align: end"><b>Rp. {{$tote->total_price}}</b></td>
                </tr>
            </table>

            {{-- PROFIT --}}
            <br>
            <p style="text-align: center"><b>---------PROFIT---------</b></p>
            <table style="width: 100%;" border="1px">
                <tr>
                    <td><b>NET PROFIT</b></td>
                    <td style="text-align: end"><b>Rp. {{ $profit }}</b></td>
                </tr>
            </table>
        </div>
    </div>
</body>
{{-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script> --}}
</html>