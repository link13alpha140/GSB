<?php

/**
 * Vue Entête
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2026 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 * @link      https://getbootstrap.com/docs/3.3/ Documentation Bootstrap v3
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title> 
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles/bootstrap/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex">
            <?php
            $uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($estConnecte) {
                ?>
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border-end min-vh-100" style="width: 280px;">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="./images/logo.jpg" alt="Laboratoire Galaxy-Swiss Bourdin" width="40" height="32" class="me-2">
                    <span class="fs-4">GSB</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php if (!$uc || $uc == 'accueil') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>" aria-current="page">
                            <span class="bi bi-house me-2"></span>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?uc=gererFrais&action=saisirFrais" class="nav-link <?php if ($uc == 'gererFrais') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>">
                            <span class="bi bi-pencil-fill me-2"></span>
                            Renseigner la fiche de frais
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?uc=etatFrais&action=selectionnerMois" class="nav-link <?php if ($uc == 'etatFrais') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>">
                            <span class="bi bi-card-list me-2"></span>
                            Afficher mes fiches de frais
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?uc=deconnexion&action=demandeDeconnexion" class="nav-link <?php if ($uc == 'deconnexion') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>">
                            <span class="bi bi-box-arrow-right me-2"></span>
                            Déconnexion
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="bi bi-person-circle fs-4 me-2"></span>
                        <strong><?= $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="index.php">Accueil</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=gererFrais&action=saisirFrais">Renseigner la fiche de frais</a></li>
                        <li><a class="dropdown-item" href="index.php?uc=etatFrais&action=selectionnerMois">Afficher mes fiches de frais</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.php?uc=deconnexion&action=demandeDeconnexion">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
            <?php
            }
            ?>
            <div class="container pt-5 pb-4">
                <?php
                if ($estConnecte) {
                    ?>
                <div class="header">
                    <div class="row vertical-align">
                        <div class="col-md-4">
                            <h1>
                                <img src="./images/logo.jpg" class="img-fluid" 
                                     alt="Laboratoire Galaxy-Swiss Bourdin" 
                                     title="Laboratoire Galaxy-Swiss Bourdin">
                            </h1>
                        </div>
                    </div>
                </div>
                <?php
                } else {
                    ?>   
                    <h1>
                        <img src="./images/logo.jpg"
                             class="img-fluid mx-auto d-block"
                             alt="Laboratoire Galaxy-Swiss Bourdin"
                             title="Laboratoire Galaxy-Swiss Bourdin">
                    </h1>
                    <?php
                }
