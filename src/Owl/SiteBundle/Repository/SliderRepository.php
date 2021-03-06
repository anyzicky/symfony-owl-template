<?php

namespace Owl\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SliderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SliderRepository extends EntityRepository
{
    public function getSlides()
    {
        $slide = $this->createQueryBuilder('b')
                      ->select('b')
                      ->addOrderBy('b.sort', 'ASC');

        return $slide->getQuery()->getResult();
    }
}
