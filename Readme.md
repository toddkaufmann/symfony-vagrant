A very basic Vagrant config for running a very basic Symfony2 project.

The Symfony project here is just from 'symfony new symProject'

You can run outside (server:run), or use vagrant to start a vm.
It will access the files here.

with vagrant: 
 - change port
 - change trunk to devroot;  trunk/html ..
 - change linking accordingly
 - split shell into:  pkgs apache db(mysql/maria)(+ pdo)
 - debian instead of ubuntu (how much smaller?)
 - ACLs instead of chown/chmod/uname
 - 

TODO: 
 parameters.yml?  (why not commit ?)

set port one place, allow env to override