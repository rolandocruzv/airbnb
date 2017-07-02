<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class RoomsController extends Controller
{
    
    /**
     * @Route("/rooms/myrooms", name="rooms_my")
     */
    public function roomsMyAction(Request $request)
    {
        // replace this example code with whatever you need
        $room = '';
        return $this->render('app/rooms/view.html.twig', array(
            'room'=>$room
        ));
    }
    
    
    /**
     * @Route("/rooms/myrooms/{id}", name="rooms_my_edit", requirements={"id" = "\d+"})
     */
    public function roomsEditAction(Request $request)
    {
        $room = '';
        return $this->render('app/rooms/edit.html.twig', array(
            'room'=>$room
        ));
    }
    
    
    /**
     * @Route("/rooms/list", name="rooms_list")
     */
    public function roomsListAction(Request $request)
    {
        // replace this example code with whatever you need
        $rooms = ['1','2'];
        return $this->render('app/rooms/list.html.twig', array(
            'rooms'=>$rooms
        ));
    } 
 
    
    /**
     * @Route("/rooms/{names}", name="rooms_view")
     */
    public function roomsViewAction(Request $request)
    {
        $room = '';
        return $this->render('app/view.html.twig', array(
            'room'=>$room
        ));
    }
    
    
    
    
}
