---
title: "How to Install Apache on Debian 10 ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,
#permalink: /Jekyl_paginate/

categories:
  - server
tags:
  - server

excerpt: "How to Install Apache on Debian 10..,Install the Apache Web Server ?"
header:
  overlay_image: /assets/images/linux.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "server"
---

{% include tocc icon="cog" title="How to Install Apache on Debian 10 ?" %}

# How to Install Apache on Debian 10 ?

## How To Install the Apache Web Server ?

1- Install Apache Web Server

{% highlight php linenos %}
$ sudo apt -y install apache2
{% endhighlight %}

{% highlight php linenos %}
knows1:~$ sudo apt -y install certbot
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following additional packages will be installed:
  libicu63 python-pyicu python3-acme python3-asn1crypto python3-certbot
  python3-certifi python3-cffi-backend python3-chardet
  python3-configargparse python3-configobj python3-cryptography
  python3-distutils python3-future python3-idna python3-josepy
  python3-lib2to3 python3-mock python3-openssl python3-parsedatetime
{% endhighlight %}

2- إيقاف تشغيل الخادم ServerTokens Prod  .
[راجع](https://www.if-not-true-then-false.com/2009/howto-hide-and-modify-apache-server-information-serversignature-and-servertokens-and-hide-php-version-x-powered-by/)

 لماذا نقوم بهذه الخطوة , من أجل الآمان , لأن تشغبله سوف يخبر الآخرين ما هو إصدار نظام التشغيل الأساسي .

{% highlight php linenos %}
$ sudo nano +18 /etc/apache2/conf-enabled/security.conf
{% endhighlight %}

{% highlight php linenos %}
ServerTokens Prod
{% endhighlight %}

3- إضافة اسم الملف الذي يمكنه الوصول إليه فقط باستخدام اسم الدليل .

{% highlight php linenos %}
$ ls /etc/apache2/mods-enabled/
{% endhighlight %}

{% highlight php linenos %}
$ sudo nano /etc/apache2/mods-enabled/dir.conf
{% endhighlight %}

> سوف يبدو بهذا الشكل .

{% highlight php linenos %}
<IfModule mod_dir.c>
        DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm
</IfModule>
{% endhighlight %}

أحذف أي أمتداد لا تحتاجه .


4. أضف أسم الخادم الخاص بك .

{% highlight php linenos %}
$ sudo nano +70 /etc/apache2/apache2.conf
{% endhighlight %}

{% highlight php linenos %}
ServerName knows1.com
{% endhighlight %}


5. بدل التالي بإسم الخادم الخاص بك .

{% highlight php linenos %}
$ sudo nano /etc/apache2/sites-enabled/000-default.conf
{% endhighlight %}
قبل

{% highlight php linenos %}
ServerAdmin webmaster@localhost
{% endhighlight %}
بعد

{% highlight php linenos %}
ServerAdmin webmaster@knows1.com
{% endhighlight %}


6- أعادة تشغيل الخادم الخاص بك .

{% highlight php linenos %}
$ sudo systemctl restart apache2
{% endhighlight %}
