<?php

namespace Owl\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Owl\SiteBundle\Entity\Slider;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $slide1 = new Slider();
        $slide1->setTitle('OWL FLAT ONE PAGE PORTFOLIO');
        $slide1->setDescr('RESPONSIVE WEBSITE TEMPLATE');
        $slide1->setSort('100');
        $slide1->setImage('logo.svg');
        $manager->persist($slide1);

        $slide2 = new Slider();
        $slide2->setTitle('OPTIMIZED FOR MOBIL DEVICES');
        $slide2->setDescr('');
        $slide2->setSort('200');
        $slide2->setImage('flexslider/image1.png');
        $manager->persist($slide2);

        $slide3 = new Slider();
        $slide3->setTitle('YOU CAN ADD IMAGES AND TEXT TO SLIDER');
        $slide3->setDescr('');
        $slide3->setSort('300');
        $slide3->setImage('flexslider/image1.png');
        $manager->persist($slide3);

        $slide4 = new Slider();
        $slide4->setTitle('MODERN FLAT ICONS');
        $slide4->setDescr('');
        $slide4->setSort('400');
        $slide4->setImage('flexslider/image1.png');
        $manager->persist($slide4);
        
        
        $manager->flush();
    }
}