<?php

namespace Dark\SushiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Dark\SushiServiceBundle\Util\DarkSushiConstants as ZungleeConstant;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Description of MemoryController
 *
 * @author Ankitesh Kushwaha
 */
class MemoryController extends BaseController
{

    /**
     * @DI\Inject("dark.sushi.memory.service")
     * @var \Dark\SushiServiceBundle\Services\MemoryService
     */
    public $memoryService;

     /**
     * @Route("/memories",
     * name="memories")
     */
    public function memoryPage(){
        $param =array();
        $param  = $this->memoryService->getAllImagesAndDetail();
        return $this->renderView(ZungleeConstant::MEMORY_PAGE,$param);
    }
}
