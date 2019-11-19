---
title: "How To Install Google Chrome On a CentOS ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Install Atom on CentOS , Install Atom on debian,How To Install Google Chrome On a CentOS ?,
#permalink: /Jekyl_paginate/

categories:
  - How
tags:
  - How

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "How"
---
{% include tocc icon="cog" title="Install Google Chrome" %}

# How To Install Google Chrome On a CentOS ?

{% highlight linux linenos %}
$ echo "You are using $(getconf LONG_BIT) bit Linux distro."
{% endhighlight %}

> You are using 64 bit Linux distro.

## Install Google Chrome .

{% highlight linux linenos %}
$ wget https://dl.google.com/linux/direct/google-chrome-stable_current_x86_64.rpm
{% endhighlight %}

{% highlight linux linenos %}
$ sudo yum install ./google-chrome-stable_current_*.rpm -y
{% endhighlight %}

{% include adsense.html %}

{% highlight linux linenos %}
$ rm google-chrome-stable_current_*.rpm
{% endhighlight %}

{% highlight linux linenos %}
sudo dnf install google-chrome-stable_current_*.rpm
{% endhighlight %}

## How do I upgrade Google Chrome ?

{% include adsense.html %}

{% highlight linux linenos %}
$ sudo yum update google-chrome-stable
{% endhighlight %}

[1](https://fragen.knows1.com/tags/#how)

[How To Install Google Chrome On a CentOS ?](https://fragen.knows1.com/how/To-Install-Google-Chrome-On-a-CentOS/)
[Add User to Sudoers CentOS and Add User to Sudo Group ?](https://fragen.knows1.com/how/To-Add-User-to-Sudoers-CentOS-and-Add-User-to-Sudo-Group/)

[كيفية معرفة إصدار توزيعة لينكس - الأساسية ؟ ?](https://fragen.knows1.com/how/%D9%83%D9%8A%D9%81%D9%8A%D8%A9-%D9%85%D8%B9%D8%B1%D9%81%D8%A9-%D8%A5%D8%B5%D8%AF%D8%A7%D8%B1-%D8%AA%D9%88%D8%B2%D9%8A%D8%B9%D8%A9-linux-%D8%A7%D9%84%D8%A3%D8%B3%D8%A7%D8%B3%D9%8A%D8%A9/)

[How To Submit Blogger Sitemap To Google Search Console?](https://fragen.knows1.com/how/How-To-Submit-Blogger-Sitemap-To-Google-Search-Console/)
