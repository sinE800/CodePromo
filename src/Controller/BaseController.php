<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_base')]
    public function index(): Response
    {
        // just set up a fresh $task object (remove the example data)
        $task = new User();

        $form = $this->createForm(RegisterType::class, $task);

//        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database

            return $this->renderForm('base/end.html.twig');
        }

        return $this->renderForm('base/index.html.twig', [
            'form' => $form,
        ]);
    }
}
