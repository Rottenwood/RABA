<?php

namespace Rottenwood\BookingBundle\Controller;

use Rottenwood\Hypermedia\Action;
use Rottenwood\Hypermedia\ActionCollection;
use Rottenwood\Hypermedia\Data;
use Rottenwood\Hypermedia\HTTPCode;
use Rottenwood\Hypermedia\HTTPMethod;
use Rottenwood\Hypermedia\HypermediaData;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RestController extends Controller
{
    /**
     * @Route("/", name="rest_index")
     * @Route("/list")
     * @Method("GET")
     * @return Response
     */
    public function indexAction()
    {
        $actions = new ActionCollection([new Action('list', $this->generateUrl('rest_index'), HTTPMethod::GET)]);
        $data = new Data();
        $result = new HypermediaData($actions, $data);

        return new Response($result->getJson(), HTTPCode::OK);
    }
}
