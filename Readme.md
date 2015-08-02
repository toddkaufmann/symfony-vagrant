A very basic Vagrant config for running a very basic Symfony2 project.

The Symfony project here is just from 'symfony new symProject'

You can run outside (server:run), or use vagrant to start a vm.
It will access the files here.


TODO
 - how to change name symProject  ? it's in Vagrantfile, configure-app and configure-apache
 - symtest is the db name (by default:  not created).  but composer asks about it?
 - symvm vhost servername (but shouldn't matter, unless you want to config other vhosts)
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
 - timezone is America/New_York, vm is still utc.
 - although you can set INSTALL_DB to Yes or not, still is set for maria.
 - php5-mysql is unconditional.

TODO: 
 parameters.yml?  (why not commit ?)

set port one place, allow env to override


____________________________________________
Messages seen:

deb7.6 vbox additions ?  missing.


ubuntu  -- almost





"precise32":  


==> default: Checking for guest additions in VM...
    default: The guest additions on this VM do not match the installed version of
    default: VirtualBox! In most cases this is fine, 


SHOULD BE FIXED:  i thought INSTALL_DB no ? 

    ==> default: Building dependency tree...
    ==> default: Reading state information...
    ==> default: E
    ==> default: : 
    ==> default: Unable to locate package mariadb-server
    ==> default: ================================= TODO: set password
    ==> default: puppet: unrecognized service
    ==> default: chef-client: unrecognized service
    ==> default: manual
    ==> default:  Removing any system startup links for /etc/init.d/puppet ...

maria versitge?:
    ==> default: dpkg-preconfigure: unable to re-open stdin: No such file or directory
does it too?
    ==> default: Get:3 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main php5-mysql i386 5.3.10-1ubuntu3.19 [73.4 kB]

FIXED - no curl,  no symfony

    ==> default: ldconfig deferred processing now taking place
    ==> default: sudo
    ==> default: : 
    ==> default: curl: command not found
    ==> default: chmod: 
    ==> default: cannot access `/usr/local/bin/symfony': No such file or directory
    ==> default: [Date]
    ==> default: ; Defines the default timezone used by the date functions


SHWOSTOPPER -  php version


_______________________________________________________

TODO:
ssh 'check' script from outside, give a summary.
(? harness ?)
