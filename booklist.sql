-- 데이터베이스 연결 설정
CREATE DATABASE IF NOT EXISTS list2;
USE list2;

-- 도서 정보 테이블 생성
CREATE TABLE IF NOT EXISTS `book` (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    num varchar(255) NOT NULL,
                                    name VARCHAR(255) NOT NULL,
                                    author VARCHAR(255) NOT NULL,
                                    publisher VARCHAR(255) NOT NULL,
                                    publication_date varchar(255) NOT NULL,
                                    code VARCHAR(255) NOT NULL,
                                    registration_number VARCHAR(255) NOT NULL,
                                    material_status VARCHAR(255) NOT NULL
);

-- 도서 정보 삽입
INSERT INTO `book` (num, name, author, publisher, publication_date,
                    code, registration_number, material_status) VALUES
                     ('231a', '책 제목 1', '저자 1', '출판사 1', '1as', '기호 1', '등록번호', '자료상태'),
                     ('423s', '책 제목 2', '저자 2', '출판사 2', '2df', '기호 2', '등록번호', '자료상태'),
                     ('463s', '책 제목 4', '저자 4', '출판사 4', '4df', '기호 4', '등록번호', '자료상태');

-- CSV 파일로부터 도서 정보 삽입
/*OAD DATA LOCAL INFILE '""C:/Users/seojun/Desktop/test_table.csv""'
    INTO TABLE list.`book`
    FIELDS TERMINATED BY ','
    ENCLOSED BY '"'
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;*/

-- 도서 정보 조회
SELECT * FROM `book`;
