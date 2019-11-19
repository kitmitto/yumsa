---
title: "Control Structures #continue"
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
{% include tocc icon="cog" title="Control Structures continue" %}

***************************************
# Control Structures #continue
***************************************
#### تجاوز
***************************************
#### 1. البناء .
***************************************
{% highlight php linenos %}

<?php
----ok
-----no
-----ok
-----ok
-----no
----ok
------ok

?>
{% endhighlight %}
***************************************
#### 2. continue .
***************************************
{% highlight php linenos %}
<?php
$i = 0;

while ($i <= 10)
{ ++$i;
    if ($i == 1)
    {
        continue; //  توقف و تابع
    }
    if ($i == 5)
    {
        break; // توقف
    }
    echo $i . "/n";
}
?>

{% endhighlight %}
***************************************
#### 3. continue .
***************************************
{% highlight php linenos %}
<?php
for ($a = 0; $a <= 11; ++$a) {
    if ($a == 2)
        continue;
  {
    if ($a == 4)
        continue;
    {
    if ($a == 6)
        continue;
      {
    if ($a == 8)
        continue;
        {
    if ($a == 10)
        continue;
    print "$a /n";
}}}}}
?>
{% endhighlight %}
