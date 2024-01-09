@extends('layouts.main')

@section('konten')
    <div class="page-wrapper">
        <div class="container">
            <div class="invoice">
                <form method="post" action="/income-backend/{{ session('myworkspaceid') }}" id="invoiceForm" >
                    @csrf
                    <div class="invoice-header">

                        <div class="">
                            <p>Income #: EXP12345</p>
                            <p>Date: xxxx-xx-xx</p>
                        </div>
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="form-group">
                        <label for="customerName">Description</label>
                        <div class="mb-3">
                        </div>
                        <input type="text" id="description" name="description" class="form-control">
                    </div>
                    <div class="mb-3">
                    </div>
                    <table class="invoice-items" id="itemTable">
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                        <tr class="item-row">
                            <td><input type="text" class="form-control item" name="item[]" required></td>
                            <td><input type="number" class="form-control quantity" name="quantity[]" min="1"
                                    required>
                            </td>
                            <td><input type="number" class="form-control unit-price" name="unitPrice[]" min="0.01"
                                    step="0.01" required></td>
                            <td><input type="number" class="form-control total" style="border: none" name="total_item[]" min="0.00" step="0.01" readonly></td>
                        </tr>
                    </table>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="addItem">Tambah</button>
                    </div>
                    <div class="invoice-total d-flex flex-row-reverse">
                        <input type="number" class="form-control" id="total" name="total" min="0.00"
                            step="0.01" style="width: 200px; border: none" readonly>
                        <label for="total">Total:</label>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>



    </div>
@endsection
