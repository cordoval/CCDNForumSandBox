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
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),

			new EWZ\Bundle\RecaptchaBundle\EWZRecaptchaBundle(),
			new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
			new FOS\UserBundle\FOSUserBundle(),
			new FOS\FacebookBundle\FOSFacebookBundle(),
			
			new CCDNComponent\CrumbTrailBundle\CCDNComponentCrumbTrailBundle(),
		    new CCDNComponent\CommonBundle\CCDNComponentCommonBundle(),
		    new CCDNComponent\BBCodeBundle\CCDNComponentBBCodeBundle(),
			new CCDNComponent\DashboardBundle\CCDNComponentDashboardBundle(),
			new CCDNComponent\AttachmentBundle\CCDNComponentAttachmentBundle(),

            new CCDNMessage\MessageBundle\CCDNMessageMessageBundle(),	

			new CCDNForum\ForumBundle\CCDNForumForumBundle(),
            new CCDNForum\AdminBundle\CCDNForumAdminBundle(),
            new CCDNForum\ModeratorBundle\CCDNForumModeratorBundle(),

            new CCDNUser\AdminBundle\CCDNUserAdminBundle(),
            new CCDNUser\UserBundle\CCDNUserUserBundle(),
            new CCDNUser\ProfileBundle\CCDNUserProfileBundle(),
            new CCDNUser\MemberBundle\CCDNUserMemberBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
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
