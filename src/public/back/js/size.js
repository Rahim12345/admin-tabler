$(document).ready(function() {
    $('#name_az').on('keyup',function() {
        let name_az = $(this).val();
        $('#name_en').val(name_az.toUpperCase());
    });
});
