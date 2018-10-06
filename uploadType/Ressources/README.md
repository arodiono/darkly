## Not specified uploaded files

### Exploit 

There is exploit at `index.php?page=upload` route. If we will try to upload some different files to this action, we can access internal server.

### How to Prevent
* Locate the Apache configuration files and included configuration files.
* Add the following line to the Configuration file so that Web Server Allow files with specifically approved file extensions such as "css,htm,html,js,pdf,txt,xml,xsl"
```apacheconfig
<FilesMatch "^.*\.(css|html?|js|pdf|txt|xml|xsl|gif|ico|jpe?g|png)$">
Order Deny,Allow
Allow from all
</FilesMatch>
```