<?php if(!defined('KIRBY')) exit ?>

title: Actu
pages: false
files: true
fields:
  title:
    label: Titre
    type:  text
  date:
  	label: Date
  	type: date
  	default: today
  	format: DD/MM/YYYY
  text:
    label: Text
    type:  markdown
  thumb:
    label: Vignette du projet
    type: selector
    mode: single
    sort:	filename
    autoselect: first
    required: false
    types:
      - image
    help: Image de l'actu qui s'affichera comme thumbnail
  accueil:
    label: Actualités à afficher sur la page d'accueil
    type: radio
    default: non
    options:
      oui: Oui
      non: Non
    help: Cochez "Oui" pour que l'actualité apparaisse sur la page d'accueil