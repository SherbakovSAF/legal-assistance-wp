<?php
function formatPhoneNumber($phoneNumber) {
     // Удаляем все символы, кроме цифр
     $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
 
     // Проверяем длину номера
     $numberLength = strlen($phoneNumber);
     if ($numberLength != 11) {
         return $phoneNumber; // Возвращаем исходный номер, если длина неверна
     }
 
     // Форматируем номер
     $formattedNumber = '8 (' . substr($phoneNumber, 1, 3) . ') ' . substr($phoneNumber, 4, 3) . '-' . substr($phoneNumber, 7, 2) . '-' . substr($phoneNumber, 9, 2);
     return $formattedNumber;
 }
 