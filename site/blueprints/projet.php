<?php if(!defined('KIRBY')) exit ?>

title: Projet
pages: false
files: 
  fields:
    caption:
      label: Légende
      type: markdown
fields:
  title:
    label: Titre
    type: text
  date:
    label: Date
    type: date
    default: today
    format: DD/MM/YYYY
  text:
    label: Texte
    type: markdown
  thumb:
    label: Vignette du projet
    type: selector
    mode: single
    sort:	filename
    autoselect: first
    required: true
    types:
      - image
    help: Image du projet qui s'affichera comme thumbnail
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
  accueil:
    label: Projets à afficher sur la page d'accueil
    type: radio
    default: non
    options:
      oui: Oui
      non: Non
    help: Cochez "Oui" pour que le projet apparaissent sur la page d'accueil