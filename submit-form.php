<?php
header('Content-Type: application/json; charset=utf-8');
http_response_code(201);
echo json_encode(['status' => true]);