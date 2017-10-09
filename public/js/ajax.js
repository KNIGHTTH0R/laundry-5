function changeTotal(laundry, ironing) {
    var laundryWeight = parseFloat($(laundry).val());
    var ironingWeight = parseFloat($(ironing).val());
    var total = (laundryWeight + ironingWeight) * 5;
    $('#total').text(total+'$');
}