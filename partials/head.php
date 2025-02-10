<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT EWINDO</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap");

      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

      html, body {
        scroll-behavior: smooth;
        font-family: "Montserrat", sans-serif;
        position: relative;
        overflow: visible !important;
        z-index: auto;
      }

      #imageModal {
        position: fixed;
        z-index: 99999 !important;
      }

      p, ul, li {
        font-family: "Open Sans", serif;
      }

      .swiper-pagination-bullet {
        background: gray;
        opacity: 0.6;
      }

      .swiper-pagination-bullet-active {
        background: #D1B312;
        opacity: 1;
      }

      .swiper-button-prev-certificate, 
      .swiper-button-next-certificate {
        color: #D1B312;
      }

      /* .swiper-slide {
        opacity: 0.4;
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        transform: scale(0.8);
      } */

      .swiper-slide-active {
        opacity: 1;
        transform: scale(1);
        /* z-index: 10; */
      }

      .swiper-wrapper {
        transition-timing-function: linear;
      }

      .swiper-slide img {
        max-width: 100%;
        display: block;
      }
      /* Vanilla CSS for flip card */
      .card {
        perspective: 800px;
      }
      .card__content {
        transform-style: preserve-3d;
      }
      .card:hover .card__content {
        transform: rotateY(0.5turn);
      }

      .card__front,
      .card__back {
        backface-visibility: hidden;
      }
      .card__back {
        transform: rotateY(0.5turn);
      }

      .certificate-placeholder {
        width: 256px;
        height: 352px;
        background-color: #eee; /* Light gray background */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px dashed #ccc; /* Dashed border */
        color: #999; /* Light gray text */
        font-size: 1.2rem;
      }

      header {
        z-index: 20 !important;
      }

      .fixed-nav {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        z-index: 15 !important;
      }
    </style>
  </head>
  <body>