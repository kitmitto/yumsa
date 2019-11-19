---
title: "Control Structures => while "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else  endif , (while),  endwhile, , ,for, endfor, ,foreach, endforeach, switch, endswitch ,
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
{% include tocc icon="cog" title="Control Structures => while" %}

# Control Structures => while

#### 1. Control while
{% highlight php linenos %}
<?php
$x = 15;

while($x >= 5) {
    echo $x. "<br>";
    $x--;
}
// while (){$; $;}
?>

{% endhighlight %}


#### 2. Control while
{% highlight php linenos %}
<?php
$a = 15;
while ($a >= 5):
    echo $a."<br>";
    $a--;
endwhile;
// while (): $; $; endwhile;
?>
{% endhighlight %}
#### 3. Control while
{% highlight php linenos %}
<<?php
$a = 10;
$b = 20;
while ($a <= $b): ?>
<?php echo "<h1> $a </h1>"; $a++; endwhile ?>

{% endhighlight %}
#### 4. Control while
{% highlight php linenos %}
<?php
$a = -1;
while ($a == -1):
  echo $a;  $a++;
endwhile;
?>
{% endhighlight %}

#### 1- $ while
{% highlight php linenos %}
// 1- $ while(condition){}
{% endhighlight %}
#### 2- $ while
{% highlight php linenos %}
// 2- (){(){}}
{% endhighlight %}
#### 3- $ while
{% highlight php linenos %}
// 3-  $a while(){$b while(){echo $b }echo $a}
{% endhighlight %}
#### 4- $ while
{% highlight php linenos %}
// 4- $M1 while (condition){$M2 while(condition){echo"";M2+-* } M1+-* }
{% endhighlight %}
#### 5- $ while
{% highlight php linenos %}
// 5- $a = 1; while($a <= 10){$b = 1; while ($b <= $a){echo ++}echo ++}
{% endhighlight %}
{% highlight php linenos %}
<?php
$a = 1;
while ($a <= 10) {
$b = 1;
while ($b <= $a) {
echo "* ";
$b++;
}
echo "<br>";
$a++;
}
  ?>
  {% endhighlight %}
  {% highlight php linenos %}
  <?php
$a = 1;
while($a <= 15)
{$b = 1;
   while($b <= $a)
   {echo "knows1";  $b++;  }
    echo "<br>"; $a++;}
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
