---
title: "How do I stop sudo su?"
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

# How do I stop sudo su?

{% highlight php linenos %}
knows1:~# usermod -G adm username
{% endhighlight %}

or

{% highlight php linenos %}
knows1:~# /usr/sbin/usermod -G adm username
{% endhighlight %}

##### to line 15 and add group=adm

{% highlight php linenos %}
knows1:~# nano -c  /etc/pam.d/su
{% endhighlight %}

or

{% highlight php linenos %}
knows1:~# nano +15 /etc/pam.d/su
{% endhighlight %}

{% highlight php linenos %}
auth       required   pam_wheel.so group=adm
{% endhighlight %}

[1](https://fragen.knows1.com/server/How-to-Add-and-Delete-a-User-to-Sudoers/)[2](https://fragen.knows1.com/server/How-do-I-stop-sudo-su/)[3](https://fragen.knows1.com/server/How-To-Add-and-Delete-Users-on-Debian-10/)[4](https://fragen.knows1.com/server/How-to-stop-users-from-Switching-to-Root-user/)
