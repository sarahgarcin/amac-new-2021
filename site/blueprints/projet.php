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
  accueil:
    label: Projets à afficher sur la page d'accueil
    type: radio
    default: non
    options:
      oui: Oui
      non: Non
    help: Cochez "Oui" pour que le projet apparaissent sur la page d'accueil