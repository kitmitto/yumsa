---
title: " PHP return"
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
  nav: "php-Control"
---
{% include tocc icon="cog" title=" PHP return" %}

# return

#### 1 echo = return
{: .notice}

{% highlight php linenos %}

<?php
function a($b, $c)
{
  $abc = $b + $c;
  return $abc; // Hier echo = return
}
echo a (10, 10);

?>
{% endhighlight %}

#### 2 ohne echo - ohne return
{: .notice}


{% highlight php linenos %}

<?php

function a ($b, $c)
{
  $abc = $b + $c;
}
echo a (5, 5);
a (5, 5);
echo  $abc;
?>  
{% endhighlight %}

#### 3 echo !== return
{: .notice}

{% highlight php linenos %}

  <?php

function a ($b, $c)
{
  $abc = $b + $c;
  return $abc; // if echo = Output = 55
}

//  قيمة الإرجاع إلى متغير
$abc = a (3, 2);

  // معالجة المتغير
$neueabc = $abc + 5;

echo $neueabc;

?>
{% endhighlight %}

#### 4 echo !== return
{: .notice}

{% highlight php linenos %}

<?php


function a()
{
  return 'knows1'; // echo knows1NULL knows1 knows1
}

echo gettype (a()) . '<br>';
echo a() . '<br>';
print a()

  // Output = string knows1 knows1
?>
{% endhighlight %}

#### 5 type von echo = NULL && return = type
{: .notice}

{% highlight php linenos %}

<?php

function a()
{
  return TRUE; echo FALSE; = NULL
}
echo gettype (a()) . '<br>';
echo a() . '<br>';

?>
{% endhighlight %}

#### 6 return = type
{: .notice}

{% highlight php linenos %}

<?php

function a()
{
  return 10.12;
}
echo gettype (a()) . '<br>';
echo a() . '<br>';

?>
{% endhighlight %}

#### 7 return = type
{: .notice}

{% highlight php linenos %}

<?php

function a()
{
  return 0;
}
echo gettype (a()) . '<br>';
echo a() . '<br>';

?>
{% endhighlight %}

#### 8 echo x return von array
{: .notice}

{% highlight php linenos %}

<?php
$t = 1;
function a()
{
  $abc = array ('A', 'B', 'C', 'D', 'F');
  return $abc;
}
echo gettype (a()) . '<br>';

$abc = a();

foreach ($abc as $b)
  if ($b !==1){ echo $t++;
               if ($b !==1){ echo "=>";
{
  echo $b . '<br>';
}}}

?>
{% endhighlight %}

#### 8 echo == return
{: .notice}

{% highlight php linenos %}

<?php
function a($b, $c)
{
    echo $b * $c;
}
echo a(4, 5);   // outputs '20'.
?>

{% endhighlight %}

#### 9 return ==  echo
{: .notice}

{% highlight php linenos %}

<?php
function a($b, $c)
{
    return $b * $c;
}
echo a(4, 5);   // outputs '20'.
?>
{% endhighlight %}


### حذف الدالات return .
{: .notice}

{% highlight php linenos %}

<?php
function a()
{
    return $b * $c;
}
echo a(4, 5);   // outputs '0'.
?>

{% endhighlight %}


### حذف الدالات echo .
{: .notice}

{% highlight php linenos %}

<?php
function a()
{
    echo $b * $c;
}
echo a(4, 5);   // outputs '0'.
?>
{% endhighlight %}


## // array + return

{% highlight php linenos %}

<?php

function knows($a, $b){
    $all = $a + $b;
    $knows = array($all, $a, $b );
    return $knows;
}

list($a, $b, $all) = knows(1000, 200);
echo  "$a ="; // + لاقيمة لها الا التوضيح
echo  "$b +"; // = لاقيمة لها الا التوضيح
echo  $all;

  // 1200 =1000 +200
?>
{% endhighlight %}



## // array + echo
{: .notice}

{% highlight php linenos %}

<?php

function knows($a, $b){
    $all = $a + $b;
    $knows = array($all, $a, $b );
    echo $knows;
}

list($a, $b, $all) = knows(1000, 200);
echo  "$a ="; // + لاقيمة لها الا التوضيح
echo  "$b +"; // = لاقيمة لها الا التوضيح
echo  $all;

  // Array = +
?>
{% endhighlight %}
