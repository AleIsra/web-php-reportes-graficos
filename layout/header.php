
<?php

include('../../config/helpers.php');

?>

<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v5.5.0
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2026 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<html lang="es">
  <head>
    <base href="./../../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Sistema de Administración</title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/examples.css" rel="stylesheet">
    
    <script src="js/config.js"></script>
    <script src="js/color-modes.js"></script>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand me-auto">
          <svg role="img" aria-label="CoreUI Logo Full" class="sidebar-brand-full" width="88" height="32" viewBox="0 0 312 115">
            <g style="fill: currentColor">
              <path d="M96 24.124 57 1.608a12 12 0 0 0-12 0L6 24.124a12.034 12.034 0 0 0-6 10.393V79.55a12.033 12.033 0 0 0 6 10.392l39 22.517a12 12 0 0 0 12 0l39-22.517a12.033 12.033 0 0 0 6-10.392V34.517a12.034 12.034 0 0 0-6-10.393ZM94 79.55a4 4 0 0 1-2 3.464l-39 22.517a4 4 0 0 1-4 0L10 83.014a4 4 0 0 1-2-3.464V34.517a4 4 0 0 1 2-3.464L49 8.536a4 4 0 0 1 4 0l39 22.517a4 4 0 0 1 2 3.464V79.55Z" />
              <path d="M74.022 70.071h-2.866a4 4 0 0 0-1.925.494L51.95 80.05 32 68.531V45.554l19.95-11.519 17.29 9.455a4 4 0 0 0 1.919.49h2.863a2 2 0 0 0 2-2v-2.71a2 2 0 0 0-1.04-1.756L55.793 27.02a8.04 8.04 0 0 0-7.843.09L28 38.626a8.025 8.025 0 0 0-4 6.929V68.53a8 8 0 0 0 4 6.928l19.95 11.519a8.043 8.043 0 0 0 7.843.088l19.19-10.532a2 2 0 0 0 1.038-1.753v-2.71a2 2 0 0 0-2-2Z" />
              <g transform="translate(118 33)">
                <path d="M50.745.428c-8.28.01-14.99 6.72-15 15v17.277c0 8.285 6.715 15 15 15 8.284 0 15-6.715 15-15V15.428c-.01-8.28-6.72-14.99-15-15Zm7 32.277a7 7 0 0 1-14 0V15.428a7 7 0 0 1 14 0v17.277ZM14.079 8.488a7.01 7.01 0 0 1 7.868 6.075.99.99 0 0 0 .984.865h6.03a1.01 1.01 0 0 0 1-1.097C29.354 6.206 22.38.046 14.243.447 6.161 1-.086 7.762 0 15.864V32.27c-.087 8.101 6.161 14.864 14.244 15.416 8.137.401 15.11-5.759 15.716-13.883a1.01 1.01 0 0 0-.999-1.098h-6.03a.99.99 0 0 0-.985.865 7.01 7.01 0 0 1-7.868 6.076A7.164 7.164 0 0 1 8 32.461V15.672a7.164 7.164 0 0 1 6.079-7.184ZM96.922 27.994a12.158 12.158 0 0 0 7.184-11.077v-3.7c0-6.71-5.44-12.15-12.149-12.15H75a1 1 0 0 0-1 1v44a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-17h6.621l7.916 17.413a1 1 0 0 0 .91.587h6.591a1 1 0 0 0 .91-1.414l-8.026-17.659Zm-.816-11.077a4.154 4.154 0 0 1-4.148 4.15h-9.852v-12h9.852a4.154 4.154 0 0 1 4.148 4.15v3.7ZM139 1.067h-26a1 1 0 0 0-1 1v44a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-19v-12h13a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-13v-10h19a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1ZM177 1.067h-6a1 1 0 0 0-1 1v22.647a7.007 7.007 0 1 1-14 0V2.067a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v22.647a15.003 15.003 0 1 0 30 0V2.067a1 1 0 0 0-1-1Z" />
                <rect width="8" height="38" x="186" y="1.067" rx="1" />
              </g>
            </g>
          </svg>
          <svg role="img" aria-label="CoreUI Logo Signet" class="sidebar-brand-narrow" width="88" height="32" viewBox="0 0 102 115">
            <g style="fill: currentColor">
              <path d="M96 24.124 57 1.608a12 12 0 0 0-12 0L6 24.124a12.034 12.034 0 0 0-6 10.393V79.55a12.033 12.033 0 0 0 6 10.392l39 22.517a12 12 0 0 0 12 0l39-22.517a12.033 12.033 0 0 0 6-10.392V34.517a12.034 12.034 0 0 0-6-10.393ZM94 79.55a4 4 0 0 1-2 3.464l-39 22.517a4 4 0 0 1-4 0L10 83.014a4 4 0 0 1-2-3.464V34.517a4 4 0 0 1 2-3.464L49 8.536a4 4 0 0 1 4 0l39 22.517a4 4 0 0 1 2 3.464V79.55Z" />
              <path d="M74.022 70.071h-2.866a4 4 0 0 0-1.925.494L51.95 80.05 32 68.531V45.554l19.95-11.519 17.29 9.455a4 4 0 0 0 1.919.49h2.863a2 2 0 0 0 2-2v-2.71a2 2 0 0 0-1.04-1.756L55.793 27.02a8.04 8.04 0 0 0-7.843.09L28 38.626a8.025 8.025 0 0 0-4 6.929V68.53a8 8 0 0 0 4 6.928l19.95 11.519a8.043 8.043 0 0 0 7.843.088l19.19-10.532a2 2 0 0 0 1.038-1.753v-2.71a2 2 0 0 0-2-2Z" />
            </g>
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"></button>
      </div>

      <!-- Menú Lateral -->
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item">
          <a class="nav-link" href="modules/home/index.php">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M425.706 142.294A240 240 0 0 0 16 312v88h144v-32H48v-56c0-114.691 93.309-208 208-208s208 93.309 208 208v56H352v32h144v-88a238.43 238.43 0 0 0-70.294-169.706" class="ci-primary" />
              <path fill="var(--ci-primary-color, currentcolor)" d="M80 264h32v32H80zm160-136h32v32h-32zm-104 40h32v32h-32zm264 96h32v32h-32zm-102.778 71.1 69.2-144.173-28.85-13.848-69.183 144.135a64.141 64.141 0 1 0 28.833 13.886M256 416a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32" class="ci-primary" />
            </svg>
            Dashboard
            <span class="badge badge-sm bg-info ms-auto">NEW</span>
          </a>
        </li>

        <li class="nav-title">UI Elements</li>

        <!-- Módulo Usuarios -->
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="m491.693 256.705-54.957-49.461 16.407-13.406a80.5 80.5 0 0 0 18.363-21.522c18.148-31.441 12.867-70.042-13.144-96.052s-64.612-31.291-96.051-13.142a80.5 80.5 0 0 0-21.52 18.362l-13.408 16.407-49.461-54.956-.579-.611a24.03 24.03 0 0 0-33.941 0l-65.6 65.605 1.19 23.7 33.108 27.056a48.6 48.6 0 0 1 11.079 12.889c10.807 18.722 7.57 41.8-8.056 57.426s-38.7 18.862-57.426 8.058a48.7 48.7 0 0 1-12.9-11.086l-27.047-33.1-23.7-1.189-71.26 71.26a24 24 0 0 0 0 33.942l175.357 175.359a80 80 0 0 0 113.138 0L492.3 291.225a24.03 24.03 0 0 0 0-33.94ZM288.657 449.617a48 48 0 0 1-67.883 0L51.069 279.911l53.1-53.095 15.91 19.473.1.119a80.5 80.5 0 0 0 21.521 18.363c31.441 18.149 70.041 12.867 96.052-13.144s31.291-64.61 13.143-96.05a80.5 80.5 0 0 0-18.363-21.521l-19.591-16.01 47.124-47.124 56.018 62.241 24.282-.579 25.062-30.67a48.6 48.6 0 0 1 12.888-11.078c18.722-10.807 41.8-7.569 57.426 8.056s18.864 38.7 8.057 57.426a48.6 48.6 0 0 1-11.079 12.889l-30.67 25.061-.58 24.282 62.243 56.018Z" class="ci-primary" />
            </svg>
            Usuarios
          </a>
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/users/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Crear Usuario
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/users/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Lista de Usuarios

              </a>
            </li>
          </ul>
        </li>

        <!-- Módulo Producto -->
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M112 152h288v32H112zm0 88h288v32H112zm0 88h152v32H112z" class="ci-primary" />
              <path fill="var(--ci-primary-color, currentcolor)" d="M480 48H32v416h448Zm-32 384H64V80h384Z" class="ci-primary" />
            </svg>
            Producto
          </a>
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/products/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Listar Productos
                
              </a>
            </li>
          </ul>
        </li>

         <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="m491.693 256.705-54.957-49.461 16.407-13.406a80.5 80.5 0 0 0 18.363-21.522c18.148-31.441 12.867-70.042-13.144-96.052s-64.612-31.291-96.051-13.142a80.5 80.5 0 0 0-21.52 18.362l-13.408 16.407-49.461-54.956-.579-.611a24.03 24.03 0 0 0-33.941 0l-65.6 65.605 1.19 23.7 33.108 27.056a48.6 48.6 0 0 1 11.079 12.889c10.807 18.722 7.57 41.8-8.056 57.426s-38.7 18.862-57.426 8.058a48.7 48.7 0 0 1-12.9-11.086l-27.047-33.1-23.7-1.189-71.26 71.26a24 24 0 0 0 0 33.942l175.357 175.359a80 80 0 0 0 113.138 0L492.3 291.225a24.03 24.03 0 0 0 0-33.94ZM288.657 449.617a48 48 0 0 1-67.883 0L51.069 279.911l53.1-53.095 15.91 19.473.1.119a80.5 80.5 0 0 0 21.521 18.363c31.441 18.149 70.041 12.867 96.052-13.144s31.291-64.61 13.143-96.05a80.5 80.5 0 0 0-18.363-21.521l-19.591-16.01 47.124-47.124 56.018 62.241 24.282-.579 25.062-30.67a48.6 48.6 0 0 1 12.888-11.078c18.722-10.807 41.8-7.569 57.426 8.056s18.864 38.7 8.057 57.426a48.6 48.6 0 0 1-11.079 12.889l-30.67 25.061-.58 24.282 62.243 56.018Z" class="ci-primary" />
            </svg>
            Clientes
          </a>
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/clients/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Crear Cliente
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/clients/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Lista de Clientes

              </a>
            </li>
          </ul>
        </li>

        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="m491.693 256.705-54.957-49.461 16.407-13.406a80.5 80.5 0 0 0 18.363-21.522c18.148-31.441 12.867-70.042-13.144-96.052s-64.612-31.291-96.051-13.142a80.5 80.5 0 0 0-21.52 18.362l-13.408 16.407-49.461-54.956-.579-.611a24.03 24.03 0 0 0-33.941 0l-65.6 65.605 1.19 23.7 33.108 27.056a48.6 48.6 0 0 1 11.079 12.889c10.807 18.722 7.57 41.8-8.056 57.426s-38.7 18.862-57.426 8.058a48.7 48.7 0 0 1-12.9-11.086l-27.047-33.1-23.7-1.189-71.26 71.26a24 24 0 0 0 0 33.942l175.357 175.359a80 80 0 0 0 113.138 0L492.3 291.225a24.03 24.03 0 0 0 0-33.94ZM288.657 449.617a48 48 0 0 1-67.883 0L51.069 279.911l53.1-53.095 15.91 19.473.1.119a80.5 80.5 0 0 0 21.521 18.363c31.441 18.149 70.041 12.867 96.052-13.144s31.291-64.61 13.143-96.05a80.5 80.5 0 0 0-18.363-21.521l-19.591-16.01 47.124-47.124 56.018 62.241 24.282-.579 25.062-30.67a48.6 48.6 0 0 1 12.888-11.078c18.722-10.807 41.8-7.569 57.426 8.056s18.864 38.7 8.057 57.426a48.6 48.6 0 0 1-11.079 12.889l-30.67 25.061-.58 24.282 62.243 56.018Z" class="ci-primary" />
            </svg>
            Proveedor
          </a>
          <ul class="nav-group-items compact">
            <li class="nav-item">
              <a class="nav-link" href="modules/proveedor/create.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Crear Proveedor
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="modules/proveedor/index.php">
                <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                Lista de Proveedores

              </a>
            </li>
          </ul>
        </li>


      </ul>

      <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>

    <!-- Wrapper principal -->
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px">
            <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M80 96h352v32H80zm0 144h352v32H80zm0 144h352v32H80z" class="ci-primary" />
            </svg>
          </button>

          <ul class="header-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="m450.27 348.569-43.67-80.624V184c0-83.813-68.187-152-152-152s-152 68.187-152 152v83.945l-43.672 80.623A24 24 0 0 0 80.031 384h86.935a89 89 0 0 0-.367 8 88 88 0 0 0 176 0c0-2.7-.129-5.364-.367-8h86.935a24 24 0 0 0 21.1-35.431ZM310.6 392a56 56 0 1 1-111.419-8h110.837a56 56 0 0 1 .582 8M93.462 352l41.138-75.945V184a120 120 0 0 1 240 0v92.055L415.736 352Z" class="ci-primary" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M136 24H16v120h120Zm-32 88H48V56h56Zm32 88H16v120h120Zm-32 88H48v-56h56Zm32 88H16v120h120Zm-32 88H48v-56h56Zm72-440.002h320v32H176zm0 88h256v32H176zm0 88h320v32H176zm0 88h256v32H176zm0 176h256v32H176zm0-88h320v32H176z" class="ci-primary" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M274.6 25.623a32.01 32.01 0 0 0-37.2 0L16 183.766V496h480V183.766ZM464 402.693 339.97 322.96 464 226.492ZM256 51.662 454.429 193.4 311.434 304.615 256 268.979l-55.434 35.636L57.571 193.4ZM48 226.492l124.03 96.468L48 402.693ZM464 464H48v-23.265l208-133.714 208 133.714Z" class="ci-primary" />
                </svg>
              </a>
            </li>
          </ul>

          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <!-- Selector de Tema (Oscuro/Claro) -->
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    Auto
                  </button>
                </li>
              </ul>
            </li>

            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>

           <!-- Avatar del Usuario -->
<li class="nav-item dropdown">
  <a class="nav-link py-0 pe-0 d-flex align-items-center gap-2" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <div class="avatar avatar-md">
  
 
      <img class="avatar-img" src="storage/users/<?=$user['id']?>.png?v=<?=time()?>" alt="Avatar">
    </div>
    <span class="d-none d-md-inline-block text-body fw-semibold"><?=$user['nombre']?></span>
  </a>
            
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div>
                <a class="dropdown-item" href="#">Updates <span class="badge badge-sm bg-info ms-2">8</span></a>
                <a class="dropdown-item" href="#">Messages <span class="badge badge-sm bg-success ms-2">42</span></a>
                <a class="dropdown-item" href="#">Tasks</a>
                <a class="dropdown-item" href="#">Comments</a>
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">Settings</div>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Cambiar mi Contraseña</a>
                <a class="dropdown-item" href="modules/acount/profile.php">Cambiar mi Avatar</a>
                <a class="dropdown-item" href="#">Projects</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Lock Account</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>

        <!-- Breadcrumb -->
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item active"><span>Home</span></li>
            </ol>
          </nav>
        </div>
      </header>

      <div class="body flex-grow-1">
        <div class="container-lg px-4">