## Les 100 fonctions à savoir
#### Count
Retourne le nombre d’éléments dans un tableau.
```php
$colors = array("Blue","Orange","red");
echo count($colors);
```
La Sortie :
````shell script
3
````
PHP count
PHP count()
La fonction count() en PHP renvoie le nombre d’éléments dans un tableau. Syntaxe count(array, mode). Paramètres array (obligatoire) : Spécifie le tableau…
[Lire plus](https://www.php.net/manual/fr/function.count.php)
### Is_array
Est utilisé pour déterminer si une variable est un tableau ou non.
```php
$tab = array('X','Y','X');

if (is_array($tab))
    echo "Ceci est un tableau....";
else
    echo "Ceci n'est pas un tableau....";
```
La sortie:
````shell script
Ceci est un tableau....
````
PHP is_array
PHP is_array()
La fonction is_array() est une fonction intégrée en PHP qui vérifie si une variable est un tableau ou non. Cette fonction renvoie TRUE si la…
[Lire plus](https://www.php.net/manual/fr/function.is-array)
### Substr
Renvoie une partie d’une chaîne.
```php
echo substr("Welcom to WayToLearnX", 10);
```
La sortie:
````shell script
WayToLearnX
````
PHP substr
PHP substr()
La fonction substr() est une fonction intégrée en PHP qui renvoie une partie d’une chaîne.   Syntaxe substr(str, start, len)     Paramètres str(Obligatoire) :…
[Lire plus](https://www.php.net/manual/fr/function.substr)
### In_array
Recherche une valeur spécifique dans un tableau.
```php
$colors = array("Blue", "Orange", "Red");

if (in_array("Red", $colors)) {
    echo "Red was found";
}
if (in_array("Green", $colors)) {
    echo "Green was found";
}
```
La sortie:
````shell script
Red was found
````
PHP in_array
PHP in_array()
La fonction in_array() recherche dans un tableau une valeur spécifique.   Syntaxe in_array(value, array, mode) Remarque: Si le paramètre « value » est une chaîne et que…
[Lire plus](https://www.php.net/manual/fr/function.in-array)
### Explode
Diviser une chaîne en un tableau.
```php
$str = "Welcom to WayToLearnX";
print_r (explode(" ",$str));
```
La sortie:
````shell script
Array ( [0] => Welcom  [1] => to  [2] => WayToLearnX )
````
PHP explode
PHP explode()
La fonction explode() est une fonction intégrée en PHP utilisée pour diviser une chaîne en différentes chaînes. La fonction explode() divise une chaîne en fonction…
[Lire plus](https://www.php.net/manual/fr/function.explode)
### Implode
Renvoie une chaîne à partir des éléments d’un tableau.
```php
$arr = array('Hello', 'World!', 'How', 'are', 'you?');
echo implode(" ",$arr);
```
La sortie:
````shell script
Hello World!, How are you?
````
PHP implode
PHP implode()
La fonction implode() est une fonction intégrée en PHP et est utilisée pour joindre les éléments d’un tableau. implode() est un alias pour join() et…
[Lire plus](https://www.php.net/manual/fr/function.implode)
### Str_replace
Diviser une chaîne en un tableau.
```php
echo str_replace("Welcom", "Hello", "Welcom to WayToLearnX!");
```
La sortie:
````shell script
Hello to WayToLearnX!
````
PHP str_replace
PHP str_replace()
La fonction str_replace() remplace certains caractères par d’autres caractères dans une chaîne.   Syntaxe str_replace(searchVal, replaceVal, str, count)     La fonction str_replace() fonctionne selon…
[Lire plus](https://www.php.net/manual/fr/function.str-replace)
### Strlen
Renvoie la longueur d’une chaîne.
```php
echo strlen("WayToLearnX");
```
La sortie:
````shell script
11
````
PHP strlen
PHP strlen()
La fonction strlen() est une fonction intégrée en PHP qui renvoie la longueur d’une chaîne.   Syntaxe strlen(str)     Paramètres str(Obligatoire) : Ce paramètre…
[Lire plus](https://www.php.net/manual/fr/function.strlen)
### Array_merge
Fusionne un ou plusieurs tableaux en un seul tableau.
```php
$c1 = array("blue", "orange");
$c2 = array("green", "red");
print_r(array_merge($c1, $c2));
```
La sortie:
````shell script
Array ( [0] => blue  [1] => orange  [2] => green  [3] => red )
````
PHP array_merge
PHP array_merge()
La fonction array_merge est une fonction intégrée en PHP et est utilisé pour fusionner deux tableaux ou plus en un seul tableau. Cette fonction est…
[Lire plus](https://www.php.net/manual/fr/function.array-merge)
### Strpos
Trouve la position du première occurrence d’une chaîne dans une autre chaîne.
```php
echo strpos("I love english, I love english too!","english");
```
La sortie:
````shell script
7
````
PHP strpos
PHP strpos()
La fonction strpos() est une fonction intégrée en PHP qui est utilisée pour trouver la position de la première occurrence d’une chaîne dans une autre…
[Lire plus](https://www.php.net/manual/fr/function.strpos)
### Preg_match
Recherche le motif dans une chaîne de caractère, renvoyant la valeur true si le motif existe, sinon false.
```php
preg_match("/^sad/", "Alex was sad");       // returns false
preg_match("/^sad/", "sad Alex!");         // returns true
```
Les expressions régulières en PHP
Les expressions régulières en PHP
Les expressions régulières, également appelées regex ou regexp, leur but principal est de rechercher efficacement des motifs dans un texte donné. Ces motifs de recherche…
[Lire plus](https://www.php.net/manual/fr/function.preg-match.php)
### Sprintf
Crée une chaîne formatée à partir d’un ou plusieurs arguments.
```php
$str = "Welcom";
$n = 2;
$formatted_str = sprintf('%s, to %uth chapter of PHP.',$str, $n);
echo $formatted_str;
```
La Sortie:
````shell script
Welcom to 2th chapter of PHP.
````
PHP sprintf
PHP sprintf()
La fonction sprintf() est utilisée pour afficher une chaîne formatée.   Syntaxe sprintf(format, arg1, arg2, ... )     Paramètres format(Obligatoire) : Spécifie la chaîne…
[Lire plus](https://www.php.net/manual/fr/function.sprintf)
### Trim
Supprime les espaces et autres caractères prédéfinis dans les deux côtés d’une chaîne.
```php
$str = '      Welcome to waytolearnx.com     ';
$res = trim($str);
echo $res;
```
La Sortie:
````shell script
Welcome to waytolearnx.com
````
PHP trim
PHP trim()
La fonction trim() est une fonction intégrée en PHP qui est utilisée pour supprimer les espaces ou autres caractères prédéfinis des deux côtés d’une chaîne.…
[Lire plus](https://www.php.net/manual/fr/function.trim)
### Strtolower
Convertit une chaîne en minuscule.
```php
echo strtolower("Hello WORLD.");
```
La Sortie:
````shell script
hello world.
````
PHP strtolower
PHP strtolower()
La fonction strtolower() est une fonction intégrée en PHP qui est utilisée pour convertir une chaîne en minuscules.   Syntaxe strtolower(str)     Paramètres str(Obligatoire)…
[Lire plus](https://www.php.net/manual/fr/function.strtolower)
### File_exists
Vérifie si un fichier ou un répertoire existe ou non.
```php
echo file_exists("file.txt");
```
La Sortie:
````shell script
1
````
PHP file_exists
PHP file_exists()
La fonction file_exists() est une fonction intégrée en PHP qui vérifie s’il existe un fichier ou un répertoire donnée.   Syntaxe file_exists(path)     Paramètres…
[Lire plus](https://www.php.net/manual/fr/function.file-exists)
### Is_string
Est utilisé pour déterminer si une variable est une chaîne de caractére ou non.
```php
if (is_string("0011"))
    echo "C'est une chaîne\n";
else
    echo "Ce n'est pas une chaîne";
```
La Sortie:
````shell script
C'est une chaîne
````
PHP is_string
PHP is_string()
La fonction is_string() est une fonction intégrée en PHP qui vérifie si une variable est une chaîne de caractères ou non. Cette fonction renvoie TRUE…
[Lire plus](https://www.php.net/manual/fr/function.is-string)
### Preg_replace
Pour effectuer une correspondance de pattern sur une chaîne, puis remplacez la correspondance par un texte spécifique. Cet exemple supprime les espaces dans $str.
```php
$str = 'Hello        sir';
$str = preg_replace('/\s\s+/', ' ', $str);
echo $str;
```
La Sortie:
````shell script
Hello sir
````
Les expressions régulières en PHP
Les expressions régulières en PHP
Les expressions régulières, également appelées regex ou regexp, leur but principal est de rechercher efficacement des motifs dans un texte donné. Ces motifs de recherche…
[Lire plus](https://www.php.net/manual/fr/function.preg-replace)
### File_get_contents
Lire un fichier dans une chaîne de caractère.
```php
echo file_get_contents("file.txt");
```
La Sortie:
````shell script
Ceci est un fichier avec un texte.
````
PHP file_get_contents
PHP file_get_contents()
La fonction file_get_contents() est une fonction intégrée en PHP qui lit un fichier dans une chaîne de caractères.   Syntaxe file_get_contents(path, search, context, start, max)…
[Lire plus](https://www.php.net/manual/fr/function.file-get-contents)
### Array_key_exists
Vérifie un tableau pour une clé spécifiée et renvoie true si la clé existe et false si la clé n’existe pas.
```php
$car = array("Renault"=>"Kangoo", "Peugeot"=>"Crossover");

if (array_key_exists("Renault",$car))
{
    echo "La clé existe!";
} else {
    echo "La clé n'existe pas!";
}
```
La Sortie:
````shell script
La clé existe!
````
PHP array_key_exists
PHP array_key_exists()
La fonction array_key_exists est une fonction intégrée en PHP et est utilisée pour vérifier si une clé ou un index spécifique est présent ou non…
[Lire plus](https://www.php.net/manual/fr/function.array-key-exists)
### Array_keys
Retourne un tableau contenant les clés.
```php
$car  = array("Renault"=>"Kangoo", "Peugeot"=>"Crossover", "Toyota"=>"4X4");
print_r(array_keys($car));
```
La Sortie:
````shell script
Array ( [0] => Renault   [1] => Peugeot   [2] => Toyota )
````
PHP array_keys
PHP array_keys()
La fonction array_keys est une fonction intégrée en PHP et est utilisée pour renvoyer toutes les clés d’un tableau.   Syntaxe array_keys(array, value, strict)  …
[Lire plus](https://www.php.net/manual/fr/function.array-keys.php)
### Dirname
Renvoie le nom du répertoire d’un chemin donné.
```php
echo dirname("/path/script.php");
```
La Sortie:
````shell script
/path
````
PHP dirname
PHP dirname()
La fonction dirname() est une fonction intégrée en PHP qui renvoie le chemin du répertoire parent.   Syntaxe dirname(path, level)     Paramètres path(Obligatoire) :…
[Lire plus](https://www.php.net/manual/fr/function.dirname)
### Function_exists
Vérifier si une fonction existe ou non dans le script PHP.
```php
function displayMsg()
{
  echo "Bienvenue sur WayToLearnX";
}
	
// Vérifie si la fonction nommée displayMsg existe ou pas
if (function_exists ('displayMsg'))
{
    echo "La fonction displayMsg() existe.\n";
} else {
    echo "La fonction displayMsg() n'existe pas.\n";
}
```
La Sortie:
````shell script
La fonction displayMsg() existe.
````
### Array_map
Envoie chaque valeur d’un tableau à une fonction défini par l’utilisateur et renvoie un tableau avec les nouvelles valeurs, fournis par la fonction défini par l’utilisateur.
```php
function multiplication($n)
{
    return($n * $n);
}
$tab = array(1,2,3,4);
print_r(array_map("multiplication", $tab));
```
La Sortie:
````shell script
Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )
````
PHP array_map
PHP array_map()
La fonction array_map est une fonction intégrée en PHP et elle permet de modifier les éléments d’un ou plusieurs tableaux en fonction de certaines conditions…
[Lire plus](https://www.php.net/manual/fr/function.array-map)
### Get_class
Cette fonction récupère le nom du classe de l’objet donné.
```php
// créer un objet
$obj = new Foo();
// récupère le nom du classe
echo get_class($obj);
```
La Sortie:
````shell script
Foo
````
[Lire plus](https://www.php.net/manual/fr/function.get-class)
### Class_exists
Cette fonction vérifie si la classe donnée a été définie.
```php
if (class_exists('Foo')) {
    $obj = new Foo();
}
```
[Lire plus](https://www.php.net/manual/fr/function.class-exists.php)
### Is_object
Est utilisé pour déterminer si une variable est un objet ou non.
```php
if (!is_object($obj)) {
    return false;
}
```
PHP is_object
PHP is_object()
La fonction is_object() est une fonction intégrée en PHP qui vérifie si une variable est un objet ou non. Cette fonction renvoie TRUE si la…
[Lire plus](https://www.php.net/manual/fr/function.is-object)
### Time
Fonction retourne l’heure actuelle sous forme de secondes.
```php
$t = time();
echo($t);
```
La Sortie:
````shell script
1545605341
````
PHP time()
La fonction time() est une fonction intégrée en PHP qui renvoie l’heure actuelle en nombre de secondes depuis l’époque Unix (1er janvier 1970 00:00:00 GMT).…
[Lire plus](https://www.php.net/manual/fr/function.time)
### Json_encode
Fonction qui convertit des objets PHP en JSON.
```php
$obj->nom = "Alex";
$obj->age = 24;
$json = json_encode($obj);
echo $json;
```
La Sortie:
````shell script
{"nom":"Alex", "age":24"}
````
[Lire plus](https://www.php.net/manual/fr/function.json-encode)
### Date
Cette fonction permet de formater une date.
```php
echo "Aujourd'hui c'est ". date("Y/m/d");
echo "Aujourd'hui c'est ". date("Y.m.d");
echo "Aujourd'hui c'est ". date("Y-m-d");
```
PHP date
PHP date()
La fonction date() est une fonction intégrée en PHP qui formate une date/heure locale et renvoie la date formatée, sous forme de chaîne de caractères.…
[Lire plus](https://www.php.net/manual/fr/function.date)
### Is_null
Fonction est utilisée pour tester si une variable est NULL ou non.
```php
$var = TRUE;

if (is_null($var))
{
    echo "La variable est NULL";
} else {
    echo "La variable n'est pas NULL";
}
```
La Sortie:
````shell script
La variable n'est pas NULL
````
PHP is_null
PHP is_null()
La fonction is_null() est une fonction intégrée en PHP qui vérifie si une variable est NULL ou non. Cette fonction renvoie TRUE si la variable…
[Lire plus](https://www.php.net/manual/fr/function.is-null)
### Is_numeric
Est utilisé pour vérifier si une variable est numérique ou non.
```php
$var = 678;

if (is_numeric($var))
{
    echo "$var est une valeur numérique." ;
} else {
    echo "$var n'est pas une valeur numérique." ;
}
```
La Sortie:
````shell script
678 est une valeur numérique.
````
PHP is_numeric
PHP is_numeric()
La fonction is_numeric() est une fonction intégrée en PHP qui vérifie si une variable est un nombre ou une chaîne numérique. Cette fonction renvoie TRUE…
[Lire plus](https://www.php.net/manual/fr/function.is-numeric.php)
### Array_shift
Supprime le premier élément d’un tableau et renvoie la valeur de l’élément supprimé.
```php
$colors = array(0=>"orange",  1=>"green",  2=>"blue");
echo array_shift($colors);
print_r ($colors);
```
La Sortie:
````shell script
orange
Array ( [0] => green [1] => blue )
````
PHP array_shift
PHP array_shift()
La fonction array_shift() est une fonction intégrée qui supprime le premier élément d’un tableau et renvoie la valeur d’un élément supprimé. Toutes les clés du…
[Lire plus](https://www.php.net/manual/fr/function.array-shift)
### Defined
Vérifie si une constante existe.
```php
define("PI", 3.14);
echo defined("PI");
```
La Sortie:
````shell script
1
````
PHP defined
PHP defined()
La fonction defined() est une fonction intégrée en PHP qui vérifie si la constante existe-t-elle.   Syntaxe defined(name)     Voir aussi : define(), constant()…
[Lire plus](https://www.php.net/manual/fr/function.defined)
### Is_dir
Vérifie si le fichier spécifié est un répertoire.
```php
$directory = "documents";

if(is_dir($directory))
{
    echo ("$directory est un répertoire");
} else {
    echo ("$directory n'est pas un répertoire");
}
```
La Sortie:
````shell script
documents est un répertoire
````
PHP is_dir
PHP is_dir()
La fonction is_dir() est une fonction intégrée en PHP qui vérifie si le nom de fichier spécifié est un répertoire.   Syntaxe is_dir(path)    …
[Lire plus](https://www.php.net/manual/fr/function.is-dir)
### Json_decode
Décode une chaîne JSON
```php
$json = '{"a":1,"b":2,"c":3}';
var_dump(json_decode($json));
```
La Sortie:
````shell script
object(stdClass)#1 (3) {
["a"]=> int(1)````
["b"]=> int(2)
["c"]=> int(3)
}
````
[Lire plus](https://www.php.net/manual/fr/function.json-decode)
### Header
Envoie un en-tête HTTP brut à un client.
```php
header("Expires: Tur, 11 May 2019 01:00:00 GMT");
header("Pragma: no-cache");
header("Cache-Control: no-cache");
```
PHP header
PHP header()
La fonction header() est une fonction intégrée en PHP qui est utilisé pour envoyer un en-tête HTTP brut. Les fonctions HTTP sont les fonctions qui…
[Lire plus](https://www.php.net/manual/fr/function.header)
### Strtoupper
Convertit une chaîne en majuscule.
```php
echo strtoupper("Hello WORLD!");
```
La Sortie:
````shell script
HELLO WORLD!
````
PHP strtoupper
PHP strtoupper()
La fonction strtoupper() est une fonction intégrée en PHP qui est utilisée pour convertir une chaîne en majuscules.   Syntaxe strtoupper(str)     Paramètres str(Obligatoire)…
[Lire plus](https://www.php.net/manual/fr/function.strtoupper)
### Array_values
Retourne un tableau contenant toutes les valeurs d’un tableau.
```php
$info = array("Nom" => "Peter", "Age" => "26", "Ville" => "Paris");
print_r(array_values($info));
```
La Sortie:
````shell script
Array ( [0] => Peter   [1] => 26   [2] => Paris )
````
PHP array_values
PHP array_values()
La fonction array_values() est une fonction intégrée qui renvoie toutes les valeurs d’un tableau et non les clés. La fonction array_values() renvoie le tableau contenant…
[Lire plus](https://www.php.net/manual/fr/function.array-values)
### Md5
Calcule le hachage MD5 d’une chaîne.
```php
$str = "WayToLearnX";
echo md5($str);
```
La Sortie:
````shell script
5e13a3322ef481213005b2424f4e651e
````
PHP md5
PHP md5()
La fonction md5() est une fonction intégrée en PHP qui est utilisée pour calculer le hachage MD5 d’une chaîne. La fonction md5() utilise l’algorithme MD5…
[Lire plus](https://www.php.net/manual/fr/function.md5)
### Method_exists
Il vérifie si la méthode ‘write’ existe dans l’objet fourni en paramètre ‘$book’.
```php
$book = new Book();
var_dump(method_exists($book, 'write'));
```
La Sortie:
````shell script
bool(true)
````
[Lire plus](https://www.php.net/manual/fr/function.method-exists)
### File_put_contents
Ecrire la chaîne de caractères « Welcom to WayToLearnX! » dans le fichier « file.txt.
```php
echo file_put_contents("file.txt","Welcom to WayToLearnX!");
```
PHP file_put_contents
PHP file_put_contents()
La fonction file_put_contents() est une fonction intégrée en PHP qui est utilisée pour écrire une chaîne dans un fichier. La fonction file_put_contents() vérifie le fichier…
[Lire plus](https://www.php.net/manual/fr/function.file-put-contents)
### Rtrim
Supprime les espaces ou autres caractères prédéfinis à droite d’une chaîne de caractères.
```php
$var = "Hello WayToLearnX!";
echo rtrim($var, "WayToLearnX!");
```
La Sortie:
````shell script
Hello
````
PHP rtrim
PHP rtrim()
La fonction rtrim() est une fonction intégrée en PHP qui est utilisée pour supprimer les espaces ou autres caractères prédéfinis à droite d’une chaîne.  …
[Lire plus](https://www.php.net/manual/fr/function.rtrim)
### Array_pop
Supprimer le dernier élément d’un tableau.
```php
$colors = array("orange","yellow","blue");
array_pop($colors);
print_r($colors);
```
La Sortie:
````shell script
Array ( [0] => orange   [1] => yellow)
````
PHP array_pop
PHP array_pop()
La fonction array_pop est une fonction intégrée en PHP et est utilisée pour supprimer et renvoyer le dernier élément d’un tableau qui lui est passé…
[Lire plus](https://www.php.net/manual/fr/function.array-pop)
### Unlink
Supprime un fichier.
```php
$file = "file.txt";
if (!unlink($file))
{
    echo ("Erreur lors de la suppression");
} else {
    echo ("Fichier supprimé");
}
```
PHP unlink
PHP unlink()
La fonction unlink() est une fonction intégrée en PHP qui supprime un fichier.   Syntaxe unlink(path, context)     Paramètres path(Obligatoire) : Spécifie le chemin…
[Lire plus](https://www.php.net/manual/fr/function.unlink)
### Basename
Renvoie le nom de fichier à partir d’un chemin.
```php
$path = "/prog/app.php";
echo basename($path);
```
La Sortie:
````shell script
app.php
````
PHP basename
PHP basename()
La fonction basename() est une fonction intégrée en PHP qui renvoie le nom de fichier à partir d’un chemin.   Syntaxe basename(path, ext)    …
[Lire plus](https://www.php.net/manual/fr/function.basename)
### Realpath
Renvoie le chemin absolu.
```php
echo realpath("myfile.txt");
```
La Sortie:
````shell script
C:\users\desktop\doc\myfile.txt
````
PHP realpath
PHP realpath()
La fonction realpath() est une fonction intégrée en PHP qui renvoie le chemin absolu. Cette fonction supprime tous les liens symboliques (comme ‘/./’, ‘/../’) et…
[Lire plus](https://www.php.net/manual/fr/function.realpath)
### Call_user_func
Est utilisé pour appeler une fonction de rappel(callback) donné dans le premier paramètre et passe les paramètres restants en argument. Il est utilisé pour appeler les fonctions définies par l’utilisateur.
```php
function display($val)
{
    echo "Ceci est le site $value.\n";
}
call_user_func('display', "WayToLearnX.com");
```
La Sortie:
````shell script
Ceci est le site WayToLearnX.com
````
[Lire plus](https://www.php.net/manual/fr/function.call-user-func)
### Call_user_func_array
Appelle une fonction de rappel(callback) et lui transmet les paramètres. Les paramètres sont encapsulés dans un tableau, puis affectés un à un à la liste de paramètres du fonction de rappel. Vous appelez la fonction de rappel par le nom qualifié complet qui lui est attribué dans le premier paramètre. Si la fonction de rappel renvoie une valeur, cette valeur est renvoyée par call_user_func_array.
```php
$mult = function($nbr1, $nbr2) {
    return $nbr1 * $nbr2;
};
var_dump(call_user_func_array($mult, array(3, 2)));
```
La Sortie:
````shell script
int(6)
````
[Lire plus](https://www.php.net/manual/fr/function.call-user-func-array.php)
### Fopen
Ouvre un fichier ou une URL.
```php
$file = fopen("myFile.txt","r");
$url = fopen("http://waytolearnx.com/","r");
```
PHP fopen
PHP fopen()
La fonction fopen() est une fonction intégrée en PHP qui ouvre un fichier ou une URL.   Syntaxe fopen(file, mode, search)     Paramètres file(Obligatoire)…
[Lire plus](https://www.php.net/manual/fr/function.fopen)
### Microtime
Renvoie le timestamp Unix actuel en microsecondes
```php
echo(microtime());
```
La Sortie:
````shell script
0.31729200 1545655496
````
PHP microtime
PHP microtime()
La fonction microtime() est une fonction intégrée en PHP qui renvoie le timestamp Unix actuel avec des microsecondes.   Syntaxe microtime(return);     Paramètres return(Optionnel)…
[Lire plus](https://www.php.net/manual/fr/function.microtime)
### Fclose
Ferme un fichier ouvert. Cette fonction retourne TRUE en cas de succès ou FALSE en cas d’échec.
```php
$file = fopen("file.txt","r");
//...
fclose($file);
```
La Sortie:
````shell script
true
````
PHP fclose
PHP fclose()
La fonction fclose() est une fonction intégrée en PHP qui ferme un fichier ouvert. Le fichier doit être ouvert par la fonction fopen().   Syntaxe…
[Lire plus](https://www.php.net/manual/fr/function.fclose.php)
### Is_int
Est utilisé pour tester si le type du variable spécifiée est un entier ou non.
```php
$nbr = 123;

if (is_int($nbr))
{
    echo "$nbr est un nombre entier" ;
} else {
    echo "$nbr n'est pas un nombre entier " ;
}
```
La Sortie:
````shell script
123 est un nombre entier
````
PHP is_int
PHP is_int()
La fonction is_int() est une fonction intégrée en PHP qui vérifie si une variable est de type entier ou non. Cette fonction renvoie TRUE si…
[Lire plus](https://www.php.net/manual/fr/function.is-int.php)
### Is_file
Vérifie si le fichier spécifié est un fichier régulier. Cette fonction retourne TRUE s’il s’agit d’un fichier.
```php
$file = "file.txt";

if(is_file($file))
{
    echo ("$file est un fichier régulier");
} else {
    echo ("$file n'est pas un fichier régulier");
}
```
La Sortie:
````shell script
file.txt est un fichier régulier
````
PHP is_file
PHP is_file()
La fonction is_file() est une fonction intégrée en PHP qui vérifie si le nom de fichier spécifié est un fichier normal.   Syntaxe is_file(path)  …
[Lire plus](https://www.php.net/manual/fr/function.is-file)
### Array_slice
Renvoie les parties sélectionnées d’un tableau.
```php
$colors = array("orange","black","white","yellow","green");
print_r(array_slice($colors, 2));
```
La Sortie:
````shell script
Array ( [0] => white    [1] => yellow     [2] => green )
````
PHP array_slice
PHP array_slice()
La fonction array_slice() est une fonction intégrée en PHP qui renvoie les parties sélectionnées d’un tableau. La fonction array_slice() est utilisée pour extraire une tranche…
[Lire plus](https://www.php.net/manual/fr/function.array-slice)
### Preg_match_all
Faire une correspondance à toutes les occurrences du motif dans la chaîne.
```php
preg_match_all("/\(?  (\d{3})?  \)?  (?(1)  [\-\s] ) \d{3}-\d{4}/x", "Appel 222-1414 or 1-900-888-1414", $phones);
print_r($phones);
```
La Sortie:
````shell script
Array (
    [0] => Array (
    [0] => 222-1414
    [1] => 900-888-1414
)
[1] => Array (
[0] => [1] => 900
)
)
````
Les expressions régulières en PHP
Les expressions régulières en PHP
Les expressions régulières, également appelées regex ou regexp, leur but principal est de rechercher efficacement des motifs dans un texte donné. Ces motifs de recherche…
[Lire plus](https://www.php.net/manual/en/function.preg-match-all)
### Ucfirst
Convertit le premier caractère d’une chaîne en majuscule.
```php
echo ucfirst("hello world!");
```
La Sortie:
````shell script
Hello world!
````
PHP ucfirst
PHP ucfirst()
La fonction ucfirst() est une fonction intégrée en PHP et est utilisée pour convertir le premier caractère d’une chaîne en majuscules.   Syntaxe ucfirst(str)  …
[Lire plus](https://www.php.net/manual/en/function.ucfirst)
### Intval
Est utilisé pour récupérer la partie entière d’une valeur.
```php
echo intval(255.22);
```
La Sortie:
````shell script
255
````
PHP intval
PHP intval()
La fonction intval() est une fonction intégrée en PHP qui renvoie la valeur entière d’une variable.   Syntaxe intval(var, base)     Paramètres var(Obligatoire) :…
[Lire plus](https://www.php.net/manual/en/function.intval)
### Str_repeat
Répète une chaîne selon le nombre fourni en paramètre.
```php
echo str_repeat(".",12);
```
La Sortie:
````shell script
............
````
PHP str_repeat
PHP str_repeat()
La fonction str_repeat() est une fonction intégrée en PHP et est utilisée pour créer une nouvelle chaîne en répétant une chaîne donnée un nombre fixe…
[Lire plus](https://www.php.net/manual/en/function.str-repeat)
### Serialize
Convertit une représentation stockable d’une valeur.
```php
$serializedData = serialize(array('Blue', 'Red', 'Green'));
echo  $serializedData;
```
La Sortie:
````shell script
a:3:{i:0;s:4:"Blue";i:1;s:3:"Red";i:2;s:5:"Green";}
````
PHP serialize
PHP serialize()
La fonction serialize() est une fonction intégrée en PHP qui est utilisée pour convertir une représentation stockable d’une valeur. Sérialiser des données signifie convertir une…
[Lire plus](https://www.php.net/manual/en/function.serialize)
### Array_filter
filtre les valeurs d’un tableau à l’aide d’une fonction de rappel(callback).
```php
function checkOdd($nbr)
{
    return($nbr & 1);
}
$tab = array("x","y",1,2,3);
print_r(array_filter($tab, "checkOdd"));
```
La Sortie:
````shell script
Array ( [2] => 1 [4] => 3 )
````
PHP array_filter
PHP array_filter()
PHP array_filter est une fonction intégrée qui filtre les valeurs d’un tableau à l’aide d’une fonction de rappel(callback). array_filter() parcourt chaque valeur d’un tableau en…
[Lire plus](https://www.php.net/manual/en/function.array-filter)
### Mkdir
Crée un nouveau répertoire.
```php
mkdir("Document");
```
PHP mkdir
PHP mkdir()
La fonction mkdir() est une fonction intégrée en PHP qui crée un répertoire.   Syntaxe mkdir(path, mode, recursive, context)     Paramètres path(Obligatoire) : Spécifie…
[Lire plus](https://www.php.net/manual/en/function.mkdir)
### Is_callable
Est utilisé pour tester que le contenu d’une variable, si elle peut être appelée en tant que fonction ou non.
```php
function f(){}
echo is_callable('f');
```
La Sortie:
````shell script
1
````
PHP is_callable
PHP is_callable()
La fonction is_callable() est une fonction intégrée en PHP qui vérifie si la valeur d’une variable peut être appelé en tant que fonction ou non.…
[Lire plus](https://www.php.net/manual/en/function.is-callable)
### Ltrim
Supprime les espaces ou autres caractères prédéfinis à gauche d’une chaîne de caractères.
```php
$var = "Hello WayToLearnX!";
echo ltrim($var,"Hello");
```
La Sortie:
````shell script
WayToLearnX!
````
PHP ltrim
PHP ltrim()
La fonction ltrim() est une fonction intégrée en PHP qui est utilisée pour supprimer les espaces ou autres caractères prédéfinis à gauche.   Syntaxe ltrim(str,chars)…
[Lire plus](https://www.php.net/manual/en/function.ltrim)
### Ob_start
PHP étant un langage interprété, chaque instruction est exécutée l’une après l’autre. PHP a donc tendance à envoyer du code HTML aux navigateurs en morceaux, ce qui réduit les performances. En utilisant la mise en mémoire tampon, le code HTML généré est stocké dans un tampon ou une variable de type string et est envoyé à la mémoire tampon pour être rendu après l’exécution de la dernière instruction du script PHP.
Mais la mise en mémoire tampon n’est pas activée par défaut. Pour l’activer, il faut utiliser la fonction ob_start() avant tout chose dans le script.
```php
function callback($buffer){
   // .....
}

ob_start("callback");
echo "Hello WayToLearnX!";
ob_end_flush();
```
[Lire plus](https://www.php.net/manual/en/function.ob-start)
### Round
Arrondit un nombre à virgule flottante.
```php
echo(round(3.9754341,2));
```
La Sortie:
````shell script
3.98
````
PHP round
PHP round()
La fonction round() est une fonction intégrée en PHP qui arrondit un nombre à virgule flottante. Pour arrondir un nombre à l’entier inférieur le plus…
[Lire plus](https://www.php.net/manual/en/function.round)
### Fwrite
Ecrit dans un fichier ouvert. Cette fonction renvoie le nombre d’octets écrits.
```php
$file = fopen("file.txt","w");
echo fwrite($file,"Hello World!");
fclose($file);
```
La Sortie:
````shell script
13
````
PHP fwrite
PHP fwrite()
La fonction fwrite() est une fonction intégrée en PHP qui écrit dans un fichier ouvert. La fonction s’arrêtera à la fin du fichier (EOF) ou…
[Lire plus](https://www.php.net/manual/en/function.fwrite)
### Array_unique
Supprime les doublons d’un tableau. Si deux ou plusieurs valeurs sont identiques, la première sera gardée et l’autre sera supprimée.
```php
$colors = array("1"=>"blue", "2"=>"orange", "3"=>"blue");
print_r(array_unique($colors));
```
La Sortie:
````shell script
Array ( [1] => blue [2] => orange )
````
PHP array_unique
PHP array_unique()
La fonction array_unique() est une fonction intégrée en PHP qui permet de supprimer les valeurs dupliquées dans un tableau. S’il y a plusieurs éléments dans…
[Lire plus](https://www.php.net/manual/en/function.array-unique)
### Array_search
Recherche une valeur dans un tableau et retourne la clé.
```php
$colors = array("1"=>"blue", "2"=>"orange", "3"=>"red");
print_r(array_search("blue", $colors));
```
La Sortie:
````shell script
1
````
PHP array_search
PHP array_search()
La fonction array_search() est une fonction intégrée en PHP et est utilisée pour rechercher une valeur particulière dans un tableau, et si la valeur est…
[Lire plus](https://www.php.net/manual/en/function.array-search.php)
### Reset
Déplace le pointeur interne sur le premier élément du tableau.
```php
$colors = array("Red", "Blue", "Green", "Orange");
echo current($colors);  //Red
echo next($colors);    //Blue
echo reset($colors);   //Red
```
La Sortie:
````shell script
Red
Blue
Red
````
PHP reset
PHP reset()
La fonction reset() déplace le pointeur interne du tableau vers le premier élément. Méthodes associées: PHP current() PHP end() PHP next() PHP each() PHP prev()…
[Lire plus](https://www.php.net/manual/en/function.reset.php)
### Array_unshift
Insère des nouveaux éléments dans un tableau. Les nouvelles valeurs seront insérées au début du tableau.
```php
$colors = array("1"=>"Red", "2"=>"Blue");
array_unshift($colors, "Orange");
print_r($colors);
```
La Sortie:
````shell script
Array ( [0] => Orange [1] => Red [2] => Blue )
````
PHP array_unshift
PHP array_unshift()
La fonction array_unshift() est une fonction intégrée en PHP utilisée pour insérer de nouveaux éléments dans un tableau. Les nouvelles valeurs du tableau seront insérées…
[Lire plus](https://www.php.net/manual/en/function.array-unshift.php)
### Parse_url
Traite une URL et revoie ses composants
```php
$url = 'https://username:password@host:1080/path?arg=age#12';

var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));
```
La Sortie:
````shell script
array(8) {
["scheme"]=> str````ing(5) "https"
["host"]=> string(4) "host"
["port"]=> int(1080)
["user"]=> string(8) "username"
["pass"]=> string(8) "password"
["path"]=> string(5) "/path"
["query"]=> string(7) "arg=age"
["fragment"]=> string(2) "12"
}
````
[Lire plus](https://www.php.net/manual/fr/function.parse-url.php)
### Func_get_args
Retourne les arguments d’une fonction sous la forme d’un tableau.
```php
function f()
{
    $n = func_num_args();
    echo "Nombre d'arguments : $n";
    if ($n >= 2) {
        echo "Le troisième argument est : " . func_get_arg(2);
    }
}
f(1, 2, 3, 4);
```
La Sortie:
````shell script
Nombre d'arguments : 4
Le troisième argument est : 3
````
[Lire plus](https://www.php.net/manual/fr/function.func-num-args)
### End
Déplace le pointeur interne vers la fin du tableau.
```php
$colors = array("Red", "Blue", "Green", "Brown");
echo current($colors);
echo end($colors);
```
La Sortie:
````shell script
Red
Brown
````
PHP end
PHP end()
La fonction end() est une fonction intégrée en PHP et est utilisée pour trouver le dernier élément du tableau. La fonction end() modifie le pointeur…
[Lire plus](https://www.php.net/manual/fr/function.end)
### Base64_encode
Encode les données fournies avec base64. Cet encodage est conçu pour faire en sorte que les données binaires survivent lors du transport via des couches de transport non propres.
```php
$str = 'Ceci est une chaîne encodée';
echo base64_encode($str);
```
[Lire plus](https://www.php.net/manual/fr/function.base64-encode)
La Sortie:
````shell script
Q2VjaSBlc3QgdW5lIGNoYcOubmUgZW5jb2TDqWU=
````
### Unserialize
Convertit les données sérialisées en données réelles.
```php
$serializedData = serialize(array('Java', 'PHP', 'Python'));
echo  $serializedData;
// désérialiser les données
$tab = unserialize($serializedData);
// Afficher les données non sérialisées;
var_dump ($tab);
```
La Sortie:
````shell script
a:3:{i:0;s:4:"Java";i:1;s:3:"PHP";i:2;s:6:"Python";}

array(3) {
[0]=> string(4) "Java"
[1]=> string(3) "PHP"
[2]=> string(6) "Python"
}
````
PHP unserialize
PHP unserialize()
La fonction unserialize() est une fonction intégrée en PHP qui reconvertisse les données sérialisées en données réelles.   Syntaxe unserialize(str, options)     Paramètres str(Obligatoire)…
[Lire plus](https://www.php.net/manual/fr/function.unserialize)
### Max
Renvoie la valeur la plus grande dans un tableau.
```php
echo(max(3,4,6,7,20));
```
La Sortie:
````shell script
20
````
PHP max
PHP max()
La fonction max() est une fonction intégrée en PHP qui renvoie la valeur la plus grande dans un tableau ou la valeur la plus grande…
[Lire plus](https://www.php.net/manual/fr/function.max.php)
### Preg_split
Convertit une chaîne en un tableau selon l’expression régulière fourni en paramètre.
```php
$ip = "193.354.123.000"; // address IP
$iptab = preg_split("/\./", $ip);

print "$iptab[0]";    //193
print "$iptab[1]";   //354
print "$iptab[2]";   //123
print "$iptab[3]";   //000
```
La Sortie:
````shell script
193
354
123
000
````
[Lire plus](https://www.php.net/manual/fr/function.preg-split)
### Gettype
Est utilisé pour récupérer le type d’une variable.
```php
echo gettype(55);
echo gettype(false);
echo gettype(array());
```
La Sortie:
````shell script
integer
boolean
array
````
PHP gettype
PHP gettype()
La fonction gettype() est une fonction intégrée en PHP qui renvoie le type d’une variable.   Syntaxe gettype(var)     Paramètres var(Obligatoire) : Spécifie la…
[Lire plus](https://www.php.net/manual/fr/function.gettype)
### Strrpos
Trouve la position du dernière occurrence d’une chaîne dans une autre chaîne.
```php
echo strrpos("I love tomatos, I love tomatos too!","tomatos");
```
La Sortie:
````shell script
23
````
PHP strrpos
PHP strrpos()
La fonction strrpos() trouve la position du dernière occurrence d’une chaîne dans une autre chaîne. La fonction strrpos() est sensible à la casse.   Syntaxe…
[Lire plus](https://www.php.net/manual/fr/function.strpos)
### Version_compare
Compare les deux versions de PHP standardisées.
```php
if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo "Ma version est : " . PHP_VERSION . "n";
}
```
La Sortie:
````shell script
Ma version est : 7.2.33
````
[Lire plus](https://www.php.net/manual/fr/function.version-compare)
### Array_push
Insère un ou plusieurs éléments à la fin d’un tableau.
```php
$colors = array("1"=>"orange","2"=>"brown");
array_push($colors,"red","green");
print_r($colors);
```
La Sortie:
````shell script
Array ( [1] => orange [2] => brown [3] => red [4] => green )
````
PHP array_push
PHP array_push()
La fonction array_push() est une fonction intégrée qui est utilisée pour ajouter des éléments à un tableau. La fonction array_push() est utilisée pour insérer de…
[Lire plus](https://www.php.net/manual/fr/function.array-push)
### Floor
Arrondit un nombre à l’entier inférieur le plus proche, si nécessaire.
```php
echo(floor(0.90));
```
La Sortie:
````shell script
0
````
PHP floor
PHP floor()
La fonction floor() est une fonction intégrée en PHP qui arrondit un nombre à l’entier inférieur le plus proche, si nécessaire. Pour arrondir un nombre…
[Lire plus](https://www.php.net/manual/fr/function.floor)
### Strtotime
Convertit une date-heure textuelle en anglais dans un timestamp Unix.
```php
echo(strtotime("2 May 2006"));
```
La Sortie:
````shell script
1146528000
````
PHP strtotime
PHP strtotime()
La fonction strtotime() est une fonction intégrée en PHP qui est utilisée pour convertir une date-heure textuelle anglaise en timàestamp (horodatage) UNIX. La fonction accepte…
[Lire plus](https://www.php.net/manual/fr/function.strtotime)
### Htmlspecialchars
Convertit certains caractères prédéfinis vers des entités HTML.
```php
$str = "Welcom <b>to</b> WayToLearnX.com";
echo htmlspecialchars($str);
```
La Sortie:
````shell script
Welcom &lt;b&gt;to&lt;/b&gt; WayToLearnX.com
````
PHP htmlspecialchars
PHP htmlspecialchars()
La fonction htmlspecialchars() convertit certains caractères prédéfinis en entités HTML. Voici les caractères prédéfinis :     Pour reconvertir des entités HTML en caractères, utilisez…
[Lire plus](https://www.php.net/manual/fr/function.htmlspecialchars)
### Ini_get
Les paramètres de configuration se trouvent dans le fichier php.ini. La valeur définie de chaque paramètres peut être identifiée à l’aide de la fonction ini_get.
```php
echo ini_get('upload_max_filesize'); //la sortie est par défaut 2M
```
La Sortie:
````shell script
2M
````
[Lire plus](https://www.php.net/manual/fr/function.ini-get)
### Ini_set
Les paramètres de configuration se trouvent dans le fichier php.ini. La valeur définie de chaque paramètres peut être modifier à l’aide de la fonction ini_set.
```php
ini_set('upload_max_filesize', '3M');
```
[Lire plus](https://www.php.net/manual/fr/function.ini-set)
### Chr
Convertit une valeur ASCII en caractère.
```php
$str = chr(046);
echo("Nous seron là, toi $str moi!");
```
La Sortie:
````shell script
Nous seron là, toi & moi!
````
PHP chr
PHP chr()
La fonction chr() est une fonction intégrée en PHP et est utilisée pour convertir une valeur ASCII en caractère. Il accepte une valeur ASCII comme…
[Lire plus](https://www.php.net/manual/fr/function.chr)
### Extension_loaded
Cette fonction renvoie TRUE si l’extension identifiée par son nom est chargée, sinon renvoie FALSE.
```php
if (extension_loaded('gd'))
    echo "GD installed";
else
    echo "GD not installed";
```
### Is_bool
Cette fonction permet de déterminer si une variable est un booléen ou non.
```php
$var = true;

if (is_bool($var))
    echo "Ceci est un booléen";
else
    echo "Ceci n'est pas un booléen";
```
La Sortie:
````shell script
Ceci est un booléen
````
PHP is_bool
PHP is_bool()
La fonction is_bool() est une fonction intégrée en PHP qui vérifie si une variable est booléenne ou non. Cette fonction renvoie TRUE si la variable…
[Lire plus](https://www.php.net/manual/fr/function.is-bool)
### Ksort
Trie un tableau associatif par ordre croissant, en fonction de la clé.
```php
$age=array("55"=>"Alex","37"=>"Ali","13"=>"Emily");

ksort($age);
print_r($age);
```
La Sortie:
````shell script
Array ( [13] => Emily   [37] => Ali   [55] => Alex )
````
PHP ksort
PHP ksort()
La fonction ksort() est une fonction intégrée en PHP qui est utilisée pour trier un tableau dans l’ordre croissant en fonction de ses clés. Il…
[Lire plus](https://www.php.net/manual/fr/function.ksort.php)
### Array_reverse
Renvoie un tableau dans l’ordre inverse.
```php
$languages = array("1"=>"C++","2"=>"Java","3"=>"PHP");
print_r(array_reverse($languages));
```
La Sortie:
````shell script
Array ( [0] => PHP [1] => Java [2] => C++ )
````
PHP array_reverse
PHP array_reverse()
La fonction array_reverse() est une fonction intégrée en PHP est utilisée pour inverser les éléments d’un tableau, y compris les tableaux imbriqués. En plus, nous…
[Lire plus](https://www.php.net/manual/fr/function.array-reverse)
### Ord
Renvoie la valeur ASCII du premier caractère d’une chaîne.
```php
echo ord("hello");   //La valeur ASCII de 'h' est 104
```
La Sortie:
````shell script
104
````
PHP ord
PHP ord()
La fonction ord() est une fonction intégrée en PHP qui renvoie la valeur ASCII du premier caractère d’une chaîne.   Syntaxe ord(str)     Paramètres…
[Lire plus](https://www.php.net/manual/fr/function.ord)
### Uniqid
Génére un identifiant unique.
```php
echo uniqid();
```
La Sortie:
````shell script
5c21169e19439
````
PHP uniqid
PHP uniqid()
La fonction uniqid() est une fonction intégrée en PHP qui génère un ID unique basé sur le microtime (l’heure actuelle en microsecondes).   Syntaxe uniqid(prefix,…
[Lire plus](https://www.php.net/manual/fr/function.uniqid)
### Strtr
Remplace une sous-chaîne dans une chaîne par une chaîne de caractères.
```php
echo strtr("HayToLearnY","HY","WX");
```
La Sortie:
````shell script
WayToLearnX
````
PHP strtr
PHP strtr()
La fonction strtr() est une fonction intégrée en PHP qui est utilisée pour remplacer une sous-chaîne dans une chaîne par une chaîne de caractères donnée.…
[Lire plus](https://www.php.net/manual/fr/function.strtr)
### Array_diff
Compare les valeurs de deux tableaux (ou plus) et renvoie les différences.
```php
$languages1 = array("1"=>"PHP","2"=>"Java","3"=>"C","4"=>"C++");
$languages2 = array("5"=>"Java","6"=>"C","7"=>"C++");
$res = array_diff($languages1, $languages2);
print_r($res);
```
La Sortie:
````shell script
Array ( [1] => PHP )
````
PHP array_diff
PHP array_diff()
array_diff() est une fonction intégrée en PHP et est utilisée pour calculer la différence entre deux ou plusieurs tableaux. Cette fonction calcule la différence en…
[Lire plus](https://www.php.net/manual/fr/function.array-diff)
### Error_reporting
Spécifie quelles erreurs sont signalées.
```php
//Désactiver le rapport des erreurs
error_reporting(0);
//Signaler toutes les erreurs
error_reporting(E_ALL);
```
PHP error_reporting
PHP error_reporting()
La fonction error_reporting() est une fonction intégrée en PHP qui précise quelles erreurs sont reportées. La fonction error_reporting() définit la directive ‘error_reporting’ lors de l’exécution.…
[Lire plus](https://www.php.net/manual/fr/function.error-reporting)
### Ceil
Arrondit un nombre à l’entier supérieur le plus proche, si nécessaire.
```php
echo(ceil(0.60));
```
La Sortie:
````shell script
1
````
PHP ceil
PHP ceil()
La fonction ceil() est une fonction intégrée en PHP qui arrondit un nombre à l’entier supérieur le plus proche, si nécessaire.   Syntaxe ceil(nbr)  …
[Lire plus](https://www.php.net/manual/fr/function.ceil)
### Urlencode
Cette fonction est pratique lors du codage d’une chaîne à utiliser dans une partie de requête d’une URL, car elle constitue un moyen pratique de transmettre des variables à la page suivante.
```php
echo '<a href="cgi?foo='. urlencode($foo).'">';
```
### Min
Retourne la valeur la plus petite dans un tableau.
```php
echo(min(1,2,3,0,20));
```
La Sortie:
````shell script
0
````
PHP min
PHP min()
La fonction min() est une fonction intégrée en PHP qui renvoie la valeur la plus petite d’un tableau ou la valeur la plus petite de…
[Lire plus](https://www.php.net/manual/fr/function.min)
### Print_r
Est utilisé pour afficher le contenu d’une variables de façon lisible.
```php
$lang = array("PHP"=>"1", "Java"=>"2", "Python"=>"3");
print_r($lang);
```
La Sortie:
````shell script
Array
(
[PHP] => 1
[Java] => 2
[Python] => 3
)
````
PHP print_r
PHP print_r()
La fonction print_r() est une fonction intégrée en PHP qui est utilisée pour afficher le contenu d’une variables de façon lisible.   Syntaxe print_r(var, return)…
[Lire plus](https://www.php.net/manual/fr/function.print-r)