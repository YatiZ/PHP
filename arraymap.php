<?php
$nums = [1,2,3,4];
function two ($n){
    return $n * 2;
}
$result = array_map("two",$nums);

print_r($result);
?>

<?php
$nums = [9,2,3,1];
$result = array_map(function($n){
    return $n * 3;
}, $nums);
print_r($result);
?>

<?php
$name = "Alice";
$zuzu = function() use ($name){
    echo "hello $name";
};
$zuzu();
?>
<? 
$country = "Thai";
echo "Welcome to $country";
?>
 

 <?php
class Animal
{
public $name;
public function run()
{
echo "$this->name is running...";
} }
$dog = new Animal;
$dog->name = "Bobby";
$dog->run();
?> 



<?php
class Animal
{
public function __construct(private $name)
{
//
}
public function run() {
echo "$this->name is running..."; }
}
$dog = new Animal("Rambo");
$dog-> run();?>


<?php
class Animal
{
private $name;
public function __construct($name)
{
$this->name = $name;
}
public function run() {
echo "$this->name is running..."; }
}
class Dog extends Animal {
public function bark() {
echo "Woof.. woof..."; }
}
