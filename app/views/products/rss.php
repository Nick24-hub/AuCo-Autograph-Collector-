<?php
header("Content-Type: text/xml;charset=iso-8859-1");

echo "<?xml version='1.0' encoding='UTF-8' ?>" . PHP_EOL;

echo "<rss version='2.0'>" . PHP_EOL;

echo "<channel>" . PHP_EOL;

echo "<title>" . SITENAME . " | RSS </title>" . PHP_EOL;

echo "<link>" .  URLROOT . "</link>" . PHP_EOL;

echo "<description>Anything you love more, fear more, serve more, or value more than God is your idol.

Here you can find your idol autograph.</description>" . PHP_EOL;

echo "<language>en-us</language>" . PHP_EOL;

$products = $data['products'];
foreach ($products as $product) {
    echo "<item xmlns:dc='ns:1'>" . PHP_EOL;
    echo "<category>" . $product->category . "</category>" . PHP_EOL;
    echo "<title>" . $product->title . "</title>" . PHP_EOL;
    echo "<price>$" . $product->price . "</price>" . PHP_EOL;
    echo "<link>" . URLROOT . "/products/product_details/" . $product->id . "</link>" . PHP_EOL;
    echo "<details>" . $product->details . "</details>" . PHP_EOL;
    echo "<rating>" . $product->rating . "</rating>" . PHP_EOL;
    echo "<created_at>" . $product->created_at . "</created_at>" . PHP_EOL;
    echo "<for_sale>" . $product->for_sale . "</for_sale>" . PHP_EOL;
    echo "</item>" . PHP_EOL;
}

echo "</channel>" . PHP_EOL;

echo "</rss>" . PHP_EOL;
