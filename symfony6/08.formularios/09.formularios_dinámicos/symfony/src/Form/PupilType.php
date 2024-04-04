<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
// entities
use App\Entity\Pupil;
use App\Entity\Subject;
// fields
use Symfony\Component\Form\Extension\Core\Type\TextType;
// Events
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class PupilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $pupil = $builder->getData();

        $builder->add('course');

        if (null === $pupil->getId()) {
            $builder->add('name', TextType::class);
        }
        if ($pupil->getId()) {
            $course = $pupil->getCourse();
            $builder->add('subjects', EntityType::class, array(
                'class' => Subject::class,
                'query_builder' => function (EntityRepository $er) use ($course) {
                    return $er->createQueryBuilder('subject')
                    ->innerJoin('subject.course', 'course')
                    ->andWhere('course = :course')
                    ->orderBy('subject.name', 'ASC')
                    ->setParameter('course', $course);
                },
                'multiple' => true,
                'choice_label' => 'name',
            ));
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pupil::class,
        ]);
    }
}
