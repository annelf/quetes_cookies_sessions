# Quêtes  PHP Cookies & Sessions

Ce template HTML a été fait pour comprendre les variables superglobales `$_SESSION` et `$_COOKIE` en `PHP`.
Initialement il n'y avait pas de `PHP`, nous devions l'écrire.

This HTML template has been made to understand superglobals : `$_SESSION` & `$_COOKIE` in `PHP` language.
Initially, there was no `PHP` code, we had to write it.

## Règles :
- On peut s'identifier de manière simple avec un simple nom d'utilisateur
- Le nom d'utilisateur donné lors de l'identification est repris sur toutes les pages depuis les sessions
- Le panier est stocké dans les variables de session et est affiché sur la page Panier
- On ne **PEUT PAS** accéder qu'à la page `login.php` et `index.php` tant qu'on n'est pas connecté 
- `login.php` devient inacessible une fois connecté, l'utilisateur est redirigé vers `index.php` s'il tente d'y accéder
- L'utilisateur peut également se délogger à l'aide d'un bouton `déconnexion` 

## Rules :
- We can simply log in with a username only
- User name is on every pages from sessions
- Cart is saved in sessions variables and displayed on cart page
- **WE CAN NOT** access to the page login.php and index.php if we are not connected 
- `login.php` is not reachable once we are connected, the user is redirect to `index.php` if he's trying to access it
- The user can log out with a `logout button` 

