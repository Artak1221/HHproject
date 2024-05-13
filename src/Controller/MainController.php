<?php

namespace App\Controller;

use App\Form\TranslationFormType;
use App\Repository\MetaRepository;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/{_locale}', name: 'page_home', requirements: ['_locale' => 'en|ru|hy'], defaults: ['_locale' => 'ru'])]
    public function index(MetaRepository $metaRepository)
    {
        return $this->render('@web/page/index.html.twig');
    }

    #[Route('{_locale}/check_form', name: 'page_form')]
    public function checkForm(Request $request)
    {
        $form = $this->createForm(TranslationFormType::class);
        $form->handleRequest($request);

        return $this->render('@web/translation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}