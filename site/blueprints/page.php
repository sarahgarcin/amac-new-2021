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
      {{file}} {{legende}}
    fields:
      file:
        label: nom du fichier
        type: text
      legende:
        label: Légende
        type: text
      type:
        label: Lien ou document ?
        type: radio
        options:
          link: Lien
          doc: Document
        help: Choisir le type de document à ajouter
