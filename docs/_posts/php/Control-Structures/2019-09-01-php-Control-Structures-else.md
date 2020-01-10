---
title: "Control Structures else"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else
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
{% include tocc icon="cog" title="Control Structures else" %}

#  Control Structures else

### بناء الجملة .
#### 1. if(){} else(){} code .

{% highlight php linenos %}
if (Conditional) code; else{code};
if (Conditional){code}; else{code};
{% endhighlight %}

#### 2. if(){} else(){} code .
{% highlight php linenos %}
<?php
$a = 1 + 5;
$b = 1 + 6;

if ($a !== $b) {
  echo "a !== $b";
} else {
  echo "a == $b";
}
?>
{% endhighlight %}

#### 3. if(){} else(){} code .

{% highlight php linenos %}
<?php
$knows1 = 1;
$knows2 = 2;
if ($knows1 > $knows2)
echo "Hlloo Hier ist knows1";
else{

echo "knows1 ist < knows2 ";

}
?>
{% endhighlight %}

#### 4. if(){} else(){} code .

{% highlight php linenos %}  
<?php
$knows1 = 100600;
$knows2 = 100600;
if ($knows1 < $knows2)
echo "$knows1 < $knows2";
else{

echo "xxxxxxxx";
}
//xxxxxxxx
?>
{% endhighlight %}

#### 5. if(){} else(){} code .

{% highlight php linenos %}
<?php
if ($a !== null): ?>
<p style="color:red;">I am red</p>
<?php else: ?>
<h1>$a !== null</h1>
<?php endif; ?>
{% endhighlight %}

#### 6. if(){} else(){} code .

{% highlight php linenos %}
<!DOCTYPE html>
<html>
<body>
<?php
$a=5;
if ($a == 5): ?>
<h2>if(){} else(){} code</h2>

<table style="width:100%">
  <tr>
    <th>1</th>
    <th>2</th>
    <th>2</th>
  </tr>
  <tr>
    <td>knows1</td>
    <td>knows2</td>
    <td>knows3</td>
  </tr>
  <tr>
    <td>562</td>
    <td>56656</td>
    <td>65656</td>
  </tr>
  <tr>
    <td>54656</td>
    <td>56565</td>
    <td>656565</td>
  </tr>
</table>
  <?php else: ?>
<h1 style="background-color:Tomato;">knows1</h1>
<?php endif; ?>
</body>
</html>
{% endhighlight %}

#### 7. if(){} else(){} code .

{% highlight php linenos %}
<?php
$a  = 0;
$b = 1;

if ( $a == 1) {
    $a = 'knows1';
}elseif($b !== 1) {

echo $b = "knows2";    

}else {
    echo $c = "knows3 ";
}

?>
{% endhighlight %}

#### 8. if(){} else(){} code .

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

  echo "so get else";

  }
?>
{% endhighlight %}

#### 9. if(){} else(){} code .

{% highlight php linenos %}
<?php
$b = true;
$c = true;
if($a !== null) { echo "knows1"; }
elseif($b == $a) { echo "knows2"; }
elseif($c === $m) { echo "knows3"; }
else { echo 5154515 % 10001551215; }
?>
<?php
{% endhighlight %}


#### 10. if(){} else(){} code .

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
