---
title: "How to Add and Delete a User to Sudoers ?"
last_modified_at: 2019-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,How to Add and Delete a User to Sudoers ,
#permalink: /Jekyl_paginate/

categories:
  - server
tags:
  - server

excerpt: ""
header:
  overlay_image: /assets/images/linux.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "server"
---
{% include tocc icon="cog" title="How to Add and Delete a User to Sudoers " %}

# How to Add and Delete a User to Sudoers ?

## كيفية أضافة المستخدم إلى مجموعة sudo ؟

{% highlight php linenos %}
$ sudo adduser username sudo
{% endhighlight %}

## كيفية حذف المستخدم من مجموعة sudo ؟

{% highlight php linenos %}
$ sudo deluser username sudo
{% endhighlight %}

## كيفية نزع صلاحيات المستخدم من مجموعة sudo ؟

{% highlight php linenos %}
$ sudo visudo
{% endhighlight %}

or

{% highlight php linenos %}
knows1~# /usr/sbin/visudo
{% endhighlight %}

- ابحث عن هذا السطر و أحذف التالي .

{% highlight php linenos %}
 username    ALL=(ALL:ALL) ALL
{% endhighlight %}

[1](https://fragen.knows1.com/server/How-to-Add-and-Delete-a-User-to-Sudoers/)[2](https://fragen.knows1.com/server/How-do-I-stop-sudo-su/)[3](https://fragen.knows1.com/server/How-To-Add-and-Delete-Users-on-Debian-10/)[4](https://fragen.knows1.com/server/How-to-stop-users-from-Switching-to-Root-user/)
