<?php
    $name = "ZuZu";
    $gender ="girl";
    $age = "二十一";
    echo "你好! 我的名字是$name"; 
    echo "我是$age 岁";
    ?>

<?php
   $fruit = "苹果";
   $price = 1.4;
   echo "这个 $fruit 是 \$$price."; ?>

<!-- Array -->


<?php
$users = [
    ["name" => "Alice", "age" => 22],
    ["name" => "Bob", "age"=>23],
    ["name" => "Bobby", "age"=>24],
];
print_r($users)
?>
<?php
   #this a valid coment
   echo 3 ** 4;
?>
<?php
  $名字 = "Mo";
  $名字 .= "orr";

  echo $名字;
  ?>

<?php
  #tenary operator
  $车 = "";
  echo $车 ? $车 : "出租车";
  ?>
<?php
  $车 ="公共汽车";
  echo $车 ?: "出租车";
  ?>
<?php
  $日 = date("D");
  if($日 === "Sun"){
    echo "今天是星期天";
  }elseif($日 === "Sat"){
    echo "今天是星期六";
  }else{
    echo "今天是周中";
  }
?>
<?php
$nums = [12, 42, -9, 8, 457];
$i = 0;
$result = 0;
while($i < count($nums)){
    $result += $nums[$i];
    $i++;
}
echo $result;
?>

<?php
function add(Array $nums): float {
echo array_sum($nums); }
add([1, 2]);
  
