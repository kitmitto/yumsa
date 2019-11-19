---
title: "How to Create a New GIT Repository ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Install Atom on CentOS , Install Atom on debian,How To Install Google Chrome On a CentOS ?,How to Create a New GIT Repository ?,
#permalink: /Jekyl_paginate/

categories:
  - git
tags:
  - git

excerpt: ""
header:
  overlay_image: /assets/images/php_knows1.jpg
  overlay_filter: rgba(192,192,192,0.3)
  caption: "php: [**knows1**](https://knows1.com)"
  actions:

sidebar:
  nav: "git"
---
{% include tocc icon="cog" title="How to Create a New GIT Repository ?" %}

# How to Create a New GIT Repository ?

> for create a new repository on the command line .


{% highlight linux linenos %}
echo "# theme1" >> README.md
{% endhighlight %}
{% highlight linux linenos %}
git init
{% endhighlight %}
{% highlight linux linenos %}
git add README.md
{% endhighlight %}
{% highlight linux linenos %}
git commit -m "first commit"
{% endhighlight %}
{% include adsense.html %}
{% highlight linux linenos %}
git remote add origin git@github.com:knows1/theme1.git
{% endhighlight %}
{% highlight linux linenos %}
git push -u origin master
{% endhighlight %}
