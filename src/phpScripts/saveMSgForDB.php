<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['action']) && $data['action'] === 'handle_form_submission' && isset($data['data'])) {
        $name = sanitize_text_field($data['data']['name']);
        $phoneNumber = sanitize_text_field($data['data']['phoneNumber']);
        $message = sanitize_text_field($data['data']['msg']);

        // Тут увы я не успел разобраться как создать таблицу свою, потому что вручную она не создавалась у меня
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
            $response = array(
                'success' => false,
                'message' => "Ошибка при сохранении данных в БД."
            );
        }
    } 
} else {
    $response = array(
        'success' => false,
        'message' => 'Метод запроса должен быть POST.'
    );
}

header('Content-Type: application/json');
echo json_encode($response);