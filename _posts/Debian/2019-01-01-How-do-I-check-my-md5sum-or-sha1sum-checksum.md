---
title: "  How do I check my md5sum or sha1sum  checksum ?"
last_modified_at: 2016-03-09T16:20:02-05:00
author_profile: false
keywords: Download Debian CD and DVD,How do I backup my entire Decian system?, How do I check my md5sum or sha1sum  checksum ?,
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
{% include tocc icon="cog" title="check my md5sum or sha1sum" %}

# How do I check my md5sum or sha1sum  checksum ?

### sha1sum
### sha256sum
### shasum
### openssl
### sha512sum
### md5sum

### Example = debian

> Name = debian-10.1.0-amd64-DVD-3.iso  

{% highlight php linenos %}
$ sha512sum debian-10.1.0-amd64-DVD-3.iso
{% endhighlight %}

{% highlight php linenos %}
11889e1bc97a0a5b6103f19d211a04510350584e30
f4e22d75ee749bc341b86d2e24896422284aa242a7
654fe5f23cf8945a60ad9809d285b82bd10d942ea76a  
debian-10.1.0-amd64-DVD-3.iso
{% endhighlight %}

go to [amd64/iso-dvd/SHA512SUMS](https://cdimage.debian.org/debian-cd/current/amd64/iso-dvd/SHA512SUMS)

- $ sha1sum + file_name.sha1
- $ sha256sum + file_name.sha256
- $ shasum -a 256 -c + file_name.sha256
- $ openssl sha256 -r + file_name.tar.bz2
- $ sha512sum + file_name.sha512
- $ md5sum file_name.md5
 
