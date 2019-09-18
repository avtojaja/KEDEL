( function ( $ ) {
    $( function () {
        $( '.emailCheck' ).click( function () {
            var $email = $( '#email' );
            var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,})$/;

            $email.removeClass( 'is-invalid' );

            if ( ! $email.val().length ) {
                $email.addClass( 'is-invalid' );
                return false;
            }

            if ( ! regMail.test( $email.val() ) ) {
                $email.addClass( 'is-invalid' );
                return false;
            }

            $email.prop( 'disabled', true );
            $( '#next-form' ).collapse( 'show' );
        });

        $( '#username' ).on( 'keyup', function () {
            if ( ! $( '#username' ).val().length ) {
                $( '#username' ).addClass( 'is-invalid' );
                return false;
            } else {
                $( '#username' ).removeClass( 'is-invalid' );
            }
        });

        $( '#phone' ).on( 'keyup', function () {
            if ( ! $( '#phone' ).val().length ) {
                $( '#phone' ).addClass( 'is-invalid' );
                return false;
            } else {
                $( '#phone' ).removeClass( 'is-invalid' );
            }
        });

        $( '#password' ).on( 'keyup', function () {
            if ( ! $( '#password' ).val().length ) {
                $( '#password' ).addClass( 'is-invalid' );
                return false;
            } else {
                $( '#password' ).removeClass( 'is-invalid' );
            }
        });

        $( '#cpassword' ).on( 'keyup', function () {
            if ( ! $( '#cpassword' ).val().length ) {
                $( '#cpassword' ).addClass( 'is-invalid' );
                return false;
            } else {
                $( '#cpassword' ).removeClass( 'is-invalid' );
            }
        });

        $( '.registration form' ).submit( function () {
            if ( ! $( '#username, #phone, #password, #cpassword' ).val().length ) {
                $( '#username, #phone, #password, #cpassword' ).addClass( 'is-invalid' );
                return false;
            } else {
                $( '#username, #phone, #password, #cpassword' ).removeClass( 'is-invalid' );
            }

            if ( $( '#password' ).val() !== $( '#cpassword' ).val() ) {
                $( '#cpassword' ).addClass( 'is-invalid' );
                $( '#cp' ).show();
                return false;
            }
        });
    });
})( jQuery );
