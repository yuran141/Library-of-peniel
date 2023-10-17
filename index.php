<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="MapBook">
    <meta name="description" content="검색 한번으로 브니엘 디지털 도서관 도서를 찾을 수 있습니다.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="PenielBook">
    <meta property="og:description" content="검색 한번으로 브니엘 디지털 도서관 도서를 찾을 수 있습니다.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>PenielBook</title>
    <link href="style1.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <nav id="penielLogo">
        <div class="container-fluid" style="margin-left: 20%">
            <a class="navbar" href="https://www.google.com/" style="color: #00b74a;
            font-size: 30px; font-weight: bold; margin-left: 15%;">PenielBook
            </a>
            <form method="GET" action="">
                <label>
                    <input type="text" class="searchbar" name="search" placeholder="도서 이름을 입력하세요">
                </label>
                <input type="submit" class="search" value="search">
            </form>
        </div>
    <nav>
</header>

<!-- Page Content-->

<div id="container">
    <?php
    // 데이터베이스 연결 설정
    $host = "localhost";
    $username = "root";
    $password = "2718";
    $database = "list2";

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
