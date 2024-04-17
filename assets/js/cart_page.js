$(document).ready(function () {
    var price = $('#price').val();
    var tex = $('#tex').val();
    var qty = $('#qty').val();
    var gst = $('#gst').val();
    var add = qty * price;
    $('#price').val(add);
    var val = price * tex / 100;
    $('#gst').val(val);
    var total = parseInt(add) + parseInt(val);
    $('#total').val(total);
    $('#demo').html(total);

    $('#qty').change(function () {
        var qty = $(this).val();
        var add = qty * price;
        $('#price').val(add);
        var val = $('#price').val() * tex / 100;
        $('#gst').val(val);
        var total = parseInt(add) + parseInt(val);
        $('#total').val(total);
        $('#demo').html('<span class=container text-success>' + total + '</span>')
    });
});