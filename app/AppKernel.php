<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [

            // Symfony Bundles
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),

            // Doctrine Bundles
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),

            // Sensio Bundles
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            // Tapestry Bundles
            new Tapestry\AdminBundle\TapestryAdminBundle(),
            new Tapestry\ArticleBundle\TapestryArticleBundle(),
            new Tapestry\BlogBundle\TapestryBlogBundle(),
            new Tapestry\CoreBundle\TapestryCoreBundle(),
            new Tapestry\DesignBundle\TapestryDesignBundle(),
            new Tapestry\ForumBundle\TapestryForumBundle(),
            new Tapestry\HostingBundle\TapestryHostingBundle(),
            new Tapestry\UserBundle\TapestryUserBundle(),

        ];

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
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
