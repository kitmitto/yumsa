---
title: "  Control Structures if"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if ,
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
{% include tocc icon="cog" title="Control Structures if" %}

# 1. Control Structures if

### بناء الجملة .
#### if code .
{% highlight php linenos %}
if (Conditional) code;
if (Conditional){code};
{% endhighlight %}

#### 1. if code .
{% highlight php linenos %}
<?php
$knows1 = 1;
$knows2 = 2;
if ($knows1 < $knows2)
echo "Hlloo Hier ist knows1";
// Outbut = Hlloo Hier ist knows1
?>
{% endhighlight %}

#### 2. if code .
{% highlight php linenos %}
<?php
$knows1 = 2;
$knows2 = 2;
if ($knows1 < $knows2)
echo "Hlloo Hier ist knows1";
// Outbut = NULL
?>
{% endhighlight %}

#### 3. if in HTML

{% highlight php linenos %}
<?php
if ($a == null): ?>
<p style="color:red;">I am red</p>
<?php endif; ?>
{% endhighlight %}

#### 4. if code + html .
{% highlight php linenos %}
<!DOCTYPE html>
<html>
<body>
<?php
$a=6;
if ($a == 5): ?>
   <p style="color:red;">a == 5 </p>
  <?php else: ?>
<p style="color:blue;">leider $a !== 5</p>
<?php endif; ?>
</body>
</html>
{% endhighlight %}

#### 5. if code .

{% highlight php linenos %}
<?php
$a = false;
$b = false;

if ( $a ) {
    $a = 'es ist true';
}elseif($b) {

echo $b = "es ist false";    

}else {
    echo $c = "es ist nicht false und true ";
}
echo $a;
?>
{% endhighlight %}

#### 6. if code .

{% highlight php linenos %}
<?php
  $a="knows0";
  $b="knows0";

  if ($a<$b)
     {
    echo " es ist $a < $b ";
    }elseif ($a>$b) {

  echo  "es ist $a > $b";

  }else{

  echo "so get das";

  }              
?>
{% endhighlight %}
