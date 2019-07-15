# Sitemap Generator

Version 1.0.0

## Description
Sitemap Generator is a simple tool for generating xml sitemaps.

* The front-end provides several buttons for the supported languages

* It only uses some dummy json data, but the functionality will be extended 

* For licensing information, please read LICENSE.md

## Prerequisites
* Apache with mod_rewrite activated
* PHP 5.6+ 
* nodejs, npm

## Installation

1. Clone the git repository
2. Install dependencies (npm install)
3. Bundle assets (npm run build)
4. Open the application in your local browser
5. Click on any of the buttons to generate the sitemap

## Customization

Right now the data used to generate the xml sitemap chan be changed by modifying Sitemap/data.json, which contains the dummy json data. The tool could potentilly be updated to use an external data source like an external api or a local file, as opposed to using a static file on the server.
