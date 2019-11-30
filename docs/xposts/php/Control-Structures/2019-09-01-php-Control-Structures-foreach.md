---
title: "Control Structures #foreach"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,  Control Structures if , Control Structures else  endif , (while),  endwhile, , ,for, endfor, ,foreach, endforeach, switch, endswitch ,Control Structures foreach,
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
{% include tocc icon="cog" title="Control Structures #foreach" %}
******************************************
# Control Structures #foreach
******************************************

******************************************
#### بناء الحملة = foreach 1 .
******************************************
{% highlight php linenos %}
<?php

foreach ($variable as $key ) {
  // code...
}

 ?>
{% endhighlight %}
******************************************
#### بناء الحملة = 2 foreach .
******************************************
{% highlight php linenos %}
<?php

foreach ($variable as $key => $value) {
  // code...
}

 ?>
{% endhighlight %}
******************************************
#### 1. foreach .
******************************************
{% highlight php linenos %}
<?php  
$a = array("ich", "bin", "knows1", " !! und du");

foreach ($a as $b) {
  echo "$b </n>";
}
?>  
{% endhighlight %}
******************************************
#### 2. foreach .
******************************************
{% highlight php linenos %}
<?php
$a = array(1990, 1991, 1992, 1993);
foreach ($a as $b) {

echo "$b </n>";
echo "<br>";
echo "$b + 1 =";
while ($b <= 1994){
$b++;
echo "$b </n>";  
  }

}

?>
{% endhighlight %}
******************************************
#### 3. foreach .
******************************************
{% highlight php linenos %}
<?php
$a = array(1=>"ich", 2=>"bin", 3=>"knows1", 4=>" !! und du");
foreach ($a as $key => $value) {
    echo "{$key}  {$value} ";

}
?>

{% endhighlight %}

******************************************
#### 4. foreach .
******************************************
{% highlight php linenos %}
<?php
  $a = array(1=>"ich", 2=>"bin", 3=>"knows1", 4=>" !! und du");

foreach ($a as $key => $value):

echo "{$key}  {$value} ";

endforeach;

?>

{% endhighlight %}

******************************************
#### 5. foreach .
******************************************
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
