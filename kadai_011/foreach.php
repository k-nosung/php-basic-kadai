<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP kadai_011</title>
 </head>
 
 <body>
     <p>
     <?php
        $variable_name = [
             '名前' => '玉ねぎ',
             '値段' => 200,
             '産地' => '北海道'
            ];
        
        // foreach文を使い、配列のキーと値を出力
       foreach ($variable_name as $key => $value) {
          echo $key . ':' . $value . "<br>";
         }
        ?>
     </p>
 </body>
 
 </html>