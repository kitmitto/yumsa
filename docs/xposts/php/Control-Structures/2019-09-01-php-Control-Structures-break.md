---
title: "Control Structures #break"
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
{% include tocc icon="cog" title="Control Structures break" %}

***************************************
# Control Structures #break
***************************************
***************************************
### تأتي مع التالي .
***************************************
> 1. for .
> 2. foreach .
> 3. while .
> 4. do-while .
> 5. switch .


{% highlight php linenos %}
{% endhighlight %}
***************************************
#### بناء الحملة = break 1 .
***************************************
{% highlight php linenos %}
<?php
1----
2------
3--------xxx
4-------
5----------
break;

?>
{% endhighlight %}


***************************************
#### 1. break .
***************************************
{% highlight php linenos %}
<?php  
<?php

$a = array('knows1990',
             'knows1991',
             'knows1992',
             'knows1', // stop da
             'knows1993',
             'knows1994');

foreach ($a as $b) {
    if ($b == 'knows1993') {
        break;  
    }
    echo "$b<br />\n";
}

?>
{% endhighlight %}
***************************************
#### 2. break .
***************************************
{% highlight php linenos %}
<?php

$array = [ 'a', 'b', 'c', 'd', 'f' ];

foreach( $array as $value ){
    if( $value == 'one' ){
        echo "Number three was found!";

    }
      if( $value == 'a' ){
        echo "k";

    }
      if( $value == 'b' ){
        echo "n";

    }
      if( $value == 'c' ){
        echo "w";
///xxxxxxxxxxxxxxxxxxxxxxxxxx
break;
///xxxxxxxxxxxxxxxxxxxxxxxxxx
    }
      if( $value == 'd' ){
        echo "s";

    }
        if( $value == 'd' ){
        echo "1";

    }
}

?>
{% endhighlight %}
