## Open Redirect

https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet

Unvalidated redirects and forwards are possible when a web application accepts untrusted input that could cause the web application to redirect the request to a URL contained within untrusted input. By modifying untrusted URL input to a malicious site, an attacker may successfully launch a phishing scam and steal user credentials. Because the server name in the modified link is identical to the original site, phishing attempts may have a more trustworthy appearance. Unvalidated redirect and forward attacks can also be used to maliciously craft a URL that would pass the application’s access control check and then forward the attacker to privileged functions that they would normally not be able to access.

Safe URL

```php
 header("Location: http://www.mysite.com/");
```

Dangerous URL

```php
 $redirect_url = $_GET['url'];
 header("Location: " . $redirect_url);
```

## Exploit

`<server>/index.php?page=redirect&site=evil.com`

### How to Prevent

* Simply avoid using redirects and forwards.
* If used, do not allow the url as user input for the destination. This can usually be done. In this case, you should have a method to validate URL.
* If user input can’t be avoided, ensure that the supplied value is valid, appropriate for the application, and is authorized for the user.
* It is recommended that any such destination input be mapped to a value, rather than the actual URL or portion of the URL, and that server side code translate this value to the target URL.
* Sanitize input by creating a list of trusted URL's (lists of hosts or a regex).
* Force all redirects to first go through a page notifying users that they are going off of your site, and have them click a link to confirm.