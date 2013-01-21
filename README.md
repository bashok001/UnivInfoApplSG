# University Info Application

This is the source code for a university information website - a resource set up to allow students to get real-time information / feedback about universities around globe.

You can either install UnivApp on an existing PHP platform, or set up a new WAMP install

*Notes:*

- HTTP and SSH ports on the WAMP are forwarded to localhost (22 -> 2222, 80 -> 8080)
- You can develop by editing the files you cloned in the IDE of you choice.

## Quick Start - Existing Platforms

1. Create a vhost entry for the site. The docroot should be `/src`.

2. Create directories for user-added content.

        mkdir src/system/cache/ctokens && chown apache:apache src/system/cache/ctokens

   (or whatever user and group your web server runs as)

3. Create a MySQL database with username and password.
   Use a database name of 'univapp'

4. Input all relevant data

### Unit Tests

There are some tests that needs to be set up, preferably PHPUnit; Any help on this front will be appreciated.

