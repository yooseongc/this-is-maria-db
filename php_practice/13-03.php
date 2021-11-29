<?php
    $con = mysqli_connect("localhost", "root", "maria", "sqlDB") or die("MariaDB 접속 실패!!");
    $sql = "
    CREATE TABLE userTbl -- 회원 테이블 
    (   userID  	CHAR(8) NOT NULL PRIMARY KEY, -- 사용자 아이디(PK)
        name    	VARCHAR(10) NOT NULL, -- 이름 
        birthYear   INT NOT NULL,  -- 출생년도 
        addr	  	CHAR(2) NOT NULL, -- 지역(경기,서울,경남 식으로 2글자만입력) 
        mobile1	CHAR(3), -- 휴대폰의 국번(011, 016, 017, 018, 019, 010 등) 
        mobile2	CHAR(8), -- 휴대폰의 나머지 전화번호(하이픈제외)
        height    	SMALLINT,  -- 키 
        mDate    	DATE  -- 회원 가입일 
    )
    ";
    $ret = mysqli_query($con, $sql);
    if ($ret) {
        echo "userTbl이 성공적으로 생성됨.";
    } else {
        echo "userTbl 생성 실패!!", "<br>";
        echo "실패 원인 : ", mysqli_error($con); 
    }
    mysqli_close($con);
?>