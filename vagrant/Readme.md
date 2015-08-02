
# A minimal Vagrant box for Symfony project

Vagrant lets you reproducibly create vritual machines, 
allowing everyone to work in a similar, if not the same environment.

Project files in symfony folder are directly accessible from the virtual machine,
so you can work using whatever editor and tools you are comfortable with.


## Instructions:

1. Get & install  Vagrant for your platform  (http://vagrantup.com)
2. Run 'vagrant up' in this directory.
3. Wait, and in a few minutes, you'll have a box with everything installed and configured 
   (first time may take a while for initial box download).

Server should start up on port 8633  (*):

http://localhost:8633/map/candidate/login/    to match what is currently at Amazon.

http://localhost:8633/       to very limited Symfony functionality (basic login at least).

*NOTE:*
http://localhost:8633/map/   is really slow and will timeout.
This is because it currently makes over 2000 filesystem stat()'s and the vagrant filesystem is much slower.
(Can we cache to a file once (like during svn update), and use this if it exists;
 remove the file to not use cache (on other systems)?)



The virtual machine has reference to the svn/trunk folder through the path '/trunk'


Report problems/errors to Todd.

## Other commands:

vagrant halt    -- shutdown VM.
vagrant suspend -- put the VM to sleep.
vagrant ssh     -- log in to VM using ssh.
vagrant destroy -- remove all traces of VM.
vagrant up      -- start up existing or create a new instance


Occasionally  'vagrant up' hangs on my machine while trying to connect.
^C, 'vagrant destroy' then 'vagrant up' again.



##  Questions

Many. 
This is mostly minimal to get working on my machine.

Some of the AWS config could be moved back in here ?
Untested with Vagrant AWS provider.
ESXi provider may be useful for skymark.

The virtual machine has reference to the project folder through the path '/trunk'
Perhaps this is batter than '/home/symtest' for deployment ?

______
# footnotes

*1 - port is in Vagrantfile, 