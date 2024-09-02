<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $food_name = $_POST['food_name'];
    $quantity = $_POST['quantity'];
    $extra_food = $_POST['extra_food'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    try {
        $stmt = $pdo->prepare("INSERT INTO orders (full_name, email, phone, food_name, quantity, extra_food, address, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$full_name, $email, $phone, $food_name, $quantity, $extra_food, $address, $message]);
        echo "Order placed successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
