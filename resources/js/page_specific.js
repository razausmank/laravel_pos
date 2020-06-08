

// main master Component

$('#logout_button').on( 'click' , function( event ){
    event.preventDefault();
    $('#logout_form').submit();
});



FormValidator.validate(
    "kt_form_1" ,
    {
        "email" : {
            "notEmpty" : "Email is required modified" ,
            "emailAddress" : "The value is not a valid email address modified"
        },
        "url" : {
            "notEmpty" : "Url is required :)",

            "uri" : "this is mad"
        },
    },

);
