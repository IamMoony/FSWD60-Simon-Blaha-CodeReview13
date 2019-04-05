<?php
namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class EventsController extends Controller
{
   /**
    * @Route("/event", name="events")
    */
   public function eventAction()
   {
       return $this->render('events/index.html.twig');
   }
       /**
    * @Route("/events/create", name="events_create")
    */
   public function createAction(Request $request)
   {
       return $this->render('events/create.html.twig');
   }
           /**
    * @Route("/events/details/{id}", name="events_details")
    */
   public function detailsAction($id)
   {
       return $this->render('events/details.html.twig');
   }
  
           /**
    * @Route("/events/edit/{id}", name="events_edit")
    */
   public function editAction($id, Request $request)
   {
       return $this->render('events/edit.html.twig');
   }
}

?>