<?php

namespace Owl\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Owl\SiteBundle\Entity\Service;

class Services implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $service1 = new Service();
        $service1->setTitle('Responsive Design');
        $service1->setDescr('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.');
        $service1->setSort('100');
        $service1->setIcon('icons/flatdesign.svg');
        $service1->setHref('http://www.fabianbentz.de/demo/owl/owl-theme.zip');
        $manager->persist($service1);

        $service2 = new Service();
        $service2->setTitle('Easy Customizable');
        $service2->setDescr('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.');
        $service2->setSort('200');
        $service2->setIcon('icons/customizable.svg');
        $service2->setHref('http://www.fabianbentz.de/demo/owl/owl-theme.zip');
        $manager->persist($service2);

        $service3 = new Service();
        $service3->setTitle('Porfolio');
        $service3->setDescr('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.');
        $service3->setSort('300');
        $service3->setIcon('icons/portfolio.svg');
        $service3->setHref('http://www.fabianbentz.de/demo/owl/owl-theme.zip');
        $manager->persist($service3);

        $service4 = new Service();
        $service4->setTitle('PHP Mail Form');
        $service4->setDescr('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.');
        $service4->setSort('400');
        $service4->setIcon('icons/mail.svg');
        $service4->setHref('http://www.fabianbentz.de/demo/owl/owl-theme.zip');
        $manager->persist($service4);


        $manager->flush();
    }
}