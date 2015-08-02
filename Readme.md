A very basic Vagrant config for running a very basic Symfony2 project.

The Symfony project here is just from 'symfony new symProject'

You can run outside (server:run), or use vagrant to start a vm.
It will access the files here.

TODO
with vagrant config: 
x - change port
x  - apache logfile name:  symvm _> symvm (but prefer 00default remove and replace ?)
    server name is symvm.dev (is .dev acceptable ?)
? - change trunk to devroot;  trunk/html ..
  leave /trnk
x - change linking accordingly
 - split shell into:  pkgs apache db(mysql/maria)(+ pdo)
 - debian instead of ubuntu (how much smaller?)
 - ACLs instead of chown/chmod/uname
 -  get OUTSIDE_IP via ssh env

TODO: 
 parameters.yml?  (why not commit ?)

set port one place, allow env to override