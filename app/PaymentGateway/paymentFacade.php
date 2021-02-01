<?php 
    namespace App\PaymentGateway;

    class PaymentFacade{

        protected static function getFacadeAccessor()
        {
            return 'payment';
        }

    }
?>