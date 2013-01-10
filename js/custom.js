$(document).ready(function() {
    $(".numeric").numeric();
    $("#phone").mask("(999) 999-9999");
    $("#move_date").datepicker();

    $("#lead_form").validate({
        rules: {
            name: "required",
            pickup_zip: "required",
            delivery_zip: "required",
            email: {
                required: true,
                email: true
            },
            phone: "required",
            move_date: "required",
            dwelling_type: "required"
        },
        message: {
            name: "",
            pickup_zip: "",
            delivery_zip: "",
            email: "",
            phone: "",
            move_date: "",
            dwelling_type: ""
        },
        showErrors: function(errorMap, errorList) {

        },
        invalidHandler: function(form, validator) {
            $("#lead_form").find('div.control-group').each(function(i){
                //$(this.id).parent().parents("div.control-group").removeClasss("error");
                //console.log($(this));
                $(this).removeClass("error");
            });

            $.each( validator.invalid, function(k, v){
                    $("#"+k).parents("div.control-group").removeClass("success").addClass("error");
            });
        }

    });
});