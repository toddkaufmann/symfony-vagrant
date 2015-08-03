A very basic Vagrant config for running a very basic Symfony2 project.

The Symfony project here is just from 'symfony new symProject'

You can run outside (server:run) (should work), or use vagrant to start a vm.
It will access the files here.
*Most* basic config files are symlink'd out--it reflects the set I've needed in testing,
possibly you'll need to add more (manually, or see vagrant/vm-config/configure-app script).


TODO
 - how to change name symProject  ? it's in Vagrantfile, configure-app and configure-apache
 - symtest is the db name (by default:  not created).  but composer asks about it?
 - symvm vhost servername (but shouldn't matter, unless you want to config other vhosts)
 - composer complains about about parameters.yml file 
in vagrant config: 
x  - apache logfile name:  is symvm (but prefer 00default disable/enable, as someone did elsewhere? ?)
 - apache vhost ServerName is symvm.dev (is .dev acceptable ?)
? - change trunk to devroot
 - split shell into:  pkgs apache db(mysql/maria)(+ pdo)
 - debian instead of ubuntu (how much smaller?) (7.6 had issues -- php version)
 - ACLs instead of chown/chmod/uname
 -  get OUTSIDE_IP via ssh env
 - timezone is America/New_York, vm is still utc.
 - although you can set INSTALL_DB to Yes or not, still is set for maria.
 - php5-mysql is unconditional.

TODO: 
 parameters.yml?  (why not commit ?)

set port one place, allow env to override


____________________________________________
Messages seen:

deb7.6 vbox additions ?  missing.

"precise32":  

==> default: Checking for guest additions in VM...
    default: The guest additions on this VM do not match the installed version of
    default: VirtualBox! In most cases this is fine, 


    ==> default: puppet: unrecognized service
    ==> default: chef-client: unrecognized service
    ==> default: manual
    ==> default:  Removing any system startup links for /etc/init.d/puppet ...

maria vestige?:
    ==> default: dpkg-preconfigure: unable to re-open stdin: No such file or directory
does it too?
    ==> default: Get:3 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main php5-mysql i386 5.3.10-1ubuntu3.19 [73.4 kB]

SHOWSTOPPER -  php version.  Other install method could be implemented.


_______________________________________________________

TODO:
ssh 'check' script from outside, give a summary.
(? harness ?)
