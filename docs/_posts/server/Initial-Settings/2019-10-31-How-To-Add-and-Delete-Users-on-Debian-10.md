---
title: "How To Add and Delete Users on Debian 10"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: How To Add and Delete Users on Debian 10,
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
{% include tocc icon="cog" title="How To Add and Delete Users on Debian 10" %}

# How To Add and Delete Users on Debian 10

## كيفية التحقق من المستخدم الحالي هل له صلاحية أستخدام sudo ؟

{% highlight php linenos %}
$ sudo -v
{% endhighlight %}

## كيفية أضافة مستخدم جديد ؟

{% highlight php linenos %}
#  /usr/sbin/adduser username
{% endhighlight %}

## كيفية حذف المستخدم  ؟

{% highlight php linenos %}
$ sudo /usr/sbin/deluser username
{% endhighlight %}

## كيفية عرض جميع المجموعات ؟

{% highlight php linenos %}
# cat /etc/group
{% endhighlight %}

## كيفية حذف مجموعة المستخدم ؟

{% highlight php linenos %}
$ sudo groupdel username
{% endhighlight %}

## كيفية حذف المستخدم مع سطح مكتبه ؟

{% highlight php linenos %}
$ sudo /usr/sbin/deluser --remove-home username
{% endhighlight %}
## كيفية حذف المستخدم مع جميع ملفاته ؟
{% highlight php linenos %}
$ sudo /usr/sbin/deluser --remove-all-files username
{% endhighlight %}

## كيفية حذف المستخدم من المجموعة ؟

{% highlight php linenos %}
$ sudo deluser {user} {group}
{% endhighlight %}

[1](https://fragen.knows1.com/server/How-to-Add-and-Delete-a-User-to-Sudoers/)[2](https://fragen.knows1.com/server/How-do-I-stop-sudo-su/)[3](https://fragen.knows1.com/server/How-To-Add-and-Delete-Users-on-Debian-10/)[4](https://fragen.knows1.com/server/How-to-stop-users-from-Switching-to-Root-user/)
