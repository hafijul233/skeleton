if (typeof $.validator === 'function') {
//Set Template for Error Validation
    $.validator.setDefaults({
        errorElement: "span",
        errorPlacement: function (error, element) {
            // Add the `invalid-feedback` class to the error element bs4
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
                element.closest('.form-group').find('.invalid-feedback').replaceWith(error);
            } else {
                element.closest('.form-group').find('.invalid-feedback').replaceWith(error);
            }
        },
        highlight: function (element) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

    //regex match method
    $.validator.addMethod("regex", function (value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input.(Invalid Format)"
    );

    //name match method
    $.validator.addMethod("nametitle", function (value, element) {
            return this.optional(element) || /[a-zA-Z.\-]+$/.test(value);
        },
        "Please enter only alphabets and spaces."
    );

    //mobile number match method
    $.validator.addMethod("mobilenum", function (value, element) {
            return this.optional(element) || /^01[0-9]{9}$/.test(value);
        },
        "Please enter value on this 01XXXXXXXXX format."
    );

    //applicant's id & password match method
    $.validator.addMethod("credential", function (value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]{8,10}$/.test(value);
        },
        "Please enter only alphabet and numbers."
    );

    $.validator.addMethod("filesize", function (value, element) {
            return !!(this.optional(element) || (value < 50 || value > 1000));
        },
        "Please enter file size between 50 kb to 1000 kb"
    );
}

/*Validation Init*/

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
