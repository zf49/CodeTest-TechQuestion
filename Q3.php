<?php
header("Content-Type: application/json");

$books = [
    [
        "title" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "image" => "https://images.penguinrandomhouse.com/cover/9780061120084",
        "description" => "A novel of warmth and humor immediately captivated readers and critics alike, and the book remains an enduring classic about the roots of human behavior."
    ],
    [
        "title" => "1984",
        "author" => "George Orwell",
        "image" => "https://images.penguinrandomhouse.com/cover/9780451524935",
        "description" => "A dystopian novel set in Airstrip One, formerly Great Britain, a province of the superstate Oceania, in a world of perpetual war, omnipresent government surveillance, and public manipulation."
    ],
    [
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "image" => "https://images.penguinrandomhouse.com/cover/9780743273565",
        "description" => "A novel of the Jazz Age that illuminates the failure of the American dream."
    ]
];


echo json_encode($books);
