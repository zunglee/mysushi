<?php

namespace Dark\SushiServiceBundle\Dao\PDO;

use Dark\SushiServiceBundle\Entity\MemoryImage;
use Symfony\Component\HttpFoundation\Response;
use JMS\DiExtraBundle\Annotation as DI;
use Doctrine\ORM\EntityManager;
/**
 * @DI\Service("dark.sushi.memory.dao")
 */
class MemoryDaoPdo
{
    //em -> entity manager
    private $em;

    /**
     * @DI\InjectParams({
     *    "em" = @DI\Inject("doctrine.orm.entity_manager")
     * })
     */
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function getAllImagesAndDetail(){
         $repository = $this->em->getRepository('Dark\SushiServiceBundle\Entity\MemoryImage');
         $products = $repository->findAll();
         return $products;
    }


}
