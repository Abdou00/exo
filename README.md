### Exercice 1 : Numéro de carte bancaire
 - a) Ecrire  un formulaire html permettant de saisir votre nom, votre prénom et votre numéro de carte bancaire ainsi qu’un champ de 3 caractères pour saisir le code figurant au dos de votre carte.
 - b) Envoyez ces informations à un programme PHP qui affiche ces informations.
 - c) Fermez votre navigateur puis appelez de nouveau cette page sans passer par le formulaire.
 - d) Mémorisez les informations reçues dans un cookie avec une durée de vie de 10 minutes.
 - e) Modifiez votre programme pour chercher les informations soit dans les données issues du formulaire si vous passez par le formulaire, soit dans les cookies de votre machine si vous ne passez pas par le formulaire. Vérifiez le fonctionnement.
 - f) Appelez de nouveau cette page 10 minutes plus tard pour vérifier que les cookies oint été détruits.
 
 NB : Il n’est pas obligatoire de renseigner votre véritable numéro de carte !
 
 ### Exercice 2 : Authentification
 - a)Créer une table dans la base de données constituée d’un champ ‘login’ et d’un champ intitulé ‘motDePasse’ permettant de stocker des mots de passe cryptés avec l’algorithme BCRYPT. Alimentez votre table avec quelques valeurs en prenant soin de crypter les mots de passe.
 - b)Créez un formulaire d’authentification (login + mot de passe) et affichez un message indiquant « Authentification réussie » ou « login incorrect » ou « mot de passe incorrect ».
 
 ### Exercice 3 : Authentification pour accéder à un site
 
 ###### Inutile d’utiliser les sessions dans cet exercice.
 
 - b) A partir de votre formulaire d’authentification, accédez à une page (exemple : votre formulaire du TP précédent) si vous êtes authentifié. Si l’authentification a échoué, affichez de nouveau le formulaired’authentification.
 
 Conseil : Utiliser « header(‘location : url’) » pour rediriger vers l’url.
 
### Exercice 4 : Authentification avec les sessions
L’exercice précédent n’a pas permis de protéger vos pages. En effet, il suffit de connaître les url des pages pour y
accéder. Afin de protéger les pages et de s’assurer que l’utilisateur est authentifié, nous allons utiliser les sessions.
 - a) A l’authentification, les login et mots de passe seront mémorisés dans des variables de sessions
 - b) A chaque page accédée, la vérification de la connaissance de ces variables de session sera vérifiée.
 - c) En cas d’accès à une page avec des variables de session incorrectes, on redirige automatiquement vers la
page d’authentification.

### Exercice 5 : Affichage des variables de sessions et déconnexion
 - a) Une fois l’utilisateur authentifié, chaque page doit afficher en en-tête le nom de l’utilisateur.
    
    Conseil : Utilisez un « include ».

 - b) S’il y a erreur sur la personne, proposez une déconnexion et un renvoi vers la page d’authentification. Vous
devez impérativement détruire la session !

### Exercice 6 : Nombre de sessions ...
Essayez de compter et d’afficher le nombre de connexions sur une page en utilisant la même session.

### Exercice 7 (s’il vous reste du temps) : Authentification permettant d’accéder à une autre page
Dans cet exercice, le formulaire est public mais les résultats sont accessibles uniquement aux personnes
authentifiées. De plus, le formulaire de saisie est inclus dans la page de recherche... On fera apparaître soit le
formulaire, soit le résultat...
 - a) Récupérer une page d’un TP précédent (par exemple « recherche.php »)
 - b) Ajouter une authentification pour pouvoir accéder à cette page en respectant les consignes suivantes :
    - Tant que l'authentification est incorrecte, le formulaire de saisie de login et de mot de passe est affiché
    - Préférez les fichiers inclus aux « Copier/coller »
    
### Exercice 8 (s’il vous reste du temps) : Site marchand
Vous devez simuler un site marchand. Les produits à vendre sont à rechercher dans une base de données. Vous
stockerez dans des variables de sessions le contenu de votre « panier » (Produits, quantité) ;
En permanence, sur toutes vos pages vous affichez le nombre d’articles et le montant total de votre panier.
Au moment du paiement (simulation), vous transférez votre panier dans des tables « commande » et
« LigneDeCommande » dans la base de données et vous videz votre panier.