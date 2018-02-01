<?php/* №1. Пусть в массиве хранятся различные цвета для фона нашего сайта (5 цветов на выбор). Выбор цвета нужно сделать через
 поле ввода типа выпадающий список. Сделайте, чтобы браузер запоминал цвет фона сайта, куда мы заходим, на 5 минут,
 через 5 минут он снова становится тем, каким был по умолчанию и снова можно выбрать и задать цвет фона из
 выпадающего списка.*/?>
<?php
$arrayColors=[
    'green',
    'red',
    'gray',
    'blue',
    'orange'
];
if(isset($_POST['colors'])){
    setcookie("colors", $_POST['colors'], time()+5);
    $_COOKIE['colors'] = $_POST['colors'];
}
?>
<body style="background-color:<?php echo $_COOKIE['colors'];?>">
<form action="" method="post">
    <div>
<h2>Colors</h2>
<select name="colors">
<?php
    foreach ($arrayColors as $allcolors){
        if($allcolors == $_COOKIE['colors']){
        echo "<option selected>".$allcolors."</option>\n\r";
        }else{
            echo "<option>".$allcolors."</option>\n\r";
        }
    }
?>
</select>
    </div>
    <br>
   <div>
       <input type="submit" value="OK">
   </div>
</form>
</body>
