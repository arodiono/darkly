## Not Restricted access to .hidden folder

### Exploit 

Go to `<server>/robots.txt` and find disallow roots.

Go to `/.hidden` and download you will see a lot of folders and file `README`.

Now you have to run command `sh run.sh` and after installing all necessary packages input IP of `<server>`.

Wait 3-5 minutes and you will see all unique strings in `README` files.

### How to Prevent
* Locate the Apache configuration files and included configuration files.
* Add the following line to the Configuration file so that Web Server Allow files with specifically approved file extensions such as "css,htm,html,js,pdf,txt,xml,xsl"
```apacheconfig
<FilesMatch "^.*\.(css|html?|js|pdf|txt|xml|xsl|gif|ico|jpe?g|png)$">
Order Deny,Allow
Allow from all
</FilesMatch>
```