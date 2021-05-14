<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Titre
    type:  text
  chapeau:
    label: Chapeau
    type:  markdown
  text:
    label: Texte
    type:  markdown
  infos:
  	label: Infos
  	type: markdown
  ressources:
    label: Ressources
    type: structure
    entry: >
      {{file}} {{link}} <br> {{legende}}
    fields:
      file:
        label: Choisir le pdf 
        type: select
        options: documents
        help : choisir un pdf ici, si la ressource désirée est un document pdf
      link:
        label: Lien 
        type: url
        help : ajouter une url ici, si la ressource désirée est un site web
      legende:
        label: Légende
        type: markdown
