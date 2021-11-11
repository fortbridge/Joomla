# Joomla full compromise chain

Full write-up: https://www.fortbridge.co.uk/advisories/joomla-password-reset-vulnerability-and-stored-xss-for-full-compromise/

Steps:

1) Setup an index.php script on your attacker host which will capture the password reset token and reset the admin's password

2) Run the python script which will initiate the password reset process

3) Once logged in as an admin whitelist the ".html" extension and configure the variables at the top of the XSS exploit

4) upload the .html file containining the XSS and target one of the Super Admins. You can send the link via private message, embedded somewhere on the website etc.

