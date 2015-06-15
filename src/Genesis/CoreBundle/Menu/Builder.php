<?php

namespace Genesis\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'genesis_core_default_index'));
        $menu->addChild('Sair', array('route' => 'fos_user_security_logout'));

//        // access services from the container!
//        $em = $this->container->get('doctrine')->getManager();
//        // findMostRecent and Blog are just imaginary examples
//        $blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

//        $menu->addChild('Latest Blog Post', array(
//                'route' => 'mongo',
//                'routeParameters' => array('id' => '1')
//            ));
//        $menu->addChild('Login', array('route' => 'login'));
        // create another menu item
//        $menu->addChild('About Me', array('route' => 'about'));
//        // you can also add sub level's to your menu's as follows
//        $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
}