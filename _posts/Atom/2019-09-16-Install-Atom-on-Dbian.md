---
title: "Install Atom on Dbian"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Objects php , PHP Arrays
#permalink: /Jekyl_paginate/

categories:
  - Atom
tags:
  - Atom

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "Atom"
---
{% include tocc icon="cog" title="Install Atom on Dbian" %}



# Install Atom on Dbian

{% highlight linux linenos %}
$  wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -
{% endhighlight %}
{% highlight linux linenos %}
$ sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
{% endhighlight %}
{% highlight linux linenos %}
$ sudo apt update
{% endhighlight %}

# Install Atom

{% highlight linux linenos %}
$ sudo apt install atom
{% endhighlight %}
{% highlight linux linenos %}
$ git config --global user.name "knows1"
{% endhighlight %}
{% highlight linux linenos %}
$ git config --global user.email "info@knows1.com"
{% endhighlight %}
{% highlight linux linenos %}
$ git config --list
{% endhighlight %}
{% highlight linux linenos %}
$  ls -al ~/.ssh
{% endhighlight %}
{% highlight linux linenos %}
$ ssh-keygen -t rsa -b 4096 -C "xxxx@xxxx.com"
{% endhighlight %}
{% highlight linux linenos %}
$ eval `ssh-agent -s`
{% endhighlight %}
{% highlight linux linenos %}
$ ssh-add ~/.ssh/id_rsa
{% endhighlight %}

# إضافة مفتاح SSH جديد إلى حساب GitHub الخاص بك
