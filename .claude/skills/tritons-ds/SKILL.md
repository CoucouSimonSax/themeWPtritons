---
name: tritons-ds
description: Règles du design system Les Tritons pour le thème bloc WordPress. À charger avant toute modification de theme.json, templates/, parts/, patterns/ ou style.css — c'est-à-dire avant toute intervention visuelle sur le thème.
---

# Design system Les Tritons

Thème bloc sur mesure, WordPress 7.0, `theme.json` version 3.
Interlocuteur : Simon, **pas développeur**. Expliquer en français, sans jargon
non défini. Une étape à la fois, avec un point de vérification visuel à chaque
fois. Ne pas produire dix fichiers d'un coup.

## Les six règles non négociables

1. **Toute valeur visuelle vient de `theme.json`.** Couleurs, polices, tailles,
   espacements. Jamais de valeur écrite en dur dans un fichier. Si une valeur
   doit être répétée dans plusieurs blocs, c'est le signe qu'elle manque dans
   `theme.json` — l'y ajouter plutôt que la recopier.
2. **Markup de blocs Gutenberg uniquement.** Jamais de bloc « HTML
   personnalisé » (`wp:html`) : il rend la zone opaque dans l'éditeur et le
   site devient inéditable par quelqu'un d'autre que Simon. Pour un élément
   décoratif, utiliser un bloc groupe portant une classe et le dessiner en CSS.
3. **Un pattern par section réutilisable**, dans `/patterns/`, préfixé
   `tritons/`.
4. **Textes d'interface en français**, y compris les titres de gabarits et de
   patterns déclarés dans `theme.json`.
5. **Les états de survol se définissent dans `theme.json`.** WordPress 7.0 gère
   `:hover`, `:focus` et `:active` directement sur les blocs. Pas de CSS pour ça.
6. **`WP_DEBUG` à `true` en développement**, sinon les modifications de
   `theme.json` sont mises en cache une trentaine de secondes.
   Avec Playground : `--define-bool WP_DEBUG true`.

## Principes de design, hérités du DS

Ces contraintes ne sont pas négociables non plus, mais leurs **valeurs** vivent
dans `theme.json` — ne jamais les recopier ici.

- **Aucune couleur.** Le système est en niveaux de gris purs. La hiérarchie
  vient de la valeur, de la graisse et du trait, jamais d'une teinte. Un
  élément actif se souligne, il ne se colore pas.
- **Une seule famille typographique**, différenciée par graisse, taille et
  interlettrage.
- La palette par défaut de WordPress est désactivée : n'ajouter aucune couleur
  hors palette, même « juste pour tester ».

## Pièges vérifiés sur ce projet

- **Slugs sans chiffre initial.** WordPress réécrit silencieusement un slug qui
  mêle chiffre et lettre (`4xl` devient `4-xl`), et les références au preset
  pointent alors dans le vide, sans le moindre message d'erreur. Utiliser
  `huge`, `xxxl`, etc.
- **`style.css` n'est pas chargé automatiquement** dans un thème bloc. Il sert
  d'en-tête d'identification ; son CSS n'arrive sur la page que si
  `functions.php` le réclame.
- **Les sept espacements par défaut de WordPress** (`--wp--preset--spacing--20`
  à `80`) restent publiés dans le CSS même avec `defaultSpacingSizes: false`.
  Ce réglage ne filtre que le sélecteur de l'éditeur. Ils sont inutilisés :
  ne pas chercher à les supprimer.
- **Les règles issues de `theme.json` perdent contre certains blocs.** WordPress
  les enveloppe dans `:where()`, dont la priorité est nulle par construction.
  La navigation, par exemple, impose `color: inherit` à ses liens via une
  classe doublée : aucune consigne `elements.link` ne peut la dépasser. Colorer
  alors le **bloc** (`styles.blocks`), dont les liens héritent.
- **`ch` n'est jamais une largeur de mise en page.** L'unité dépend de la
  police de l'élément qui l'applique : un titre à 48 px et un paragraphe à
  17 px n'obtiennent pas la même largeur. Le DS le documente désormais.
- **Les patterns ne sont recensés qu'au démarrage.** Créer `patterns/` pendant
  que Playground tourne ne suffit pas : il faut relancer le serveur.
- **Le logo ne s'inverse pas en CSS.** Le DS fournit un fichier blanc dédié et
  proscrit `filter: invert()`. Il fournit aussi deux dessins selon la taille :
  la variante « small » en dessous de 64 px, le dessin complet au-dessus.
- **La médiathèque ne voyage pas avec Git.** Tout média référencé par le thème
  (logo du site) devra être téléversé à la main sur le serveur.

## Avant de dire que c'est fait

Ne jamais conclure sur la seule lecture des fichiers. Vérifier le rendu réel :

1. `grep -rn "wp:html" parts/ templates/ patterns/` — doit ne rien retourner.
2. Vérifier que chaque slug de couleur, taille ou espacement utilisé dans le
   markup existe bien dans `theme.json`.
3. Recharger la page et lire les valeurs **calculées** par le navigateur, pas
   celles écrites dans le fichier. Un preset absent ne produit aucune erreur :
   il produit silencieusement zéro.

## L'état réel de theme.json, à l'instant

Ce qui suit est injecté à chaque chargement de la skill : c'est la source de
vérité, jamais une copie.

!`cat theme.json`

**Si le bloc ci-dessus est vide ou affiche la commande sans l'exécuter**,
l'injection n'a pas eu lieu : lire `theme.json` directement avant toute
modification. Ne jamais travailler de mémoire sur les tokens.
