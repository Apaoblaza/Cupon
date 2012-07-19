<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * Este archivo pertenece a la aplicación de prueba Cupon.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Cupon\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Formulario para crear y manipular entidades de tipo Oferta.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class OfertaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('slug')
            ->add('descripcion')
            ->add('condiciones')
            ->add('foto')
            ->add('precio', 'money')
            ->add('descuento', 'money')
            ->add('fecha_publicacion')
            ->add('fecha_expiracion')
            ->add('compras', 'integer')
            ->add('umbral', 'integer', array('label' => 'Compras necesarias'))
            ->add('revisada', null, array('required' => false))
            ->add('ciudad')
            ->add('tienda')
        ;
    }

    public function getName()
    {
        return 'cupon_backendbundle_ofertatype';
    }
}
