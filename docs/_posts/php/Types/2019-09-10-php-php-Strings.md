---
title: " php Strings "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,php Types,Integers,php Strings,
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
{% include tocc icon="cog" title=" php Strings " %}

# php Strings

{% highlight php linenos %}
    $a = "Hallo \"knows1\" and";
{% endhighlight %}

##### 1.  Output

{% highlight php linenos %}
    Hallo "knows1" and .
{% endhighlight %}

{% highlight php linenos %}
    $b = 'Hallo\'knows1\' and';
{% endhighlight %}
##### 2.  Output
{% highlight php linenos %}
  Hallo'knows1' and .
{% endhighlight %}

{% highlight php linenos %}
    $c = "echo \$abc \" \$a + \$b\"  ";
{% endhighlight %}
##### 3.  Output
{% highlight php linenos %}
  echo $abc " $a + $b" .
{% endhighlight %}

{% highlight php linenos %}
    $d = "This ends with a line return\n";
{% endhighlight %}
##### 4.  Output
{% highlight php linenos %}
  This ends with a line return .
{% endhighlight %}

{% highlight php linenos %}
    $f = "var:\\www\\php\\index.php";
{% endhighlight %}
##### 5.  Output
{% highlight php linenos %}
  var:\www\php\index.php
{% endhighlight %}
