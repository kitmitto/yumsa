---
title: " php Arrays "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,php Types,Booleans TRUE/FALSE ,php Arrays,
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
  nav: "php"
---
{% include tocc icon="cog" title=" php Arrays" %}



# php Arrays

# Syntax

array()


{% highlight php linenos %}
array(
    key  => value,
    key1  => value1,// يمكن الاستغناء عن الفاصلة الاخيرة
)
{% endhighlight %}

1. key  integer or a string .

2. any type


{% highlight php linenos %}
<?php
$a = array("b","c","d");
var_dump($a);
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
$a = array("b"=>1,"c"=>2,"d"=>3.5);
var_dump($a);
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
$a = array(
 array("b"=>1,"c"=>2,"d"=>3.5),
 array("c"=>11,"cc"=>222,"d"=>3.5),
 array("d"=>111,"ccc"=>222,"d"=>3.5),
 array("f"=>1111,"cccc"=>2222,"d"=>3.5),
);
  echo($a)[1]["c"];
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
$a = array(
"a" => 6,
       "b",
       "c",
6 =>   "d",
);
var_dump($a);
?>
{% endhighlight %}



{% highlight php linenos %}
<?php
$a = array(
    1 => "knows1",
    "2" => "knows2",
    +3   => 55,
    -4  => 5
);
var_dump($a);

 // Output :

 // array(4) {
  [1]=> string(6) "knows1"
    [2]=> string(6) "knows2"
    [3]=> int(55)
    [-4]=> int(5) }
?>
{% endhighlight %}
### الوصول إلى عناصر الصفيف مع مربع .

{% highlight php linenos %}
<?php
$abc = array(
  "a" => 1,
  "b" => 2,
  "c" => 3.0,
  "d" => "DD",
  4  => 44,
  5  => "abcd",
    "knowss1" => array(
         "know2" => array(
             "array" => "knows4"
         )
    )
);

var_dump($abc["a"]);
  var_dump($abc["b"]);
var_dump($abc["c"]);
var_dump($abc["d"]);
var_dump($abc[4]);
var_dump($abc[5]);
var_dump($abc["knowss1"]["know2"]["array"]);
?>
{% endhighlight %}
