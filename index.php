<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Open Graph Facebook -->
    <meta property="og:title" content="Portfolio_Charley_PONS"/>
    <meta property="og:type" content="site web"/>
    <meta property="og:url" content="http://www.c-pons.com/"/>
    <meta property="og:image" content="images/webagency.png"/>
    <meta property="og:description" content="Portfolio developpeur web"/>
    <!-- Open Graph Twitter -->
    <meta name="twitter:card" content="Portfolio_Charley_PONS">
    <meta name="twitter:site" content="c-pons">
    <meta name="twitter:title" content="Portfolio developpeur web">
    <meta name="twitter:description" content="Portfolio developpeur web">
    <meta name="twitter:image" content="images/logo.png">
    <!-- C-pons -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
    <link rel="icon" type="image/jpg" href="icone.jpg" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    <title>C-pons</title>
</head>
<body>
    <header>   

       <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Charley Pons</a>
      <a class="navbar-brand offset-col-4 col-md-2"href="https://github.com/CharleyPONS"><span class="fab fa-github"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
       
            <li class="active"><a href="#">Acceuil</a></li>
            <li><a href="#">Mon profil</a></li>
            <li><a href="#">Compétences/Certifications</a></li>
            <li><a href="#">Réalisations</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Contactez-moi</a></li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="fa fa-phone"></span> 06 81 46 31 67</a></li>
            <li><a href="mailto:charleypons@live.fr"><span class="fas fa-envelope"></span></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 
  </div><!-- /.container-fluid -->
</nav>
</header>
<p>S’il y a quelque chose de pratique avec le Web c’est bien de pouvoir communiquer avec le propriétaire d’un site Internet. Un simple lien hypertext avec la particularité d’ouvrir le logiciel de courrier électronique du visiteur. C’est donc le logiciel du visiteur qui fait tout le travail, et même le serveur SMTP du visiteur qui fait parvenir le courriel vers votre propre serveur de courrier.

Le lien mailto:
Ce lien est très simple, il doit commencer par "mailto:" suivit par le "header" du courriel. En-tête qui contient toute l’information du courriel, à savoir les adresses du ou des receveurs, des copies conformes (CC) ou des copies cachées (BCC), le sujet et le texte du courriel.

Rappel sur la balise A
La balise HTML pour faire un lien est A, l’adresse du lien est donnée à la propriété du lien HREF. Cette balise doit être fermée et c’est le texte ou l’image entre les deux balises qui sera le lien.

<a href="url ou mailto:"> lien </a>

Vous pouvez simplement ajouter l’adresse du receveur comme ceci:

mailto:adresse@serveur.com
ou
<a href="mailto:adresse@serveur.com"> Contactez-moi </a>

C’est la façon la plus simple et la plus répandue. Vous pouvez aussi le faire de cette façon:

mailto:?to=adresse@serveur.com

Ou encore avec plus d’une adresse:

mailto:?to=adresse1@serveur.com,adresse2@serveur.com

 

Dans cet exemple, il y a le caractère spécial "?" qui indique qu’un ou des paramètres seront aussi envoyés. S’il y a plusieurs paramètres, ils devront tous être séparés par le caractère spécial "&". Voici la liste des paramètres disponibles:

- to = Adresse(s) du ou des receveurs séparées par des virgules.
- cc = Adresse(s) des copies conformes séparées par des virgules.
- bcc = Adresse(s) des copies cachées séparées par des virgules.
- subject = Sujet du message
- body = Contenu du message
 

Exemple complet, deux receveurs, une copie conforme et un sujet.

<a href="mailto:?to=adresse1@serveur.com%2C%20adresse2@serveur.com &cc=adresseCopie@serveur.com &subject=Sujet%20du%20message"> Test de mailto </a>

Ici, nous avons ajouté des caractères spéciaux. C’est qu’il faut encoder les adresses pour s’assurer que les informations passent correctement. ATTENTION: Le premier "?" ne doit pas être convertit en caractère spécial, le caractère spécial du "?" est utilisé seulement si vous désirez utiliser le "?" dans le sujet ou le corps du message. Voici la liste des caractères spéciaux les plus utiles:

- , = %2C%20
- & = &
- Espace = %20
- Saut de ligne = %0D%0A
- < = %3c
- % = %25
- ? = %3

Noter que ces caractères spéciaux ne sont pas toujours compatibles mais qu’en général il fonctionne.

Django (Oznog) Blais
Dernière mise à jour : 2014-10-02
 Commentaires

Bonjour,

Je ne comprends pas pourquoi mon lien ne fonctionne pas ?
Merci de votre aide.

<li><a href=mailto:?to=c.veizovic@societec2v.com,c.velthier@societec2v.com>
<i class=fa fa-envelope fa-2x></i><strong> Mail societec2v.com</strong></a></li>


Cordialement
Michel
64x64
giboreau
http://societec2v.com
Date (GMT) : 2015-12-09 5:54:10 (UTC +0000)

Salut,

Avec des guillemet il fonctionne ton script.
<a href="mailto:?to=c.veizovic@societec2v.com,c.velthier@societec2v.com">

