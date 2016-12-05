<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    /**
     * @return Response
     */
    public function firstAction()
    {
        return $this->render('BlogBundle:Index:first.html.twig', [
            'flag' => true,
            'items' => [
                [
                    'id' => 1,
                    'name' => 'test 1',
                    'value' => 434.344,
                    'active' => true,
                ],
                [
                    'id' => 2,
                    'name' => 'test 2',
                    'value' => 65.43,
                    'active' => false,
                ],
                [
                    'id' => 3,
                    'name' => 'test 3',
                    'value' => 7.344,
                    'active' => true,
                ],
                [
                    'id' => 3,
                    'name' => 'test 4',
                    'value' => 2.98,
                    'active' => true,
                ],
            ],
        ]);
    }

    /**
     * @return Response
     */
    public function secondAction()
    {

        return $this->render('BlogBundle:Index:second.html.twig', [

        ]);
    }
}
