#Cross-domain PHP session

What: Figure out how to use a session when requesting a script via Ajax that is on another domain as the browser document.

Why: Useful for modular development: To test a module in its original place from another project . (No need for another copy!)

Suppose this file resides on foo.com, and makes calls to a script
count.php on another domain, bar.com.
Cookies do not work in this cross-domain setting. The solution is to pass the session_id yourself.