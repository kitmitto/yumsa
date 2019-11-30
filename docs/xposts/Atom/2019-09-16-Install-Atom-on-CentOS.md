---
title: "Install Atom on CentOS"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Install Atom on CentOS , Install Atom on debian,
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
{% include tocc icon="cog" title="Install Atom on CentOS" %}




# How To Install Atom Text Editor on CentOS ?

{% highlight linux linenos %}
sudo rpm --import https://packagecloud.io/AtomEditor/atom/gpgkey
{% endhighlight %}

{% highlight linux linenos %}
sudo sh -c 'echo -e "[Atom]\nname=Atom Editor\nbaseurl=https://packagecloud.io/AtomEditor/atom/el/7/\$basearch\nenabled=1\ngpgcheck=0\nrepo_gpgcheck=1\ngpgkey=https://packagecloud.io/AtomEditor/atom/gpgkey" > /etc/yum.repos.d/atom.repo'
{% endhighlight %}
> يمكنك الآن تثبيت Atom باستخدام dnf (أو yum اعتمادًا على التوزيع الخاص بك):

# Install Atom
{% highlight linux linenos %}
sudo dnf install atom
{% endhighlight %}
# Install Atom Beta
{% highlight linux linenos %}
sudo dnf install atom-beta
{% endhighlight %}

> بدلاً من ذلك ، يمكنك تنزيل حزمة Atom .rpm وتثبيتها مباشرةً:

# On YUM-based distributions
{% highlight linux linenos %}
sudo yum install -y atom.x86_64.rpm
{% endhighlight %}
# On DNF-based distributions
{% highlight linux linenos %}
sudo dnf install -y atom.x86_64.rpm
{% endhighlight %}
