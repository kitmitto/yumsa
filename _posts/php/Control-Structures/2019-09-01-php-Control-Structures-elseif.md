---
title: "Control Structures elseif"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else , Control Structures elseif
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
  nav: "php-Control"
---
{% include tocc icon="cog" title="Control Structures elseif" %}


#  Control Structures elseif

### بناء الجملة .
#### 1. if(){} elseif(){} code else(){} code ..

{% highlight php linenos %}
if (Conditional){code} elseif (Conditional){code} else {code}
{% endhighlight %}

#### 2. if(){} elseif(){} code else(){} code .
{% highlight php linenos %}
<?php
$a = true;
$b = "1 + 6";
$c = "knows1";
if ($a === $b) {
  echo "a !== b";
} elseif ($a){
  echo "a = true";
}else {
  echo $c;
}
// Outbut = a = true
?>
{% endhighlight %}

#### 3. if(){} elseif(){} code else(){} code .
{% highlight php linenos %}
<?php
$knows1 = 2;
$knows2 = 2;
if ($knows1 > $knows2)
echo "Hlloo Hier ist knows1";
elseif ($knows1 ){
echo "knows1 ist = knows2 ";
}else{
  echo "x = knows1 , x = knows2";
}
?>
{% endhighlight %}

#### 4. if(){} elseif(){} code else(){} code .

{% highlight php linenos %}
<?php
$knows1 = 100600;
$knows2 = 100601;
$knows3 = $knows1 + $knows2;
if ($knows1 === $knows2)
echo "$knows1 < $knows2";
elseif ($knows1 == $knows2){
echo "xxxxxxxx";
}else{
echo $knows3;
}
// Outbot = 201201
?>
{% endhighlight %}

#### 5. if(){} elseif(){} code else(){} code .

{% highlight php linenos %}
<?php
if ($a > null): ?>
<h1>knows1</h1>
<?php elseif($a == null ): ?>
<h1>knows2</h1>
<?php else: ?>
<h1>knows3</h1>
<?php endif; ?>
{% endhighlight %}

#### 6. if(){} elseif(){} code else(){} code .

{% highlight php linenos %}
<?php
$a  = 2;
$b = 2;
if ( $a == 1) {
echo    $a = 'knows1';
}elseif($b < 1) {
echo $b = "knows2";
}else {
    echo $c = "knows3 ";
}
?>
{% endhighlight %}

#### 7. if(){} elseif(){} code else(){} code .

{% highlight php linenos %}
<?php
  $knows1="Hallo";
  $knows2="Hallo";

  if ($knows1<$knows2)
     {
    echo " es ist $knows1 < $knows2 ";
  }elseif ($knows1>$knows2) {

  echo  "es ist $knows1 > $knows2";

  }else{

  echo "so get elseif";

  }
?>
{% endhighlight %}

#### 8. if(){} elseif(){} code else(){} code .

{% highlight php linenos %}
<?php
$b = 1;
$c = 2;
if($a !== null) { echo "knows1"; }
elseif($b === $a) { echo "knows2"; }
elseif($c == $m) { echo "knows3"; }
else { echo H.A.L.L.O; }
?>
<?php

{% endhighlight %}


#### 0. if(){} elseif(){} code else(){} code .

{% highlight php linenos %}
<?php
$b = true;
$c = true;
if($a !== null) { echo "knows1"; }
elseif($b == $a) { echo "knows2"; }
elseif($c === $m) { echo "knows3"; }
else { echo 5154515 % 10001551215; }
////////
echo "<br>";
if($a == null) { echo "knows1"; }
elseif($b == $a) { echo "knows2"; }
elseif($c === $m) { echo "knows3"; }
else { echo 5154515 % 10001551215; }
////////////
echo "<br>";
if($a !== null) { echo "knows1"; }
elseif($b !== $a) { echo "knows2"; }
elseif($c === $m) { echo "knows3"; }
else { echo 5154515 % 10001551215; }
?>
{% endhighlight %}
| [Control Structures](https://fragen.knows1.com/php/php-Control-Structures/) | | |
| -------- | -------- | -------- |
| [if](https://fragen.knows1.com/php/php-Control-Structures-if/) | | | |
| [else](https://fragen.knows1.com/php/php-Control-Structures-else/) | | | |
| [elseif/else if](https://fragen.knows1.com/php/php-Control-Structures-elseif/) | | | |
| [Alternative syntax for control structures](https://fragen.knows1.com/php/php-Control-Structures-Alternative/) | | | |
| [while](https://fragen.knows1.com/php/php-Control-Structures-while/) | | | |
| [do-while](https://fragen.knows1.com/php/php-Control-Structures-do-while/) | | | |
| [for](https://fragen.knows1.com/php/php-Control-Structures-for/) | | | |
| [foreach](https://fragen.knows1.com/php/php-Control-Structures-foreach/) | | | |
| [break](https://fragen.knows1.com/php/php-Control-Structures-break/) | | | |
| [continue](https://fragen.knows1.com/php/php-Control-Structures-continue/) | | | |
| [switch](https://fragen.knows1.com/php/php-Control-Structures-switch/) | | | |
| [declare](https://fragen.knows1.com/php/php-Control-Structures-declare/) | | | |
| [return](https://fragen.knows1.com/php/php-Control-Structures-return/) |
| [require](https://fragen.knows1.com/php/Include-Require/) | | | |
| [include](https://fragen.knows1.com/php/Include-Require/) | | | |
| [require_once](https://fragen.knows1.com/php/Include-Require/) | | | |
| [include_once](https://fragen.knows1.com/php/Include-Require/) | | | |
| [goto](https://fragen.knows1.com/php/php-Control-Structures-goto/) | | | |
