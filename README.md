# Sphinx Generate Config PHP (sgc.php)

## What is it?
A CLI PHP script for generating [Sphinx](http://www.sphinxsearch.com/ "Sphinx search") config files. Developed at [Popcom d.o.o.](http://www.popcom.si/ "Popcom d.o.o. - spletni mediji") where we need a more efficient way of writing Sphinx config files.
We have a lot of websites that are localized versions of the same website, and so have the same code base, but use different databases (with the same structure). Writing Sphinx config files for all this version soon became tedious and error prone. So I wrote this little tools, where you define indexes and then it generates config files for all websites.

## How to use it?
Look at "sphinxconfig.php" for an example config file where you define your indexes&sources and define hosts (web pages) that use those sources&indexes. Then run php sgc.php configname.php

## License
Do whatever you want with this.