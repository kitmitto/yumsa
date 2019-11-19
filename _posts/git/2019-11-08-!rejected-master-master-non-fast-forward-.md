---
title: "! [rejected]master -> master (non-fast-forward)"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Install Atom on CentOS , Install Atom on debian,How To Install Google Chrome On a CentOS ?,
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
{% include tocc icon="cog" title="! [rejected]master -> master (non-fast-forward)" %}

# ! [rejected]          master -> master (non-fast-forward)




### الخطأ

! [rejected]          master -> master (non-fast-forward)
error: failed to push some refs to 'git@github.com:knows1/theme.git'
hint: Updates were rejected because the tip of your current branch is behind
hint: its remote counterpart. Integrate the remote changes (e.g.
hint: 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
{: .notice }
{% include adsense.html %}
### الحل

{% highlight linux linenos %}
$ git push -f origin master
{% endhighlight %}
