---
title: "Control Structures do-while"
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
{% include tocc icon="cog" title="Control Structures do-while" %}

**************
# Control Structures => do-while
**************
{% highlight php linenos %}
do {
    code
} while (condition  T );
{% endhighlight %}

{% highlight php linenos %}
<?php
do {
  // code...
} while ();
 ?>
{% endhighlight %}



**************
##### 1. do while
**************
{% highlight php linenos %}
<?php
$a = 0;
$b = "10 * 10 =";
$c = 10;
$g = 10;
$k = $c * $g;  
do {
echo  "<p> $b $k <p>";

} while ($a = 0);
 ?>
{% endhighlight %}

**************
#### while wie do while
**************
{% highlight php linenos %}
<?php
$a = 5;
while ($a <= 8){
echo "while es ist $a .<br>";
  $a++;
}

// Outbut : =  while es ist 5 .
// while es ist 6 .
// while es ist 7 .
// while es ist 8 .

?>
{% endhighlight %}
**************
#### while wie do while
**************
{% highlight php linenos %}
<?php
$a = 5;
do {
echo "while es ist $a .<br>";
  $a++;
}  
while ($a <= 8);
?>
{% endhighlight %}

**************
#### while + HTML
**************
{% highlight php linenos %}
 <?php
 $a = 5;
 while ($a <= 8): ?>
 <h1> while es ist <?php  echo $a; "<br>"; $a++; ?> </h1>
<?php endwhile; ?>
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
