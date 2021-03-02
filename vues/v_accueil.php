<?php
/**
 * Vue Accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @author    Tony FERNANDEZ <it-fernandeztony@gmail.com>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>
<div id="accueil">
    <h2>
        Gestion des frais<small> - 
        <?php if ($_SESSION['utilisateur'] == 'visiteur'){ ?> 
            Visiteur :
        <?php } else { ?>
            Comptable
            <?php
            }
            echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']
            ?></small>
    </h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary <?php echo $_SESSION['utilisateur']; ?>">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a 
                            href="index.php?uc=gererFrais&action=saisirFrais"
                            class="btn btn-success btn-lg" role="button">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>
                            <?php if ($_SESSION['utilisateur'] == 'visiteur'){ ?>
                                Renseigner la fiche de frais
                            <?php } else { ?>
                                Valider les fiches de frais 
                            <?php } ?>
                        </a>
                        <a href="index.php?uc=etatFrais&
                                <?php if ($_SESSION['utilisateur'] == 'comptable') { 
                                ?>action=voirEtatFrais<?php } else { ?>action=selectionnerMois<?php }?>"
                           class="btn btn-primary btn-lg 
                           <?php echo $_SESSION['utilisateur'] ?>" role="button">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <br>
                            <?php if ($_SESSION['utilisateur'] == 'visiteur'){ ?>
                                Afficher mes fiches de frais
                            <?php } else { ?>
                                Suivre le paiement des fiches de frais 
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>