---
title: " How do I backup my entire Decian system?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Download Debian CD and DVD,How do I backup my entire Decian system?,
#permalink: /Jekyl_paginate/

categories:
  - Debian
tags:
  - Debian

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "Debian"
---
{% include tocc icon="cog" title="How do I backup my entire Decian system?" %}

# How do I backup my entire Decian system?

### Create Backup (von A auf A )

{% highlight php linenos %}
$ sudo dd if=/dev/sda4 of=/backup/sda4.img
{% endhighlight %}

## or

{% highlight php linenos %}
$ sudo dd if=/dev/sdb of=/dev/sda4.img
{% endhighlight %}

### Restore Backup (von A auf B )

{% highlight php linenos %}
$ sudo dd if=/backup/sda4.img of=/dev/sdb
{% endhighlight %}

{% highlight php linenos %}
$ sudo dd if=/dev/sda2 of=/dev/sda4 skip=1000 count=1
{% endhighlight %}

{% highlight php linenos %}
$ rsync -r /home/knows1/test /home/knows1/test1
{% endhighlight %}

{% highlight php linenos %}
$ ls test1
test
{% endhighlight %}
### الحفاظ على الأذونات

{% highlight php linenos %}
$ rsync -ra /home/knows1/test /home/knows1/test1
{% endhighlight %}
