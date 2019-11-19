---
title: " php Null Types + Void "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void ,
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
{% include tocc icon="cog" title="php Null Types + Void " %}


# php Null Types + Void

###  Null Types == Fatal error = PHP 7.0

{% highlight php linenos %}  
<?php  
function abc(int $a) {
 var_dump($a + $a * 5.5);
}

abc(100);
abc(null);
?>
{% endhighlight %}

###  Null Types !== Fatal error (in) PHP 7.1

> ? = ?int

{% highlight php linenos %}
 <?php  
function abc(?int $a) {
 var_dump($a + $a * 5.5);
}

abc(100);
abc(null);

//OUTPUT : float(650) float(0)  
?>
{% endhighlight %}

{% highlight php linenos %}
 <?php  
function abc(?int $a) {
 return ($a + $a * 5.5);
}

var_dump(abc(100));
var_dump(abc(null));

//OUTPUT : float(650) float(0)  
?>
{% endhighlight %}

###  nullables types works for the return value !! .

{% highlight php linenos %}
<?php
function abc(?int $a, ?int $b, ?int $c) : ?int {
    if ($a === null || $b === null ||  $c === null ) {
        return null;
    }
    return $a + $b + $c;
}
var_dump( abc(10, 10, 10) ); // int(30) !!!!!
var_dump( abc(10, null, 10) ); // NULL
var_dump( abc(null, 10, 10) ); // NULL
var_dump( abc(10, 10, null) ); // NULL  
?>
{% endhighlight %}

### Void Return Type /باطل

## function returns a value

{% highlight php linenos %}
<?php

function knows($a1, $a2, $a3){
    $all = "$a1 $a2 $a3 ";
    return $all;
}
  var_dump(knows(5,0,0));
?>
{% endhighlight %}

## function returns null

{% highlight php linenos %}
<?php

function knows($a1, $a2, $a3){
    $all = "$a1 $a2 $a3 ";
    return ;
}
  var_dump(knows(5,0,0));
?>
{% endhighlight %}

## function return null
<?php
{% highlight php linenos %}
function knows($a1, $a2, $a3){
    $all = "$a1 $a2 $a3 ";    
}
  var_dump(knows(5,0,0));
?>
{% endhighlight %}

## void = function return null

{% highlight php linenos %}
<?php

function knows($a1, $a2, $a3): void{
    $all = "$a1 $a2 $a3 ";
    return;
}
  var_dump(knows(5,0,0));
?>
{% endhighlight %}

## void = function return null
{% highlight php linenos %}
<?php
function knows($a1, $a2, $a3): void{
    $all = "$a1 $a2 $a3 ";
}
  var_dump(knows(5,0,0));
?>
{% endhighlight %}

## void !== function return null
##  void === Fatal error: A void function must not return a value

{% highlight php linenos %}
<?php

function knows($a1, $a2, $a3): void{
    $all = "$a1 $a2 $a3 ";

  return $all;
}
  var_dump(knows(5,0,0));
?>
{% endhighlight %}
