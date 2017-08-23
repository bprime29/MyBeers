<?php
/**
 * Created by PhpStorm.
 * User: bprime
 * Date: 6/14/17
 * Time: 2:10 PM
 */
$titre = "Contact";
include("includes/config.php");
include("includes/debut.php");
?>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="well" style="margin-top: 10%;">
            <h3>Send me a message</h3>
            <form role="form" id="contactForm" data-toggle="validator" class="shake" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Name</label>
                        <input type="text" class="form-control" id="name" name="nom" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email" class="h4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Name</label>
                        <p>Combien font 1+3: <span style="color:#ff0000;">*</span>: <input type="text" name="captcha" size="2" /></p>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <p><input type="submit" name="submit" value="Envoyer" /></p>
                <button type="submit" id="form-submit" name="submit" class="btn btn-success btn-lg pull-right ">Submit</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {

    // (1) Code PHP pour traiter l'envoi de l'email

    // Récupération des variables et sécurisation des données
    $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email   = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    // Variables concernant l'email

    $destinataire = 'bertrand.prime@gmail.com'; // Adresse email du webmaster (à personnaliser)
    $sujet = 'Titre du message'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

    // Code PHP pour traiter l'envoi de l'email

    $nombreErreur = 0; // Variable qui compte le nombre d'erreur
    // Définit toutes les erreurs possibles
    if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
    } else { // Sinon, cela signifie que la variable existe (c'est normal)
        if (empty($_POST['email'])) { // Si la variable est vide
            $nombreErreur++; // On incrémente la variable qui compte les erreurs
            $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $nombreErreur++; // On incrémente la variable qui compte les erreurs
                $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
            }
        }
    }

    if (!isset($_POST['message'])) {
        $nombreErreur++;
        $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
    } else {
        if (empty($_POST['message'])) {
            $nombreErreur++;
            $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
        }
    }    if (!isset($_POST['captcha'])) {
        $nombreErreur++;
        $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
    } else {
        if ($_POST['captcha']!=4) {
            // Vérifier que le résultat de l'équation est égal à 4
            $nombreErreur++;
            $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
        }
    }  // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.

    if ($nombreErreur==0) { // S'il n'y a pas d'erreur
        // Envoyer l'email
        mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
        echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé  // (2) Fin du code pour traiter l'envoi de l'email
    }
    else { // S'il y a un moins une erreur
        echo '<div style="border:1px solid #ff0000; padding:5px;">';
        echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
        if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
        if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
        if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
        if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
        if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
        if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
        if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';

        // (4) Ici, il sera possible d'ajouter un code d'erreur supplémentaire si un captcha anti-spam est erroné.
        echo '</div>';
    }
}
?>