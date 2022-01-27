<?php 

    namespace App\Libraries;

    class Contactslib{
        public function display($atts){
            return view('contacts/single', $atts);
        }
    }