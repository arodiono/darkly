## Not Restricted access to .htpasswd file

### Exploit 

Go to `<server>/robots.txt` and find disallow roots

Go to `/whatever` and download `.htpasswd`
```apacheconfig
root:8621ffdbc5698829397d97767ac13db3
```
Decrypt md5 to plain text `8621ffdbc5698829397d97767ac13db3` > `dragon`

Login with credentials `/admin`

### How to Prevent
* Locate the Apache configuration files and included configuration files.
* Add the following line to the Configuration file so that Web Server Allow files with specifically approved file extensions such as "css,htm,html,js,pdf,txt,xml,xsl"
```apacheconfig
<FilesMatch "^.*\.(css|html?|js|pdf|txt|xml|xsl|gif|ico|jpe?g|png)$">
Order Deny,Allow
Allow from all
</FilesMatch>
```