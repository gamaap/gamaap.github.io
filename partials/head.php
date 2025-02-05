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
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <style>
      .swiper-slide {
        opacity: 0.4;
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        transform: scale(0.8);
      }

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
    </style>
  </head>
  <body>