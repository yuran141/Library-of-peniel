<?php
// MySQL 연결 설정
$host = 'localhost'; // MySQL 호스트 주소
$username = 'root'; // MySQL 사용자 이름
$password = '1227'; // MySQL 비밀번호
$database = 'mysql'; // 사용할 데이터베이스 이름

$conn = new mysqli($host, $username, $password, $database);

// 연결 확인
if ($conn->connect_error) {
    die("MySQL 연결 실패: " . $conn->connect_error);
}

// 도서 정보 저장
$title = '책 제목';
$author = '저자';
$publication_year = 2023;

$sql = "INSERT INTO books (title, author, publication_year) VALUES ('$title', '$author', $publication_year)";

if ($conn->query($sql) === TRUE) {
    echo "도서 정보가 성공적으로 저장되었습니다.";
} else {
    echo "오류: " . $sql . "<br>" . $conn->error;
}

// MySQL 연결 닫기
$conn->close();
?>