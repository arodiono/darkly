## Broken Authentication

https://www.owasp.org/index.php/Broken_Authentication_and_Session_Management

Credential stuffing, the use of lists of known
passwords, is a common attack. If an application does not
implement automated threat or credential stuffing protections, the
application can be used as a password oracle to determine if the
credentials are valid.

### Exploit

Use `php bruteforce.php <ip>` to brute admin password

### How to Prevent
* Where possible, implement multi-factor authentication to
prevent automated, credential stuffing, brute force, and stolen
credential re-use attacks.
* Do not ship or deploy with any default credentials, particularly
for admin users.
* Implement weak-password checks, such as testing new or
changed passwords against a list of the top 10000 worst
passwords.
* Align password length, complexity and rotation policies with
NIST 800-63 B's guidelines in section 5.1.1 for Memorized
Secrets or other modern, evidence based password policies.
* Ensure registration, credential recovery, and API pathways are
hardened against account enumeration attacks by using the
same messages for all outcomes.
* Limit or increasingly delay failed login attempts. Log all failures
and alert administrators when credential stuffing, brute force, or
other attacks are detected.
* Use a server-side, secure, built-in session manager that
generates a new random session ID with high entropy after
login. Session IDs should not be in the URL, be securely stored
and invalidated after logout, idle, and absolute timeouts.