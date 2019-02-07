<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    function kiemTra($number){
        $check = true;
        if($number <2){
            $check = false;
        }else{
            for($i=2;$i<$number; $i++){
                if($number %$i == 0){
                    $check = false;
                }
            }
        }
        return $check;
    }
    function show(){                //dung vong lap for.
        $n = 2;
        for ($i=2;$i<100; $i++){
            if(kiemTra($n)){
                echo $n . '<br>';
            }
            $n++;
        }
    }
//    function show(){              //dung vong lap while.
//        $n = 2;
//        $i = 0;
//        while ($n<100){
//            if(kiemTra($n)){
//                echo $n . '<br>';
//            }
//            $n++;
//        }
//    }
    show();
?>
</body>
</html>