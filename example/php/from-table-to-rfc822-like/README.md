
# from-map-to-rfc822-like

## 查詢

* [rfc822](https://www.google.com.tw/#q=rfc822)
* [deb822](https://www.google.com.tw/#q=deb822)
* [deb control](https://www.google.com.tw/#q=deb+control)


## 參考資料

* [ref822](https://www.w3.org/Protocols/rfc822/)
* [deb822](http://man7.org/linux/man-pages/man5/deb822.5.html)
* Debian Wiki / [dsc](https://wiki.debian.org/dsc)
* Debian Policy Manual / [Chapter 5 - Control files and their fields](https://www.debian.org/doc/debian-policy/ch-controlfields.html)
* $ man [deb-control](http://manpages.ubuntu.com/manpages/xenial/en/man5/deb-control.5.html)


## 範例檔案

* /var/lib/dpkg/status
* /var/lib/dpkg/available
* /var/lib/apt/extended_states
* /var/lib/apt/lists/*
* /var/mail/* ([1](https://refspecs.linuxfoundation.org/FHS_3.0/fhs/ch05s11.html))
* /var/spool/mail/*

## python-debian

* [README.deb822](https://github.com/romlok/python-debian/blob/master/README.deb822)
* https://anonscm.debian.org/cgit/pkg-python-debian/python-debian.git/

執行

``` sh
$ dpkg -L python-debian | grep deb822
```

顯示

```
/usr/share/doc/python-debian/examples/deb822
/usr/share/doc/python-debian/examples/deb822/depgraph
/usr/share/doc/python-debian/examples/deb822/grep-maintainer
/usr/share/doc/python-debian/examples/deb822/grep_native_packages.py
/usr/share/doc/python-debian/examples/deb822/render-dctrl.gz
/usr/share/doc/python-debian/README.deb822
/usr/share/doc/python-debian/HISTORY.deb822
/usr/lib/python2.7/dist-packages/debian/deb822.py
/usr/lib/python2.7/dist-packages/deb822.py
```

執行

$ cat [/usr/share/doc/python-debian/README.deb822](https://github.com/romlok/python-debian/blob/master/README.deb822)

執行

``` sh
$ dpkg -L python3-debian | grep deb822
```

顯示

```
/usr/lib/python3/dist-packages/debian/deb822.py
/usr/lib/python3/dist-packages/deb822.py
```

## apt-file search

執行

``` sh
$ apt-file search deb822
```

顯示

```
libparser++-dev: /usr/include/util/deb822.hpp
python-debian: /usr/lib/python2.7/dist-packages/deb822.py
python-debian: /usr/lib/python2.7/dist-packages/debian/deb822.py
python-debian: /usr/share/doc/python-debian/HISTORY.deb822
python-debian: /usr/share/doc/python-debian/README.deb822
python-debian: /usr/share/doc/python-debian/examples/deb822/depgraph
python-debian: /usr/share/doc/python-debian/examples/deb822/grep-maintainer
python-debian: /usr/share/doc/python-debian/examples/deb822/grep_native_packages.py
python-debian: /usr/share/doc/python-debian/examples/deb822/render-dctrl.gz
python3-debian: /usr/lib/python3/dist-packages/deb822.py
python3-debian: /usr/lib/python3/dist-packages/debian/deb822.py
spectacle: /usr/lib/python2.7/dist-packages/spectacle/deb822.py
```


執行

``` sh
$ apt-file search rfc822
```

顯示

```
...略...
doc-rfc-old-std: /usr/share/doc/RFC/links/rfc822.txt.gz
doc-rfc-old-std: /usr/share/doc/RFC/old/standard/rfc822.txt.gz
...略...
```

執行下面這個指令，查詢「[doc-rfc-old-std](http://packages.ubuntu.com/xenial/doc-rfc-old-std)」這個套件的相關資訊。

``` sh
$ apt-cache show doc-rfc-old-std
```

顯示

```
Package: doc-rfc-old-std
Priority: optional
Section: multiverse/doc
Installed-Size: 14973
Maintainer: Ubuntu Developers <ubuntu-devel-discuss@lists.ubuntu.com>
Original-Maintainer: Iustin Pop <iustin@debian.org>
Architecture: all
Source: doc-rfc
Version: 20150425-1
Replaces: doc-rfc (<< 20150425-1), doc-rfc-experimental (<< 20150425-1), doc-rfc-fyi-bcp (<< 20150425-1), doc-rfc-informational (<< 20150425-1), doc-rfc-misc (<< 20150425-1), doc-rfc-others (<< 20150425-1), doc-rfc-std (<< 20150425-1), doc-rfc-std-proposed (<< 20150425-1)
Breaks: doc-rfc (<< 20150425-1), doc-rfc-experimental (<< 20150425-1), doc-rfc-fyi-bcp (<< 20150425-1), doc-rfc-informational (<< 20150425-1), doc-rfc-misc (<< 20150425-1), doc-rfc-others (<< 20150425-1), doc-rfc-std (<< 20150425-1), doc-rfc-std-proposed (<< 20150425-1)
Filename: pool/multiverse/d/doc-rfc/doc-rfc-old-std_20150425-1_all.deb
Size: 15312088
MD5sum: 57c2279f1da75c40f697797d677482fc
SHA1: d44881ef9e88a1297a8eae7141e19972693be5a5
SHA256: 514d5089aa66448c7f1301f91228257efd7839bc2165f8caad6a19a30cdacb3c
Description-en: Old Standard RFCs
 RFC (Request for Comments) documents are a series of technical and
 organizational notes about the Internet. They are edited by the
 Internet Engineering Task Force (IETF).
 .
 This package includes the following categories:
 .
  * Obsoleted Standards
  * Obsoleted Draft Standards
  * Obsoleted Proposed Standards
Description-md5: e0e245fe19e303502c88b4ab0c59141d
Homepage: http://www.rfc-editor.org/
Bugs: https://bugs.launchpad.net/ubuntu/+filebug
Origin: Ubuntu

```

執行下面指令，安裝「[doc-rfc-old-std](http://packages.ubuntu.com/xenial/doc-rfc-old-std)」這個套件。

``` sh
$ sudo apt-get install doc-rfc-old-std
```


## update-notifier

執行

``` sh
$ apt-get source update-notifier
```

執行

``` sh
$ ls update-notifier-3.168.1/src/rfc822* -1
```

顯示

```
update-notifier-3.168.1/src/rfc822.c
update-notifier-3.168.1/src/rfc822.h
```
