## Reflected XSS Attacks

[https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)](https://www.owasp.org/index.php/Cross-site_Scripting_(XSS))

### Exploit

Go to `<server>/index.php?page=recover` and open inspector. Find hidden input with name="mail" and change value to your email. Then submit form

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