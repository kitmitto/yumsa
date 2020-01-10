---
title: "Control Structures #goto"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else  endif , (while),  endwhile, , ,for, endfor, ,foreach, endforeach, switch, endswitch ,Control Structures foreach,goto
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
{% include tocc icon="cog" title="Control Structures #goto" %}

# php goto

1. يمكن استخدام مشغل goto للانتقال إلى قسم آخر في البرنامج.
{: .notice}
2. يتم تحديد نقطة الهدف بواسطة تسمية متبوعة بنقطتين.
{: .notice}
3. يجب أن تكون التسمية الهدف داخل نفس الملف والسياق
{: .notice}

{% highlight php linenos %}
<?php
goto knows1;
echo '1 2 3 ';

knows1:
echo '5 6 7';
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
for ($a=10, $b=0;
$a >= 0 , $b !== 10 ;
$a--, $b++
){
while($a--. $b++) {
    if($a==0 )goto end;
       if( $b==10 )goto end;
  }  

}
echo ("a = $a , $b");
end:
echo "knows1";
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
