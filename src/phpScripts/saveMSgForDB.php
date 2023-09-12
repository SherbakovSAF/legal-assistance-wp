<?php
// Подключаем файл wp-load.php для доступа к функциям WordPress
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

// Проверяем, был ли выполнен POST-запрос с данными формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из POST-запроса
    $data = json_decode(file_get_contents('php://input'), true);

    // Проверяем, что данные формы присутствуют
    if (isset($data['action']) && $data['action'] === 'handle_form_submission' && isset($data['data'])) {
        $name = sanitize_text_field($data['data']['name']);
        $phoneNumber = sanitize_text_field($data['data']['phoneNumber']);
        $message = sanitize_text_field($data['data']['msg']);

        // Создаем новую запись в таблице БД WordPress
        $result = $wpdb->insert(
            $wpdb->prefix . 'сontact_form',['name' => $name,'phone' => $phoneNumber, 'msg' => $message],['%s','%s','%s']
        );
        if ($result) {
            // Запись успешно добавлена в БД
            $response = array(
                'success' => true,
                'message' => 'Данные успешно сохранены.'
            );
        } else {
            // Ошибка при сохранении данных в БД
            $response = array(
                'success' => false,
                'message' => "Ошибка при сохранении данных в БД."
            );
        }
    } 
} else {
    // Метод запроса не является POST
    $response = array(
        'success' => false,
        'message' => 'Метод запроса должен быть POST.'
    );
}

// Отправляем ответ в формате JSON
header('Content-Type: application/json');
echo json_encode($response);