<?php
if(isset($_POST['email']) && isset($_POST['password'])) {

    $response = [
        'jwt' => [
            'token' => '12345ABCDEF',
            'refresh' => 'ABSDEF12345'
        ],
        'user' => [
            'name' => 'Olexander Nykytin'
        ]
    ];

    echo json_encode($response);
} else {
    header('HTTP/1.0 403 Forbidden');
    echo 'You are forbidden!';
}