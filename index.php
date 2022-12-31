<!-- /*
variables:
    store_name
    last_update
    product_name
    product_price
*/

// $store_name = "Apple";
// $last_update = '12/2022';
// $product_name = "iPad";
// $pdocut_price = 400;


//     $var1 = 10; //value define
//     $str1 = 'aaa';
//     $str2= "bbb";
//     $bool1 = true;
//     $empty = null;
//     $arr1 = [1,2,3];

//     define("CONSTANT1", "aaaaaa"); //const value

//     echo CONSTANT1;

//     // var_dump($str2);
//     // var_dump($var1);
//     // var_dump($arr1);
//     echo "<br>";
//     print_r($arr1);
//     -->

<?php include_once "./inc/header.php";
 include_once "./inc/navbar.php";?>

<main>
    <div class="text-center">
    <h2>Sport Superstar</h2>
    <h5>Everything that you need to stay active</h5>
</div>

    <h3>Trending products</h3>

<div class="row mb-5 pb-3">

<?php

$products = [
  [
  'name' => 'Mike running shoes',
  'description' => 'Good shoes',
  'price' => '$54.00',
  'image' => "https://cdn.pixabay.com/photo/2014/05/18/11/26/shoes-346986__340.jpg",
  'rating' => 5,
  ],
  [
    'name' => 'Tennis edge',
    'description' => 'Tennis gear',
    'price' => '$38.00',
    'image' => "https://cdn.pixabay.com/photo/2021/06/04/06/54/racket-6308994__340.jpg",
    'rating' => 4,
    ],
    [
      'name' => 'Weight it',
      'description' => 'Weights',
      'price' => '$108.00',
      'image' => "https://cdn.pixabay.com/photo/2016/08/31/22/20/weights-1634747__340.jpg",
      'rating' => 5,
    ],
];

$len = count($products);

// for($i=0; $i < $len; $i++){
  foreach($products as $prod){
  echo "<div class=\"col\">";
  echo "<div class=\"card\">";
  echo "<img src=\"{$prod['image']}\" class=\"card-img-top\" alt=\"...\">";
  echo "<div class=\"card-body text-dark\">";
  echo "<h5 class=\"card-title\">{$prod['name']}</h5>";
  echo "<p class=\"card-text\">{$prod['price']}</p>";
  echo "<p class=\"card-text\">{$prod['description']}</p>";
  echo "<p class=\"card-text\">{$prod['rating']}</p>";
  echo "<a href=\"#\" class=\"btn btn-primary\">View product</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
} ?>



    <h3>Our special offers</h3>
</main>

<?php include_once "./inc/footer.php" ?>