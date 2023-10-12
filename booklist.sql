CREATE DATABASE IF NOT EXISTS list;
-- 데이터베이스 연결 설정
CREATE DATABASE IF NOT EXISTS list;
USE list;

-- 도서 정보 테이블 생성
CREATE TABLE IF NOT EXISTS `book` (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    name VARCHAR(255) NOT NULL,
                                    author VARCHAR(255) NOT NULL,
                                    publisher VARCHAR(255) NOT NULL,
                                    code VARCHAR(255) NOT NULL
);

-- 도서 정보 삽입
INSERT INTO `book` (name, author, publisher, code) VALUES
                                         ('책 제목 1', '저자 1', '출판사 1', '기호 1'),
                                         ('책 제목 2', '저자 2', '출판사 2', '기호 2'),
                                         ('책 제목 3', '저자 3', '출판사 3', '기호 3');

-- 도서 정보 조회
SELECT * FROM `book`;
