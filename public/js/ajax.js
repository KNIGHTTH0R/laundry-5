$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function changeTotal(laundry, ironing) {
    if (!$.isNumeric($(laundry).val()))
        $(laundry).val(0);
    if (!$.isNumeric($(ironing).val()))
        $(ironing).val(0);
    var laundryWeight = parseFloat($(laundry).val());
    var ironingWeight = parseFloat($(ironing).val());
    var total = (laundryWeight + ironingWeight) * 5;
    $('#total').text(total + '$');
}

function updateUserProfile() {
    $.ajax({
        url: "profile/update",
        type: 'PUT',
        data: {
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            phone: $("#phone").val(),
            addressline1: $("#addressline1").val(),
            addressline2: $("#addressline2").val(),
            suburb: $("#suburb").val(),
            state: $("#state").val(),
            postcode: $("#postcode").val()
        },
        success: function (data) {
            alert("Update Success");
        },
        error: function (error) {
            alert("Update Fail");
        }
    })
}