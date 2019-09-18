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

        $( '.notempty' ).keyup( function () {
            $( this ).removeClass( 'is-invalid' );

            if ( ! $( this ).val().length ) {
                $( this ).addClass( 'is-invalid' );
                return false;
            }
        });

        $( '.registration form' ).submit( function () {
            if ( $( '#password' ).val() !== $( '#cpassword' ).val() ) {
                $( '#cpassword' ).addClass( 'is-invalid' );
                $( '#cp' ).show();
                return false;
            }

            return true;
        });
    });
})( jQuery );
