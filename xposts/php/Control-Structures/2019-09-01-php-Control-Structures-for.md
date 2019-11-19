---
title: "Control Structures for "
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
{% include tocc icon="cog" title="Control Structures for" %}

*****************
# Control Structures => for
*****************
{% highlight php linenos %}
for (value1; condition; value2)
    statement
{% endhighlight %}
*****************
##### 1. for
*****************
{% highlight php linenos %}
<?php

for ($a = 10; $a !== 0; $a--) {
    echo "$a.<br>";
}
 ?>
{% endhighlight %}

*****************
#### 2. for
*****************
{% highlight php linenos %}
<?php

 ##  for ($; ; value2 ) {if() {} }

for ($a = 10; ; $a--)
{if($a < 0){break;}echo $a;}
?>

{% endhighlight %}

*****************
#### 3. for
*****************

{% highlight php linenos %}
 ##  for (; ; ) {() {} }

$i = 0;
for (; ; ) {
    if ($i >= 10) {
        break;
    }
    echo "$i<br>";
    $i++;
}
?>
{% endhighlight %}

*****************
#### 4. for
*****************

{% highlight php linenos %}
 <?php
 ##  for (a b c d f g h j ; condition; statement Operators; );
for ($a = 0,
     $b = 10,
     $c = 10;
     $a <= 20;
     $b -= $c,
     print "$a<br>",
     $a++);
?>
{% endhighlight %}

*****************
#### 5. for
*****************
{% highlight php linenos %}
<?php
for ($a = 1; $a <= 10 ; $a++): ?>

  <h1> ich bin N : <?php echo $a ?> <h1>

<?php endfor; ?>
{% endhighlight %}

*****************
#### 6. for
*****************
{% highlight php linenos %}
<?php
for($a = 'a',  $b = 1; $a != 'z',  $b <= 24; $a++. $b++ ) {
    echo "$a   und du ! <br> $b ich bin :";
}
?>
{% endhighlight %}
