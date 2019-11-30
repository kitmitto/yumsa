---
title: " Predefined-Variables-2- $GLOBALS "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays ,PHP Loops, PHP Functions , PHP Math Functions , Variable handling Functions , Predefined-Variables-1- Superglobals , $GLOBALS
#permalink: /Jekyl_paginate/

categories:
  - php
tags:
  - php

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "php-Predefined-Variables"
---
{% include tocc icon="cog" title="Predefined-Variables-1- $GLOBALS " %}

# $GLOBALS

{% highlight php linenos %}
<?php
function hallo() {

    $a = "local variable";

    echo '$a = global ist: ' . $GLOBALS["a"] . "\n"; //  globally


  echo "<br>";

    echo '$a = local ist : ' . $a . "\n"; // Local
}

$a = "Hallo ich bin : global ";

hallo();

// output

$a = global ist: Hallo ich bin : global
$a = local ist : local variable

?>
 {% endhighlight %}


{% highlight php linenos %}
<?php
  function knows1(){

  $a = " local + local";// استخدام دخلي

  echo "ich bin local = " .$a. "<br>";

   echo "ich bin global = " .$GLOBALS["a"]. "<br>"; // اعلان

  }

  $a = " global +global";// استخدام خارجي
  knows1()


?>
 {% endhighlight %}


{% highlight php linenos %}
<?php
function knows1() {

    $GLOBALS['all'] = $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

  //  بعد
$a = 10;
$b = 10;
$c = 10;
knows1();


echo $all;
?>
 {% endhighlight %}


{% highlight php linenos %}

<?php

    //  قبل
$a = 10;
$b = 10;
$c = 10;
 knows1();

function knows1() {

    $GLOBALS['all'] = $GLOBALS['a'] + $GLOBALS['b'] - $GLOBALS['c'];
}




echo $all;
?>
 {% endhighlight %}