Si tu as de la difficulté, essai « Sharelinkgenerator », il peut générer ton lien.

http://www.sharelinkgenerator.com/

Ciao
64x64
oznog
http://www.trucsweb.com
Date (GMT) : 2015-12-09 13:22:59 (UTC +0000)



Bonjour,

Je suis entrain d'écrire un formulaire google via l'éditeur de script, et, je veux mettre en place un bouton à la fin qui, lorsque l'on clique dessus, ouvre une nouvelle page vers gmail. Celui-ci ouvre également un nouveau mail en même temps. 

Cette partie je m'en sors, cependant j'aimerai mettre un destinataire en même temps sur le nouveau mail fraîchement crée. J'ai donc pensé au mailto, mais cela m'ouvre seulement une nouvelle page blanche avec comme url le mailto:blalblabla..

Voici la partie fonctionnelle :

<div class="hidden content">
    <a href='https://mail.google.com/mail/u/0/#inbox?compose=new' target='_blank'> Lux EHS</a>
</div>

Voilà ce qui me fonctionne pas :

<div class="hidden content">
   <a href="mailto:Lux.Ehs@eu.averydennison.com?"> Lux EHS</a>
</div>

En vous remerciant d'avance de votre aide, j'espère qu'une solution pourra être trouvé !

Bonne journée à vous.
64x64
Maurouard Valentin
http://www.averydennison.com/en/home.html
Date (GMT) : 2016-09-06 12:17:10 (UTC +0000)

Salut,

Malheureusement je ne connais pas les formulaires Google et ça ne m'intéresse pas du tout. Google est carrément mon compétiteur à ce sujet, je perds quotidiennement des contrats. Et ironiquement je donne du support alors que Google même en est incapable.

Enfin, Google travaille pour les spéculateurs, mais moi je travaille pour VOUS!

C'est normal « mailto » n'est pas un service des navigateurs, c'est simplement un mot-clé qui indique d'ouvrir ton logiciel de messagerie. La solution n'est certainement pas celle-là. Il y a certes des plugiciels pour Chrome (plug-in), mais s'il y a une solution, elle doit impérativement passer par la « chaine de requête » (querrystring). Il suffit de trouver le bon nom de variable. Instinctivement j'irais vers le « &to=courriel ». Et c'est d'ailleurs ce que j'ai trouvé (pas testé).

Avec le sujet (su), le message (body) et la copie cachée (bcc), pour une fois Google semble utiliser la norme : 

https://mail.google.com/mail/u/0/#inbox?compose=new&to=Lux.Ehs@eu.averydennison.com&su=SUBJECT&body=BODY&bcc=someone.else@example.com

Il y a aussi pour ouvrir le bon dossier :

Inbox <https://mail.google.com/mail/u/0/?tab=wm#inbox>
Starred <https://mail.google.com/mail/u/0/?tab=wm#starred>
Important <https://mail.google.com/mail/u/0/?tab=wm#imp>
Sent Mail <https://mail.google.com/mail/u/0/?tab=wm#sent>
Drafts <https://mail.google.com/mail/u/0/?tab=wm#drafts>
All Mail <https://mail.google.com/mail/u/0/?tab=wm#all>

Ciao
64x64
oznog
http://www.trucsweb.com
Date (GMT) : 2016-09-06 13:33:3 (UTC +0000)

Je viens de tomber sur ce bout de code JavaScript (sans jQuery). Il fait la conversion automatique de tous vos « mailto » en lien Gmail :



Noter la nouvelle (dernière) adresse valide, il faut peut être changer la vielle adresse de ce code pas la nouvelle :
https://mail.google.com/mail/u/0/#inbox?compose=new

Ça peut-être pratique pour certain. Personnellement je ne forcerai personne à posséder un compte Gmail...

ciao
64x64
oznog
http://www.trucsweb.com
Date (GMT) : 2016-09-06 13:47:2 (UTC +0000)



Fermé, les commentaires ne sont plus autorisés pour ce tutoriel.
       Visites : 167396 - Pages vues : 196480

 
Amnistie internationale
 RSS
         
[Photo]SVG - Changement de couleurs et de dimensions des images vectorielles en CSS
Aider les Trucsweb
PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !   
aiement en ligne sécurisée PayPal Vérifié par PayPal
 Lien vers une adresse de courrier électronique - Trucsweb
Lien vers une adresse de courrier électronique - Un mailto avec sujet, copies et message...
 Étiquettes
lienhyperlienhypertextehypertextelinkahrefurladresseélectroniquemailtocourrielcontactezemail
 outils
 Generateur Trucsweb
 Essayez XSEARCH5.2
 Glossaire
 jQuery : Équivalent Javascript
 HTML5 : Liste des balises
 HTML5 : Formation pour débutant
AbuseIPDB AbuseIPDB
 Phishing-initiative
Initiative hameçonnage (Phishing initiative)

 
 Références
