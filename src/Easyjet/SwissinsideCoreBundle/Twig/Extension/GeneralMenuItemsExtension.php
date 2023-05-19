<?php

namespace App\Easyjet\SwissinsideCoreBundle\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Symfony\Component\Security\Core\Security;

class GeneralMenuItemsExtension extends AbstractExtension
{
    private $entityManager;
    private $security;
    
    /**
     * 
     * @param \Doctrine\ORM\EntityManagerInterface $entityManager
     * @param \Symfony\Component\Security\Acl\Model\SecurityIdentityInterface $context
     */
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('generalMenuItems', [$this, 'generalMenuItems']),
       ];
    }
    
    /**
     * Converts a string to time
     * 
     * @param string $string
     * @return int 
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function generalMenuItems()
    {
        
        //if(@IsGranted("IS_AUTHENTICATED_FULLY")) return null;
        /*if($this->securityContext->getToken()->getUser()->getExternal()) {
            return array(
                array(
                    "initials" => "UM",
                    "icon" => "icon-home",
                    "link" => "/dashboard",
                    "name" => "Home",
                ),
                array(
                    "initials" => "BR",
                    "icon" => "icon-comments-alt",
                    "link" => "/support-form/calls/new",
                    "name" => "Bug report"
                ),
                array(
                    "initials" => "SFSU",
                    "icon" => "icon-cloud-upload",
                    "link" => "/SFSU/files/index",
                    "name" => "SFSU"
                )
            );
        }*/
        $_SESSION['TRANSITION_STATUS'] = 'tes';
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping;
        $rsm->addScalarResult("initiaux", "initials");
        $rsm->addScalarResult("lien_principal", "link");
        $rsm->addScalarResult("icon", "icon");
        $rsm->addScalarResult("nom_bouton", "name");
        $rsm->addScalarResult("transition_status", "transition_status");
        $rsm->addScalarResult("right_level", "right_level");
        
        $user = $this->security->getToken() ? $this->security->getToken()->getUser() : '';
       
        // filter CCA ,EFTR ,QMS, ENEWS from DB.
        $sql = "
            SELECT initiaux, lien_principal, icon, nom, '" . $_SESSION['TRANSITION_STATUS'] . "' AS transition_status, types_users.valeur AS right_level, nom_bouton
            FROM `types_users`
            INNER JOIN applications ON applications .id=types_users.id_appli
            WHERE types_users.id IN(SELECT id_type_user FROM assoc_droits_users WHERE id_user=:id_user) AND initiaux NOT IN (\"CCA\", \"FTR\",  \"EN\",\"BR\")
            ORDER BY applications.id"; 
            

        try {
            $query = $this->entityManager->createNativeQuery($sql, $rsm)
               ->setParameter("id_user", $user ? $user->getId() : 0);

            return $query->getResult();
           
        }
        catch(\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'GeneralMenu';
    }
}