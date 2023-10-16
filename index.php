<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>PenielBook</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header">
    <nav>
        <div id="penielLogo">
            <a class="navbar" href="https://www.google.com/"
               style="color: #00b74a; font-size: 30px; font-weight: bold; margin-left: 15%;">PenielBook</a>
            <div>
            <form method="GET" action="">
                <label>
                    <input type="text" class="searchbar" name="search" placeholder="도서 이름을 입력하세요">
                </label>
                <input type="submit" class="search" value="검색">
            </form>
            </div>
        </div>
    </nav>
</div>

<!-- Page Content-->

<div id="container">
    <?php
    // 데이터베이스 연결 설정
    $host = "localhost";
    $username = "root";
    $password = "2718";
    $database = "list1";

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
                echo "출판사: " . $row["publisher"] . "<br>";
                echo "ISBN: " . $row["code"] . "<br><br>";
                //break;
            }

        } else {
            echo "검색 결과가 없습니다.";
        }
    }

    // 데이터베이스 연결 닫기
    $conn->close();
    ?>
</div>

<!-- Footer-->

<div id="footer">
    <p></p>
</div>
</body>
</html>
