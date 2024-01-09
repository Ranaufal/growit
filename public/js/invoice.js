$(document).ready(function () {
    function updateTotal() {
        var total = 0;
        $('.item-row').each(function () {
            var quantity = $(this).find('.quantity').val();
            var unitPrice = $(this).find('.unit-price').val();
            var itemTotal = quantity * unitPrice;
            total += itemTotal;
            $(this).find('.total').val(itemTotal.toFixed(2));
        });
        $('#total').val(total.toFixed(2));
    }

    $('#addItem').click(function () {
        var newRow = '<tr class="item-row">' +
            '<td><input type="text" class="form-control item" name="item[]" required></td>' +
            '<td><input type="number" class="form-control quantity" name="quantity[]" min="1" required></td>' +
            '<td><input type="number" class="form-control unit-price" name="unitPrice[]" min="0.01" step="0.01" required></td>' +
            '<td><input type="number" class="form-control total" style="border: none" name="total_item[]" min="0.00" step="0.01" readonly></td>' +
            '</tr>';
        $('#itemTable').append(newRow);
    });

    $(document).on('input', '.item-row input', function () {
        updateTotal();
    });

    // $('#invoiceForm').submit(function (e) {
    //     e.preventDefault();
    //     var formData = $(this).serializeArray();
    //     // Tambahkan total sebagai bagian dari data formulir
    //     formData.push({ name: 'total', value: $('#total').val() });
    //     console.log(formData);
    // });
});