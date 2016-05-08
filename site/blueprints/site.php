<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  facebook:
    label: Facebook
    type:  Url
  instagram:
    label: Instagram
    type:  Url
  email:
    label: Email
    type:  email
  address:
    label: Address
    type: text
  city:
    label: City Province Postal
    type: text
  googlemaps:
    label: Google Maps link
    type: Url