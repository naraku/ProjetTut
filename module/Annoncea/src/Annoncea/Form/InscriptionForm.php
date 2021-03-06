<?php
namespace Annoncea\Form;

use Zend\Form\Form;
use Zend\Captcha\Image;

class InscriptionForm extends Form
{
    
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('inscription');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'nom',
            'type' => 'Text',
             'options' => array(
                'label' => 'Nom : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
             ),
        ));
        $this->add(array(
            'name' => 'prenom',
            'type' => 'Text',
            'options' => array(
                'label' => 'Prénom : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
            ),
        ));
         $this->add(array(
            'name' => 'pseudo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Pseudonyme : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
            ),
        ));
        
        $this->add(array( 
            'name' => 'statut', 
            'type' => 'Radio', 
            'attributes' => array( 
                'required' => 'required', 
                'value' => 'particulier', 
            ), 
            'options' => array( 
                'label' => 'Statut', 
                'value_options' => array(
                    'particulier' => 'Particulier', 
                    'professionnel' => 'Professionnel', 
                ),
            ), 
        )); 
         $this->add(array(
            'name' => 'adresse',
            'type' => 'Text',
            'options' => array(
                'label' => 'Adresse : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
            ),
        ));
        
         $this->add(array(
            'name' => 'cp',
            'type' => 'Text',
            'options' => array(
                'label' => 'Code Postal : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
            ),
        ));
        
        $this->add(array(
            'name' => 'ville',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ville : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
            ),
        ));
        
  
        $this->add(array(
            'name' => 'tel',
            'type' => 'Text',
            'options' => array(
                'label' => 'Téléphone : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
             ),
        ));
          
        $this->add(array(
            'name' => 'id_dept',
            'type' => 'Select',
            'options' => array(
                'label' => 'Departement : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
             ),
        ));
        
         
        $this->add(array( 
            'name' => 'mail', 
            'type' => 'Email', 
            'attributes' => array(  
                'required' => 'required', 
            ), 
            'options' => array( 
                'label' => 'Email : ', 
            ), 
        )); 
         
                  
        $this->add(array(
            'name' => 'mdp',
            'type' => 'Password',
            'options' => array(
                'label' => 'Mot de passe : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
             ),
        ));
        $this->add(array(
            'name' => 'mdp_verif',
            'type' => 'Password',
            'options' => array(
                'label' => 'Confirmez le mot de passe : ',
            ),
            'attributes' => array( 
                'required' => 'required', 
             ),
        ));
        
     $this->add(array( 
            'name' => 'captcha', 
            'type' => 'Captcha',
            'options' => array(
                  'label'=> 'Merci de recopier le texte de l\'image ci-dessus',
                  'captcha' => new Image(array(
                    'width' => 250,
                    'height' => 100,
                    )
                 )
            ), 
        ));
        
       $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
           
         $this->add(array(
            'name' => 'rang',
            'type' => 'Hidden',
        ));   
            
        
        $this->add(array( 
            'name' => 'csrf', 
            'type' => 'Zend\Form\Element\Csrf', 
        ));        
        
        
        
    }
    
}