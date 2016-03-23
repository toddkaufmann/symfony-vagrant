<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }

    // customizations:  use dirs inside the VM for cache, logs
    private $devDirRoot;
    private $vmRoot;
  public function __construct($environment, $debug) {
    parent::__construct($environment, $debug);
    error_log("AppKernel:  my __DIR__ is: " . __DIR__  . "  -- and file is " . __FILE__ );
    $this->vmRoot = dirname($_SERVER['SCRIPT_FILENAME']) . '/../app';
    error_log(" do i want?:  " . $this->vmRoot  );
    // http://symfony.com/doc/current/cookbook/configuration/override_dir_structure.html
    // use a different directory for apache v. 'app/console server:run' invocation
    if ( file_exists("/dev/shm") ) {
      // linux; maybe vagrant -- ram disk is faster for cache & logs
      $this->devDirRoot = "/dev/shm/" . getenv("USER") . '/';
    } else {
      // do we need USER to distinguish otherwise?  
      $this->devDirRoot = $this->rootDir . '/';  
    }
  }

    public function getRootDir()
    {
      // ended up hardcoding it
      // why does setting above not work ?
      //  $this->vmRoot; // __DIR__;
      return '/home/vagrant/symProject/app';
    }

    public function getCacheDir()
    {
      return $this->devDirRoot . '/cache/'.$this->getEnvironment();  // dirname(__DIR__)
    }

    // or is it easier for developer to just have this available in the vm ?
    public function getLogDir()
    {
        return $this->devDirRoot.'/logs';
    }



}
