<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            ImageField::new('image')->setBasePath('/uploads/images')->onlyOnIndex(),
            AssociationField::new('category'),
            AssociationField::new('level'),
            DateField::new('createdAt'),
            DateField::new('UpdatedAt'),
            TextEditorField::new('content')
        ];
    }
}
