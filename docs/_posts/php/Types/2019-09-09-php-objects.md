---
title: " php Object-Oriented programming "
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays , PHP Sorting Arrays, PHP GET + POST + REQUEST,php Null Types + Void , php Iterables,php Types,Booleans TRUE/FALSE ,php Object-Oriented programming,
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
{% include tocc icon="cog" title="php Object-Oriented programming" %}

# php Object-Oriented programming .

## Object-Oriented programming   = OOP .

البرمجة الموجه للكائنات : هي عبارة عن وظائف
{: .notice}
procedures
أو أجراءات
{: .notice}
functions
{: .notice}
التي تؤدي عمليات على المعظيات .
{: .notice}

class
> 1- يمكن تشبيه  بالطلاب .

objects
> 2- يمكن تشبيه  بفرز الطلاب على اسس تصنيفية .

> 3- يشترك جميع الطلاب في الصف أي أنهم طلاب صف معين و يختلف بعضهم عن بالاسماء و الطول و الجنسية مثلاً .

> 4- أي طلاب سوف يسجل بالمدرسة , يكون له خصائص-من وظائف الصف الذي سجل فيه , و عليه ما على باقي الطلاب من وظائفلانهم جميعاً في صف واحد

-class .
-methods ,
-functions,

> 5- ينفرد كل طالب من الطلاب بالأداء الخاص به جيد متوسط ضعيف .


 variables => properties.
 {: .notice}

 functions => methods .
{: .notice}
.

## Syntax OOP .
{% highlight php linenos %}

class students {

}
{% endhighlight %}



#### variables => properties => set
{% highlight php linenos %}
class students {

//  variables => properties => set

public $name;
public $age;
public $nationality;
public $height;
public $weight;
}    
{% endhighlight %}
#### functions => methods => set
{% highlight php linenos %}
// functions => methods => set

function a(){}
function b(){}
function c(){}
function d(){}
function f(){}

{% endhighlight %}
#### (functions = methods) => return (variables = properties)
{% highlight php linenos %}
// (functions = methods) => return (variables = properties)

function a(){}
function ra(){}
function b(){}
function rb(){}
function c(){}
function rc(){}
function d(){}
function rd(){}
function f(){}
function rf(){}
{% endhighlight %}
#### set methods
{% highlight php linenos %}
class students {  
public $Name;
public $Age;
public $Nationality;
public $Height;
public $Weight;
function a($Name){$this->Name = $Name;}
function ra(){return $this->Name;}

function b($Age){$this->Age = $Age;}
function rb(){return $this->Age;}

function c($Nationality){$this->Nationality = $Nationality;}
function rc(){return $this->Nationality;}

function d($Height){$this->Height = $Height;}
function rd(){return $this->Height;}

function f($Weight){this->Weight = $this->Weight}
function rf(){return $this->Weight;}
}    
{% endhighlight %}
#### set Objects
{% highlight php linenos %}
$student1 = new students();
$student1 ->a();
$student1 ->b();
$student1 ->c();
$student1 ->d();
$student1 ->f();
{% endhighlight %}
#### echo Objects

{% highlight php linenos %}
$student1 ->ra();
$student1 ->rb();
$student1 ->rc();
$student1 ->rd();
$student1 ->rf();
{% endhighlight %}
###### so mit Objects
{% highlight php linenos %}
class students {  
public $Name;
public $Age;
public $Nationality;
public $Height;
public $Weight;
function a($Name){$this->Name = $Name;}
function ra(){return $this->Name;}
function b($Age){$this->Age = $Age;}
function rb(){return $this->Age;}
function c($Nationality){$this->Nationality = $Nationality;}
function rc(){return $this->Nationality;}
function d($Height){$this->Height = $Height;}
function rd(){return $this->Height;}
function f($Weight){this->Weight = $this->Weight}
function rf(){return $this->Weight;}
}   
$student1 = new students();
$student1 ->a("knows1");
$student1 ->b(22);
$student1 ->c(Ger);
$student1 ->d(180);
$student1 ->f(82);

echo $student1->ra();
{% endhighlight %}
#### echo Objects
{% highlight php linenos %}
echo $student1 ->ra();
{% endhighlight %}
#### ALL
{% highlight php linenos %}
<?php
class students {  
// properties  
public $Name;
public $Age;
public $Nationality;
public $Height;
public $Weight;
// methods
function a($Name){$this->Name = $Name;}
function ra(){return $this->Name;}
function b($Age){$this->Age = $Age;}
function rb(){return $this->Age;}
function c($Nationality){$this->Nationality = $Nationality;}
function rc(){return $this->Nationality;}
function d($Height){$this->Height = $Height;}
function rd(){return $this->Height;}
function f($Weight){$this->Weight = $Weight;}
function rf(){return $this->Weight;}
}
// set  
$student1 = new students();
$student1->a("knows1");
$student1->b(22);
$student1->c("Ger");
$student1->d(180);
$student1->f(82);
// echo
echo $student1 ->ra();
echo $student1 ->rb();
echo $student1 ->rc();
echo $student1 ->rd();
echo $student1 ->rf();

?>
{% endhighlight %}
