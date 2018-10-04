## Path Traversal
https://www.owasp.org/index.php/Path_Traversal


A path traversal attack (also known as directory traversal) aims to access files and directories that are stored outside the web root folder. By manipulating variables that reference files with “dot-dot-slash (../)” sequences and its variations or by using absolute file paths, it may be possible to access arbitrary files and directories stored on file system including application source code or configuration and critical system files. It should be noted that access to files is limited by system operational access control (such as in the case of locked or in-use files on the Microsoft Windows operating system).

This attack is also known as “dot-dot-slash”, “directory traversal”, “directory climbing” and “backtracking”.

### Exploit

`<server>/?page=../../../../../../../etc/passwd`

### How to Prevent

* Prefer working without user input when using file system calls
* Use indexes rather than actual portions of file names when templating or using language files (ie value 5 from the user submission = Czechoslovakian, rather than expecting the user to return “Czechoslovakian”)
* Ensure the user cannot supply all parts of the path – surround it with your path code
* Validate the user’s input by only accepting known good – do not sanitize the data
* Use chrooted jails and code access policies to restrict where the files can be obtained or saved to
