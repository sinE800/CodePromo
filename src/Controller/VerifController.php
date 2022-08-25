<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class VerifController extends AbstractController
{


    #[Route('/verif', name: 'app_verif')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {


//        $user = $this->getDoctrine()->getRepository(User::class)->findAll([],['created_at' => 'desc']);

        if ($request->isMethod('POST')) {
        $code = $_POST['code'] ;
        $user = $doctrine->getRepository(User::class)->findBy(['code'=> $code]);

            // Verifie si le code existe
            if (!$user) {
                $error = "oui";
                return $this->render('verif/index.html.twig', [
                    'error' => $error
                ]);
            }

            return $this->render('verif/index.html.twig', [
                'user' => $user,
            ]);
        }
        return $this->render('verif/index.html.twig', [
        ]);


    }
    #[Route('/verif/{code}', name: 'app_verif2')]

    public function activateCode(ManagerRegistry $doctrine, EntityManagerInterface $em, UserRepository $userRepository, $code):Response
    {
//        $code = $_POST['code'] ;

        $user = $doctrine->getRepository(User::class)->findOneBy(['code'=> $code]);
        $user->setCodeActivated('Oui');
        $em->flush();

        return $this->render('verif/verif.html.twig', [
            'user' => $user,

        ]);
    }


}


//    #[Route('/verif/code', name: 'app_verif2')]
//    public function show( UserRepository $userRepository,string $code): Response
//    {
//
//        $code = $_GET['code'] ;
//        $user = $userRepository->findOneBy($code);
        // Verify user id
//        if (!$user) {
//            throw new AuthenticationException("Le code {$code} n'existe pas.");
//        }

//        $user = $this->$userRepository
//            ->findOneBy([
//                'code' => $_GET['code']
//            ]);


//        if ($product) {
//            throw $this->createNotFoundException(
//                "Pas d'utilisateur trouver pour ".$code
//            );
//        }

//        $user = $this->getDoctrine()->getRepository(User::class)->findAll([],['created_at' => 'desc']);


//        return $this->render('verif/index.html.twig', [
//            'code' => $code
//        ]);
//    }
