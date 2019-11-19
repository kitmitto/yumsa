---
title: "linux Network Settings"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: linux Network Settings, How To Add and Delete Users on Debian 10,How to stop users from Switching to Root user,Linux Services ?,
#permalink: /Jekyl_paginate/

categories:
  - server
tags:
  - server

excerpt: "linux Network Settings,TCP-IP Network Configuration Files,Domain Name System,hosts,Specify "
header:
  overlay_image: /assets/images/server/linux-Network-Settings.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "server"
---
{% include tocc icon="cog" title="linux Network Settings" %}


> not ready

# linux Network Settings .

###  TCP-IP Network Configuration Files .

1- DNS => Domain Name System // جميع الانطمة

{% highlight linux linenos %}
$ nano /etc/resolv.conf
{% endhighlight %}

2- hosts locally // جميع الانطمة

- يحتوي على اسم المضيف ورقم الآي بي .

- لآي بي : هو معرف رقمي  يقابل عنوان الآي بي مثلا في شبكات الهاتف رقم الهاتف.

{% highlight linux linenos %}
$ nano /etc/hosts
{% endhighlight %}

3- NIS => Network Information System

{% highlight linux linenos %}
$ nano /etc/nsswitch.conf
{% endhighlight %}

4- Specify network configuration and devices .

{% highlight linux linenos %}
$ ls /etc/network/
{% endhighlight %}

{% highlight linux linenos %}
$ nano  /etc/network/interfaces
{% endhighlight %}

[.](http://www.yolinux.com/TUTORIALS/LinuxTutorialNetworking.html)
[.](https://www.server-world.info/ennote?os=Debian_10&p=initial_conf&f=3)
