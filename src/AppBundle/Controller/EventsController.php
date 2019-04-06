<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Events;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class EventsController extends Controller
{
   /**
    * @Route("/", name="event_list")
    */
   public function eventAction()
   {
     $events = $this->getDoctrine()->getRepository('AppBundle:Events')->findAll();
       // replace this example code with whatever you need
     return $this->render('events/index.html.twig', array('events'=>$events));
   }
       /**
    * @Route("/events/create", name="events_create")
    */
       public function createAction(Request $request)
       {
       // Here we create an object from the class that we made 
         $event = new Events;

         /* Here we will build a form using createFormBuilder and inside this function we will put our object and then we write add then we select the input type then an array to add an attribute that we want in our input field */
         $form = $this->createFormBuilder($event)
         ->add('eventName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventDate', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventImage', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventCapacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventEmail', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventPhone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventAddress', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventZIP', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventCity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventURL', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('eventType', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
         ->getForm();
         $form->handleRequest($request);


         /* Here we have an if statement, if we click submit and if  the form is valid we will take the values from the form and we will save them in the new variables */
         if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $name = $form['eventName']->getData();
           $date = $form['eventDate']->getData();
           $image = $form['eventImage']->getData();
           $capacity = $form['eventCapacity']->getData();
           $email = $form['eventEmail']->getData();
           $phone = $form['eventPhone']->getData();
           $address = $form['eventAddress']->getData();
           $zip = $form['eventZIP']->getData();
           $city = $form['eventCity']->getData();
           $url = $form['eventURL']->getData();
           $type = $form['eventType']->getData();
           
// Here we will get the current date
           // $now = new\DateTime('now');


           /* these functions we bring from our entities, every column have a set function and we put the value that we get from the form */
           $event->setEventName($name);
           $event->setEventDate($date);
           $event->setEventImage($image);
           $event->setEventCapacity($capacity);
           $event->setEventEmail($email);
           $event->setEventPhone($phone);
           $event->setEventAddress($address);
           $event->setEventZIP($zip);
           $event->setEventCity($city);
           $event->setEventURL($url);
           $event->setEventType($type);
           $em = $this->getDoctrine()->getManager();
           $em->persist($event);
           $em->flush();
           $this->addFlash(
             'notice',
             'Event Added'
           );
           return $this->redirectToRoute('event_list');
         }
         /* now to make the form we will add this line form->createView() and now you can see the form in create.html.twig file  */
         return $this->render('events/create.html.twig', array('form' => $form->createView()));
       }
           /**
    * @Route("/events/details/{id}", name="events_details")
    */
           public function detailsAction($id)
           {
            $events = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);
            return $this->render('events/details.html.twig', array('events' => $events));
          }

           /**
    * @Route("/events/edit/{id}", name="events_edit")
    */
           public function editAction($id, Request $request){
            $event = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);
// $now = new\DateTime('now');

            /* Now we will use set functions and inside this set functions we will bring the value that is already exist using get function for example we have setName() and inside it we will bring the current value and use it again */
            $event->setEventName($event->getEventName());
            $event->setEventDate($event->getEventDate());
            $event->setEventImage($event->getEventImage());
            $event->setEventCapacity($event->getEventCapacity());
            $event->setEventEmail($event->getEventEmail());
            $event->setEventPhone($event->getEventPhone());
            $event->setEventAddress($event->getEventAddress());
            $event->setEventZIP($event->getEventZIP());
            $event->setEventCity($event->getEventCity());
            $event->setEventURL($event->getEventURL());
            $event->setEventType($event->getEventType());

            /* Now when you type createFormBuilder and you will put the variable todo the form will be filled of the data that you already set it */
            $form = $this->createFormBuilder($event)
            ->add('eventName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventDate', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventImage', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventCapacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventEmail', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventPhone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventAddress', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventZIP', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventCity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventURL', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventType', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm();
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
           //fetching data
             $name = $form['eventName']->getData();
             $date = $form['eventDate']->getData();
             $image = $form['eventImage']->getData();
             $capacity = $form['eventCapacity']->getData();
             $email = $form['eventEmail']->getData();
             $phone = $form['eventPhone']->getData();
             $address = $form['eventAddress']->getData();
             $zip = $form['eventZIP']->getData();
             $city = $form['eventCity']->getData();
             $url = $form['eventURL']->getData();
             $type = $form['eventType']->getData();
             $em = $this->getDoctrine()->getManager();
             $events = $em->getRepository('AppBundle:Events')->find($id);
             $event->setEventName($name);
             $event->setEventDate($date);
             $event->setEventImage($image);
             $event->setEventCapacity($capacity);
             $event->setEventEmail($email);
             $event->setEventPhone($phone);
             $event->setEventAddress($address);
             $event->setEventZIP($zip);
             $event->setEventCity($city);
             $event->setEventURL($url);
             $event->setEventType($type);

             $em->flush();
             $this->addFlash(
               'notice',
               'Event Updated'
             );
             return $this->redirectToRoute('event_list');
           }
           return $this->render('events/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
         }

           /**
    * @Route("/events/delete/{id}", name="events_delete")
    */

         public function deleteAction($id){
          $em = $this->getDoctrine()->getManager();
          $event = $em->getRepository('AppBundle:Events')->find($id);
          $em->remove($event);
          $em->flush();
          $this->addFlash(
           'notice',
           'Event Removed'
         );
          return $this->redirectToRoute('event_list');
        }
      }



