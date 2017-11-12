<?php

namespace Dark\SushiServiceBundle\Services ;
use JMS\DiExtraBundle\Annotation as DI;
use Dark\SushiServiceBundle\Dao\PDO\MemoryDaoPdo ;
/**
 * @DI\Service("dark.sushi.memory.service")
 */
class MemoryService
{

    private $memoryDao;

    /**
     * @DI\InjectParams({
     *  "memoryDao" = @DI\Inject("dark.sushi.memory.dao")
     * })
     */
    public function __construct(MemoryDaoPdo $memoryDao) {
        $this->memoryDao = $memoryDao;
    }

    public function getAllImagesAndDetail(){

        return $this->memoryDao->getAllImagesAndDetail();
    }

}
