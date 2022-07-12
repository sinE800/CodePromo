<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\RegisterType;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @throws \Exception
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    #[Route('/', name: 'app_base')]
    public function index(Request $request, EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        // just set up a fresh $task object (remove the example data)
        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

//        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
//            $task = $form->getData();


            $user->setGain($_POST['Gain']);


            $user->setCode(strtoupper(bin2hex((random_bytes(3)))));
            $user->setCodeActivated("no");
            $user->setCreationTime(new \DateTime('now', new DateTimeZone('Europe/Paris')));
//            dd($user);
            $em->persist($user);
            $em->flush();
            $email = (new TemplatedEmail())
                ->to($user->getMail())
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Votre code promo est arrivé !')
                ->htmlTemplate('mail/email.html.twig')
                ->context([
                    'firstname' => $user->getFirstname(),
                    'name' => $user->getName(),
                    'mail' => $user->getMail(),
                    'code' => $user->getCode(),
                ]);

//            $mailer->send($email);


            return $this->renderForm('base/end.html.twig', [
                'form' => $form,
            ]);
        }



        return $this->renderForm('base/index.html.twig', [
            'form' => $form,
        ]);
    }


//    #[Route('/', name: 'app_base')]
//    public function roue(Request $request, EntityManagerInterface $em, MailerInterface $mailer): Response
//    {
//        return $this->renderForm('base/index.html.twig', [
//            'form' => $form,
//        ]);
//    }
}

