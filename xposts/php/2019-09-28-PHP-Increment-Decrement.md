---
title: "PHP Increment + Decrement"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays ,PHP Loops , PHP Introduction
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
{% include tocc icon="cog" title=" PHP Increment + Decrement" %}

# PHP Increment + Decrement

> ++
# قبل المتغيير زيادة المتغيير ب 1 ثم إرجاع المتغيير  .
{: .notice}

{% highlight php linenos %}
<?php
echo "<h3>++a</h3>";
$a = 5;
echo "Before: " . ++$a . "<br />\n";
echo "After : " . $a . "<br />\n";
// ++a
// Before: 6
//After : 6
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
$knows1 = 0;
$knows2 = 5;
$knows3 = 5;

echo  ++$knows1;
echo  ++$knows2;
echo  ++$knows3;
// Outbot = 166
 ?>
{% endhighlight %}

> --
# قبل المتغيير ينقص قبل تنفيذ الكود
{: .notice}

{% highlight php linenos %}
<?php
echo "<h3>--a</h3>";
$a = 5;
echo "Before : " . --$a . "<br />\n";
echo "After : " . $a . "<br />\n";
//--a
//Before : 4
//After : 4
?>
{% endhighlight %}


> ++
#  بعد المتغيير إرجاع المتغيير ثم زيادة 1 على المتغيير  .
{: .notice}

{% highlight php linenos %}
<?php
echo "<h3>a++</h3>";
$a = 5;
echo "Before: " . $a++ . "<br />\n";
echo "After: " . $a . "<br />\n";
// OutBut : a++
// Before: 5
//After: 6
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
$knows1 = 0;
$knows2 = 5;
$knows3 = 5;

echo  $knows1++;
echo  $knows2++;
echo  $knows3++;
// Outbot = 055
 ?>
{% endhighlight %}
> --
# بعد المتغيير ينقص بعد تنفيذ الكود
{: .notice}

{% highlight php linenos %}
<?php
echo "<h3>a--</h3>";
$a = 5;
echo "Before: " . $a-- . "<br />\n";
echo "After 4: " . $a . "<br />\n";
//a--
//Before: 5
//After : 4
?>
{% endhighlight %}


{% highlight php linenos %}
<?php
echo "<h3>a++</h3>";
$a = 5;
echo "Before: " . $a++ . "<br />\n";
echo "After: " . $a . "<br />\n";
echo $a + $a++ . "<br />\n";
// OutBut  : 13

?>
{% endhighlight %}
{% highlight php linenos %}
<?php
echo "<h3>++a</h3>";
$a = 5;
echo "Before: " . ++$a . "<br />\n";
echo "After : " . $a . "<br />\n";
echo $a + ++$a . "<br />\n";
// OutBut : 14
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
echo "<h3>a--</h3>";
$a = 5;
echo "Before: " . $a-- . "<br />\n";
echo "After : " . $a . "<br />\n";
echo $a + $a-- . "<br />\n";
// OutBut : 7
?>
{% endhighlight %}
{% highlight php linenos %}
<?php
echo "<h3>--a</h3>";
$a = 5;
echo "Before : " . --$a . "<br />\n";
echo "After : " . $a . "<br />\n";
echo $a + --$a . "<br />\n";
// OutBut : 6
?>
{% endhighlight %}
