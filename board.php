<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>별빛 플레어 게시판</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            margin-top: 50px;
        }
        .board-header {
            color: #6A24FE;
            margin-bottom: 30px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 15px; /* 테이블 모서리 둥글게 */
            overflow: hidden; /* 테이블 모서리 둥글게 */
        }
        th {
            background-color: #6A24FE;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        td {
            padding: 15px;
            text-align: center;
            border-top: 1px solid #eee;
        }
        tr:nth-child(even) {
            background-color: #f8f8f8;
        }
        .btn {
            background-color: #6A24FE;
            color: #fff;
            float: right;
            margin-top: 20px;
            border-radius: 20px; /* 버튼 모서리 둥글게 */
        }
        .btn:hover {
            background-color: #4d1ebd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="board-header">별빛 플레어 게시판</h2>
        
        <?php
        // 데이터베이스 연결 정보
        $host = 'star.ct7axrvntx54.ap-northeast-2.rds.amazonaws.com';
        $user = 'admin';
        $password = 'rla8353512!';
        $dbname = 'star';

        // 데이터베이스 연결
        $conn = new mysqli($host, $user, $password, $dbname);
        if ($conn->connect_error) {
            die("데이터베이스 연결 실패: " . $conn->connect_error);
        }

        // 새 글 작성 정보 가져오기
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'];

        // 새 글 작성 정보 데이터베이스에 저장
        $sql = "INSERT INTO board (title, author, content) VALUES ('$title', '$author', '$content')";
        $conn->query($sql);

        // 작성한 게시글 정보 가져오기
        $sql = "SELECT * FROM board WHERE title='$title' AND author='$author' AND content='$content'";
        $result = $conn->query($sql);
       
        ?>
         
         <table class="table">
             <thead>
                 <tr>
                     <th>제목</th>
                     <th>작성자</th>
                     <th>내용</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                 if ($result->num_rows > 0) {
                     while($row = $result->fetch_assoc()) {
                         echo "<tr>";
                         echo "<td>" . $row['title'] . "</td>";
                         echo "<td>" . $row['author'] . "</td>";
                         echo "<td>" . $row['content'] . "</td>";
                         echo "</tr>";
                     }
		 } 
		 else {
                     echo "<tr><td colspan='3'>게시글이 없습니다.</td></tr>";
                 }
                 ?>
             </tbody>
         </table>

         <?php
         // 데이터베이스 연결 종료
         $conn->close();
         ?>
         
         <a href="/board2.html" class="btn">새 글 작성</a>
     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </body>
 </html>

