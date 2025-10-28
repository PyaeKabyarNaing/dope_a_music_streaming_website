<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Aurora Moving Background — Tailwind + CSS</title>
  <!-- Tailwind Play CDN (good for prototyping). For production, include Tailwind in your build. -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Core aurora animations & utility styles */
    :root{
      --a1: 120 80% 55%; /* hue saturation lightness for color stops (H S% L%) */
      --a2: 200 80% 60%;
      --a3: 280 75% 60%;
    }

    .aurora {
      filter: blur(60px) saturate(140%);
      opacity: 0.9;
      mix-blend-mode: screen; /* nice color blending */
      transform: translate3d(0,0,0);
      will-change: transform, opacity;
      pointer-events: none;
    }

    /* Wide flowing streak */
    .aurora-1{
      width: 1400px;
      height: 520px;
      left: -20%;
      top: -10%;
      background: radial-gradient(40% 60% at 20% 40%, hsl(var(--a1) / 0.95), transparent 35%),
                  radial-gradient(50% 70% at 80% 60%, hsl(var(--a2) / 0.7), transparent 40%);
      animation: floatSlow 22s linear infinite, pulse 6s ease-in-out infinite;
      border-radius: 40%;
    }

    /* Narrower vertical ribbon */
    .aurora-2{
      width: 1000px;
      height: 700px;
      right: -10%;
      bottom: -30%;
      background: radial-gradient(45% 50% at 30% 60%, hsl(var(--a2) / 0.95), transparent 30%),
                  radial-gradient(60% 45% at 70% 30%, hsl(var(--a3) / 0.6), transparent 40%);
      animation: float 18s linear infinite reverse, pulse 5.5s ease-in-out 1.2s infinite;
      border-radius: 45%;
    }

    /* Thin oscillating wave */
    .aurora-3{
      width: 900px;
      height: 380px;
      left: 10%;
      bottom: 5%;
      background: radial-gradient(30% 60% at 60% 30%, hsl(var(--a3) / 0.95), transparent 30%),
                  radial-gradient(60% 50% at 20% 70%, hsl(var(--a1) / 0.5), transparent 45%);
      animation: floatSlow 26s linear infinite, pulse 7s ease-in-out 0.6s infinite;
      border-radius: 40%;
    }

    /* small drifting highlights */
    .aurora-mini{
      width: 420px;
      height: 220px;
      right: 15%;
      top: 10%;
      background: radial-gradient(45% 60% at 50% 50%, hsl(var(--a1) / 0.95), transparent 40%);
      animation: floatTiny 12s ease-in-out infinite, pulse 4s ease-in-out 0.3s infinite;
      border-radius: 50%;
      opacity: 0.75;
    }

    /* subtle twinkling stars overlay */
    .stars::before{
      content: "";
      position: absolute;
      inset: 0;
      background-image: radial-gradient(#ffffff22 1px, transparent 1px);
      background-size: 120px 120px;
      opacity: 0.25;
      mix-blend-mode: screen;
      pointer-events: none;
      transform: translateZ(0);
      animation: starDrift 80s linear infinite;
    }

    @keyframes float {
      0%{ transform: translate3d(-8vw, -2vh, 0) rotate(-3deg); }
      50%{ transform: translate3d(6vw, 6vh, 0) rotate(3deg); }
      100%{ transform: translate3d(-8vw, -2vh, 0) rotate(-3deg); }
    }

    @keyframes floatSlow{
      0%{ transform: translate3d(-6vw, -4vh, 0) rotate(0deg); }
      50%{ transform: translate3d(8vw, 8vh, 0) rotate(2deg); }
      100%{ transform: translate3d(-6vw, -4vh, 0) rotate(0deg); }
    }

    @keyframes floatTiny{
      0%{ transform: translate3d(0vw, 0vh, 0) scale(1); }
      25%{ transform: translate3d(-2vw, 1vh, 0) scale(1.04); }
      50%{ transform: translate3d(2vw, -2vh, 0) scale(0.98); }
      75%{ transform: translate3d(-1.5vw, 1.5vh, 0) scale(1.02); }
      100%{ transform: translate3d(0vw, 0vh, 0) scale(1); }
    }

    @keyframes pulse{
      0%{ opacity: 0.75; filter: blur(60px) saturate(120%); }
      50%{ opacity: 1; filter: blur(48px) saturate(160%); }
      100%{ opacity: 0.75; filter: blur(60px) saturate(120%); }
    }

    @keyframes starDrift{
      0%{ transform: translateY(0); }
      50%{ transform: translateY(-40px); }
      100%{ transform: translateY(0); }
    }

    /* Accessibility: reduce motion */
    @media (prefers-reduced-motion: reduce){
      .aurora, .aurora-mini{ animation: none !important; }
      .stars::before{ animation: none !important; }
    }
  </style>
</head>
<body class="min-h-screen bg-black text-white">
  <!-- Container -->
  <div class="relative min-h-screen overflow-hidden bg-black">

    <!-- aurora layers (fluent, blend, blurred) -->
    <div class="absolute aurora aurora-1"></div>
    <div class="absolute aurora aurora-2"></div>
    <div class="absolute aurora aurora-3"></div>
    <div class="absolute aurora aurora-mini"></div>

    <!-- subtle stars / grain overlay -->
    <div class="absolute inset-0 stars pointer-events-none"></div>

    <!-- Content goes here -->
    <main class="relative z-10 flex items-center justify-center min-h-screen p-6">
      <div class="max-w-3xl text-center">
        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight mb-4">Aurora Background</h1>
        <p class="text-lg sm:text-xl opacity-80">Use this animated aurora as a subtle, dreamy background for headers, landing pages, or app hero sections.</p>
      </div>
    </main>

  </div>
</body>
</html>