W3C HTML5
W3C HTML 4.0
W3C CSS Level 3
W3C CSS LEVEL 2.1
W3C XHTML 1.0
W3C SMIL 2.0
W3C XML 1.0
W3C The Extensible Stylesheet Language Family (XSL)
W3C XPath 3.0
W3C XSL Version 1.1
W4C XSLT 2.0
RFC Editor Site
Web Design Group
Treehouse: Development Courses
W3Schools
W3CTutorial
XML Cover Pages
The W3C Markup Validation Service
Validateur de syntaxe Javascript Esprima
Validateur JavaScript Lint
Le meilleurs Validateur JavaScript Code Beautify
Real Favicon checker
Local Business Schema Generator
Générateur de microdonnées
Testing Tool — Google Developers
Google - Outil de test du balisage d'e-mails
Google - Search Console (webmasters/tools)
PageSpeed Insights
RDFa Distiller and Parser
RDF extracteur (pyRDFa)
Soumettre votre URL à Google
Soumettre votre URL à Bing
Soumettre votre URL à Yahoo
FXSL - Functional Programming Library for XSLT
Wikipedia - Internet media type
Mozilla Developer Network JavaScript reference
VBScript Quick Reference
ASP.NET Reference
JCSS & Javascript Character Entity Calculator
JScript Reference
Hammer.min.js
ASP Object Quick Ref.
ADO API Reference
IIS Configuration Reference
MSDN Library
Bootstrap
Bootsnipp
Bootstrap Cheat Sheets
Iconic
Zurb Foundation 5
Skeleton
Responsive CSS Framework Comparison
HTML5 Boilerplate
Modernizr
Normalize.css
Eric Meyer's CSS reset
Bootstrap (français)
Jasny Bootstrap
jQuery
DataTables | Table plug-in for jQuery
HTML 4.0 code de caractères
Unicode fonts
Manuel PHP
Documentation Perl
ActionScript® 3.0 Reference
MySQL Reference Manuals
Find My Facebook Page ID
Get a User's Twitter ID
Share Link Generator!
Validation de courriel
G Suite Toolbox Check MX
G Suite Toolbox Messageheader
SPF Syntax Validator
SPF Record Testing Tools
La Loi canadienne anti-pourriel
DNS / nameserver (requête en ligne)
Whatsmydns.net (Propagation DNS globale)
MXtoolbox.com
DNSstuff.com
SHAAAAAAAAAAAAA - Détection de certificat SHA-1
Décoder Hachage MD5, SHA-1, LM, NTML
Get Lat Long from Address
Java Language Spec.
Sun Java
JSP Standard Tag Library
C++ Language Reference
C# Reference
Les Navigateurs
Terminologie d'Internet
IP Location tools
Open Port Check Tool
Webfont generator
HSL picker
Zone Accro
Dictionnaire de la langue française de l'internaute.com
Glossaire informatique anglais/français
Correcteur d'orthographe et grammaire Reverso
Google Traduction
JavaScript: Escaping Special Characters
Online JavaScript/CSS Compression Using YUI Compressor
Minify your CSS
JS & CSS Minifier
CSS Inliner Tool
Base64 encoder and decoder
Hachage MD5, SHA-1, LM, NTML
Javascript HTML Page Encoder
Winmail.dat Reader

 
Django Blais
Blogueur, analyste-programmeur et designer Web,
je réalise aussi tout type de projet web!


X
Trucsweb.com Connexion

Votre pseudonyme

X
Trucsweb.com Mot de passe perdu

Votre adresse électronique

X
Trucsweb.com Conditions générales

Responsabilité
La responsabilité des Trucsweb.com ne pourra être engagée en cas de faits indépendants de sa volonté. Les informations mises à disposition sur ce site le sont uniquement à titre purement informatif et ne sauraient constituer en aucun cas un conseil ou une recommandation de quelque nature que ce soit.

Aucun contrôle n'est exercé sur les références et ressources externes, l'utilisateur reconnaît que les Trucsweb.com n'assume aucune responsabilité relative à la mise à disposition de ces ressources, et ne peut être tenue responsable quant à leur contenu.

Droit applicable et juridiction compétente
Les règles en matière de droit, applicables aux contenus et aux transmissions de données sur et autour du site, sont déterminées par la loi canadienne. En cas de litige, n'ayant pu faire l'objet d'un accord à l'amiable, seuls les tribunaux canadien sont compétents.


X
Trucsweb.com Trucsweb

X
Trucsweb.com Glossaire

X
Trucsweb.com Trucsweb

X
Trucsweb.com Trucsweb

Aucun message!
Merci.

X
Aucun message!
X
Trucsweb.com Créer un compte

 Pseudonyme*
Votre pseudonyme
.
Ville
Votre ville
 Courriel*
Votre adresse électronique
@
 Je souhaite recevoir la lettre d'information des Trucsweb par courriel.
En cliquant sur le bouton,
j'accepte les conditions générales.

 Vie privée
Aucun collecte d’information*
Sans widgets sociaux*
Sans GOOGLE*
 
Merci!
Membre de « The Internet Defense League »

28446

TRUCSWEB.COM
Copyright © 1997-2017 | 20 ans
Propulsé par Conception Oznogco Multimédia 
Conception Oznogco Multimédia

</p>
</body>

<!-- Libraries -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> </script>
