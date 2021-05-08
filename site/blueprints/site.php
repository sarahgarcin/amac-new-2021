<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: 
  template: 
    - default
    - projets
fields:
  siteSettings:
    label: Site Settings
    type:  headline
  title:
    label: Title
    type:  title
  author:
    label: Author
    type:  text
  menuproduction: 
    label: Sélectionnez les éléments pour le premier menu
    type: checkboxes
    options: query
    query: site.children.visible
  menuactu: 
    label: Sélectionnez les éléments pour le deuxième menu
    type: checkboxes
    options: query
    query: site.children.visible
  menuequipe: 
    label: Sélectionnez les éléments pour le troisième menu
    type: checkboxes
    options: query 
    query: site.children.visible
  menunewsletter: 
    label: Sélectionnez les éléments pour le quatrième menu
    type: checkboxes
    options: query 
    query: site.children.visible
  description:
    label: Description
    type:  markdown
  complete:
    label: Description Complète
    type:  markdown
  keywords:
    label: Keywords
    type:  tags
  amac:
    label: amac Infos
    type: headline
  amaclogo:
    label: Logo amac
    type: selector
    mode: single
    sort: filename
    autoselect: first
    required: true
    types:
      - image
    help: Logo de amac qui s'affiche dans l'en-tête du site
  copyright:
    label: Copyright
    type:  text
  socialNetworkSettings:
    label: Paramètres pour les réseaux sociaux
    type:  headline
  ogimage:
    label: Vignette pour les réseaux sociaux 
    type:  url
    help:  URL de l'image vignette qui représentera votre site sur les réseaux sociaux..
  socialnetworks:
    label: Réseaux sociaux
    type:  structure
    entry: >
      <i class="fi-{{icon}}"></i>
      {{link}}
    fields:
      icon:
        label: Icon
        type:  text
        width: 1/2
        icon:  share-alt
      link:
        label: Link
        type:  text
        width: 1/2
        icon:  link
