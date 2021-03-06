<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use App\Form\ContactType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form_ok = false;

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datas = $form->getData();

            if ($datas['firstname'] == '') {
                $content = 'De : ' . $datas['name'] . PHP_EOL;
                $content .= 'Email : ' . $datas['from'] . PHP_EOL;
                $content .= 'Téléphone : ' . $datas['phone'] . PHP_EOL . PHP_EOL;

                $content .= $datas['message'];

                $message = (new \Swift_Message('Contact depuis jeremy-dutheil.fr'))
                    ->setFrom('dutheil.jeremy@gmail.com')
                    ->setTo('dutheil.jeremy@gmail.com')
                    ->setReplyTo($datas['from'])
                    ->setBody(
                        $content,
                        'text/plain'
                    );

                $mailer->send($message);
            }

            $form_ok = true;
        }


        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
            'form_ok' => $form_ok,
        ]);
    }

    /**
     * @Route("/contact/form", name="contact_form")
     */
    public function form(Request $request, \Swift_Mailer $mailer) {
        $form_ok = false;

        $form = $this->createForm(ContactType::class, null, [
            'action' => $this->generateUrl('contact_form')
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datas = $form->getData();

            $content = 'De : ' . $datas['name'] . PHP_EOL;
            $content .= 'Email : ' . $datas['from'] . PHP_EOL;
            $content .= 'Téléphone : ' . $datas['phone'] . PHP_EOL . PHP_EOL;

            $content .= $datas['message'];

            $message = (new \Swift_Message('Contact depuis jeremy-dutheil.fr - Popup de sortie'))
                ->setFrom('dutheil.jeremy@gmail.com')
                ->setTo('dutheil.jeremy@gmail.com')
                ->setReplyTo($datas['from'])
                ->setBody(
                    $content,
                    'text/plain'
                );

            $mailer->send($message);
            $form_ok = true;
        }

        return $this->render('contact/form.html.twig', [
            'form' => $form->createView(),
            'form_ok' => $form_ok
        ]);
    }
}
