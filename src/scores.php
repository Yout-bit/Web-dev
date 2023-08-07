<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');

    $data = json_decode($postData, true);

    if (isset($data['username']) && isset($data['score'])) {
        $username = $data['username'];
        $score = $data['score'];

        $file = fopen('scores.csv', 'a');

        fputcsv($file, array($username, $score));

        fclose($file);

        http_response_code(200);
        echo json_encode(array('message' => 'Score submitted successfully.'));
    } else {
        http_response_code(400);
        echo json_encode(array('message' => 'Bad request. Username and score are required.'));
    }
} else {
    http_response_code(405);
    echo json_encode(array('message' => 'Method not allowed.'));
}
?>
