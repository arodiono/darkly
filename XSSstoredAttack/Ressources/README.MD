## Stored XSS Attacks

[https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)](https://www.owasp.org/index.php/Cross-site_Scripting_(XSS))

DOM Based XSS (or as it is called in some texts, “type-0 XSS”) is an XSS attack wherein the attack payload is executed as a result of modifying the DOM “environment” in the victim’s browser used by the original client side script, so that the client side code runs in an “unexpected” manner. That is, the page itself (the HTTP response that is) does not change, but the client side code contained in the page executes differently due to the malicious modifications that have occurred in the DOM environment.

### Exploit

Open inspect in browser and change option value in select to > 10 then select this option

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