# testhttpverbs
a tiny php script to test your server to see if it handles all http verbs or not

## Using Verbs 
Using is not always required nor recommended (controversial) but sometimes you need to, and you need to know your server (ie an IIS implementation of php) can handle them.  

This little script will tell you if your server is configured to do so. 

## For the shared hosting developer
IIS in shared hosting can be tricky - particularly if your codebase uses PHP - a language that was later tacked on to the IIS stack. (One could argue anything since PERL has been added to any HTTP server.)

Anyway - if you are using PHP and must host it on IIS - this little code will tell you if it's ready to go or if tweaking is needed. 

## Docs if you need tweaking
If your IIS is using Plesk then this article may help:

https://support.plesk.com/hc/en-us/articles/12376918830743-How-to-enable-the-use-GET-HEAD-POST-PUT-DELETE-PATCH-requests-on-a-Plesk-for-Windows-Server


