<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Cropperjs\Factory\CropperInterface;
use Symfony\UX\Cropperjs\Form\CropperType;

class CropperController extends AbstractController
{
    public const EXTERNAL_IMAGE = 'https://tinypng.com/images/social/website.jpg';

    #[Route("/", name: "cropper.local")]
    public function index(CropperInterface $cropper, Request $request): Response
    {
        $crop = $cropper->createCrop('image.jpg');
        $crop->setCroppedMaxSize(2000, 1500);

        $form = $this->createFormBuilder(['crop' => $crop])
            ->add('crop', CropperType::class, [
                'public_url' => 'image.jpg',
                'cropper_options' => [
                    'aspectRatio' => 2000 / 1500,
                ],
            ])
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the cropped image data (as a string)
            $crop->getCroppedImage();

            // Create a thumbnail of the cropped image (as a string)
            $crop->getCroppedThumbnail(200, 150);

            // ...
        }
        return $this->render('cropper/index.html.twig', [
            'controller_name' => 'CropperController',
            'form' => $form->createView(),
        ]);
    }

    #[Route("/external", name: "cropper.external")]
    public function external(CropperInterface $cropper, Request $request): Response
    {
        $crop = $cropper->createCrop(self::EXTERNAL_IMAGE);
        $crop->setCroppedMaxSize(2000 , 2000);

        $path = self::EXTERNAL_IMAGE;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $form = $this->createFormBuilder(['crop' => $crop])
            ->add('crop', CropperType::class, [
                'public_url' => $base64 ,
                'cropper_options' => [
                    'aspectRatio' => 150 / 150,
                ],
            ])
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the cropped image data (as a string)
            $crop->getCroppedImage();

            // Create a thumbnail of the cropped image (as a string)
            $crop->getCroppedThumbnail(200, 150);

            // ...
        }
        return $this->render('cropper/index.html.twig', [
            'controller_name' => 'CropperController',
            'form' => $form->createView(),
        ]);
    }

}
