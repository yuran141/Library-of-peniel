<?php
// 데이터베이스 연결 설정
$host = "localhost"; // 데이터베이스 호스트
$username = "root"; // 데이터베이스 사용자명
$password = "2718"; // 데이터베이스 암호
$database = "list"; // 데이터베이스 이름

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

// 검색어 가져오기
if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // SQL 쿼리 작성
    $sql = "SELECT * FROM book WHERE name LIKE '%$search%'";

    // 쿼리 실행
    $result = $conn->query($sql);

    // 결과 출력
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "제목: " . $row["name"] . "<br>";
            echo "저자: " . $row["author"] . "<br>";
            echo "출판 연도: " . $row["publisher"] . "<br>";
            echo "ISBN: " . $row["code  "] . "<br><br>";
        }
    } else {
        echo "검색 결과가 없습니다.";
    }
}

// 데이터베이스 연결 닫기
$conn->close();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <title>도서 검색</title>
</head>
<body>
<h1>도서 검색</h1>
<form method="GET" action="">
    <label>
        <input type="text" name="search" placeholder="도서 이름을 입력하세요">
    </label>
    <input type="submit" value="검색">
</form>
</body>
</html>
