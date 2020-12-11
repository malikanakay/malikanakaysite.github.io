$('.buy').click(function () {
    var price = $(this).data('price'),
        tur = $(this).data('tur');
    $('#price').val(price);
    $('#tur').val(tur);
    $('#cart').modal();
    return false;
})