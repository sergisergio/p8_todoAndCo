<?php

namespace App\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    /**
     * @Route("/users", name="user_list")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function listUser()
    {
        // return $this->render('user/list.html.twig', ['users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll()]);
    }

    /**
     * @Route("/users/create", name="user_create")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function createUser(Request $request)
    {
        // $user = new User();

        // $form = $this->createForm(UserType::class, $user);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $em = $this->getDoctrine()->getManager();

        //         $user->setRole($form->getData()->getRole());

        //     $em->persist($user);
        //     $em->flush();

        //     $this->addFlash('success', "L'utilisateur a bien été ajouté.");

        //     return $this->redirectToRoute('user_list');
        // }

        // return $this->render('user/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/users/{id}/edit", name="user_edit")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function editUser(/*User $user, */Request $request)
    {
        // $form = $this->createForm(UserType::class, $user);

        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
        //     $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
        //     $user->setPassword($password);

        //     $this->getDoctrine()->getManager()->flush();

        //     $this->addFlash('success', "L'utilisateur a bien été modifié");

        //     return $this->redirectToRoute('user_list');
        // }

        // return $this->render('user/edit.html.twig', ['form' => $form->createView(), 'user' => $user]);
    }
}
