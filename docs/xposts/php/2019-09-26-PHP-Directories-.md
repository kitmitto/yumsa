---
title: " PHP Directories "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays ,PHP Loops, PHP Functions , PHP Math Functions
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
{% include tocc icon="cog" title="PHP Directories " %}


# PHP Directories

##### كيفة فتح المجلد ؟
##### كيفة قراءة المجلد ؟
##### كيفة انشاء المجلد ؟
##### كيفة حذف المجلد ؟
##### كيفة تعديل المجلد ؟



# New Directory

#### 1. mkdir()

{% highlight php linenos %}
<?php
mkdir("css", 0700);
?>
{% endhighlight %}

{% highlight php linenos %}
<?php

$a = '/var/www/knows1/test/test/knows5';
if (mkdir($a, 0777, true)) {
    die('leider ich kann nicht');
}

?>
{% endhighlight %}

{% highlight php linenos %}
<?php
$a = ("test1/test2/test3");
mkdir($a,  0777, true);
?>

{% endhighlight %}


<?php
$a = "dir";
$b = 0755;

mkdir($a, 0777, true); if (mkdir($a, 0777, true)); {

  chmod($a,$b);

}
?>


# Copying Files

#### copy()

> إذا كان الملف الوجهة موجودًا يتم الكتابة .



{% highlight php linenos %}
<?php
$file = 'test.txt';
$newfile = 'css/newfile1.text';

if (copy($file, $newfile)) {
    echo "Copy succeeded $file to $newfile \n";
} else{
        echo "Copy failed $file to $newfile \n";
    }
?>

{% endhighlight %}


# List files and directories .


#### scandir()

{% highlight php linenos %}
<?php
$dir    = 'css/';
$files1 = scandir($dir);
print_r($files1);
/* Outbut : Array ( [0] => .
 [1] => ..
 [2] => example.txt
 [3] => newfile.text
 [4] => newfile0.text
 [5] => newfile1.text ) /
?>
{% endhighlight %}



# شرح ('.', '..')
{% highlight php linenos %}
<?php
$files = scandir("css/");
print_r($files);
?>
{% endhighlight %}
> لاحظ الاخراج
Array ( [0] => .
[1] => ..
[2] => test.txt
[3] => test.txt2
[4] => test.txt3
[5] => test.txt4 )
{: .notice}



> بدون المعلمة رقم 1
Array ( [0] => .
[1] => ..
[2] => dir
[3] => test.txt
[4] => test.txt2
[5] => test.txt3
[6] => test.txt4 )
{: .notice}

{% highlight php linenos %}
<?php
$files = scandir("css", 1);
print_r($files);
?>
{% endhighlight %}
> مع المعلمة رقم 1
> Array ( [0] => test.txt4
> [1] => test.txt3
> [2] => test.txt2
> [3] => test.txt
> [4] => dir
> [5] => ..
> [6
{: .notice}

{% highlight php linenos %}
<?php
$files = array_diff( scandir("css"), array(".", ".."));
print_r($files);
?>
{% endhighlight %}

. refers to the current directory
.. refers to the parent directory
{: .notice}

To exclude the . and .. directory aliases you can do this:
Array (
[2] => dir
[3] => test.txt
[4] => test.txt2
[5] => test.txt3
[6] => test.txt4 )
{: .notice}


# array_diff
{% highlight php linenos %}
<?php
$ich = array("a" => "file1", "file2", "file3", "file4");
$du = array("b" => "file1", "file2", "file3", "file5");
$wir = array_diff($ich, $du);
print_r($wir);
// Outbut : Array ( [2] => file4 ) in ich onhe du .
?>
{% endhighlight %}


# count

> حساب جميع العناصر في مجموعة ، أو شيء في كائن .

{% highlight php linenos %}
<?php
$f60 = array('1' => array('10', '20', '30'),
              '2' => array('40', '50', '60'));


echo count($f60, COUNT_RECURSIVE);
if (count($f60, COUNT_RECURSIVE)){
  echo " = elements <br>";
}
echo count($f60);
if (count($f60)){
  echo " = array";
}
// Outbut : 8 = elements 2 = array
?>
{% endhighlight %}


# سرد جميع الملفات من نوع معين .

#### glob()
{% highlight php linenos %}
<?php
print_r(glob("* .txt"));
// Output : Array ( [0] => knows.txt [1] => test.txt )
?>
{% endhighlight %}


{% highlight php linenos %}
<?php
print_r(glob("*.*"));
/* Output : Array (
[0] => knows.txt
[1] => knows1.php
[2] => knows2.php
[3] => knows3.php
[4] => test.txt ) /
?>
{% endhighlight %}

{% highlight php linenos %}
<?php
   foreach (glob("*.*") as $a) {
      echo "ich bin $a mein Größe ist = " . filesize($a) . "\n";
      /* Outbt :
      ich bin knows.txt mein Größe ist = 23
      ich bin knows1.php mein Größe ist = 64
      ich bin knows2.php mein Größe ist = 114
      ich bin knows3.php mein Größe ist = 24
      ich bin test.txt mein Größe ist = 65 /
   }
?>
{% endhighlight %}




{% highlight php linenos %}
<?php
foreach(glob("css/*.*") as $a){
    echo basename($a) . " mein Größe ist: " . filesize($a) . "<br>";
}

/* OUTbut : test.txt mein Größe ist: 0
test.txt2 mein Größe ist: 0
test.txt3 mein Größe ist: 0
test.txt4 mein Größe ist: 0 /
?>

{% endhighlight %}
