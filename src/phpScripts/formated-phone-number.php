<?php
function formatPhoneNumber($phoneNumber) {
     $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
 
     $numberLength = strlen($phoneNumber);
     if ($numberLength != 11) {
         return ''; 
     }

     $formattedNumber = '8 (' . substr($phoneNumber, 1, 3) . ') ' . substr($phoneNumber, 4, 3) . '-' . substr($phoneNumber, 7, 2) . '-' . substr($phoneNumber, 9, 2);
     return $formattedNumber;
 }
 