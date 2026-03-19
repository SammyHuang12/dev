<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>台北看護快速媒合</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gradient-to-b from-green-50 via-white to-gray-50 text-gray-800">

<!-- Navbar -->
<header class="bg-white shadow-sm fixed w-full z-40">
  <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="font-bold text-lg text-green-600">CareMatch</div>
    <div class="hidden md:flex gap-6 text-sm">
      <a href="#features">服務特色</a>
      <a href="#process">服務流程</a>
      <a href="#cases">案例</a>
      <a href="#faq">FAQ</a>
    </div>
    <a href="#form" class="bg-green-600 text-white px-4 py-2 rounded-full">立即諮詢</a>
  </div>
</header>

<!-- Hero -->
<section class="pt-32 pb-20">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div>
      <h1 class="text-5xl font-extrabold leading-tight mb-6">
        快速找到安心的<br>
        <span class="text-green-600">專業看護</span>
      </h1>
      <p class="text-lg text-gray-600 mb-8">2小時內媒合｜價格透明｜全台服務</p>
      <div class="flex gap-4">
        <a href="#form" class="bg-green-600 text-white px-8 py-3 rounded-full shadow-lg hover:scale-105 transition">免費評估</a>
        <a href="#form" class="border px-8 py-3 rounded-full">LINE諮詢</a>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <div class="bg-white p-4 rounded-2xl shadow">✔ 即時媒合</div>
      <div class="bg-white p-4 rounded-2xl shadow">✔ 專業培訓</div>
      <div class="bg-white p-4 rounded-2xl shadow">✔ 彈性服務</div>
      <div class="bg-white p-4 rounded-2xl shadow">✔ 安全審核</div>
    </div>
  </div>
</section>

<!-- Features -->
<section id="features" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-12">服務特色</h2>
    <div class="grid md:grid-cols-4 gap-6">
      <div class="p-6 bg-gray-50 rounded-2xl">
        <i data-lucide="shield-check" class="mx-auto mb-2"></i>
        安全保障
      </div>
      <div class="p-6 bg-gray-50 rounded-2xl">
        <i data-lucide="clock" class="mx-auto mb-2"></i>
        快速媒合
      </div>
      <div class="p-6 bg-gray-50 rounded-2xl">
        <i data-lucide="users" class="mx-auto mb-2"></i>
        專業人員
      </div>
      <div class="p-6 bg-gray-50 rounded-2xl">
        <i data-lucide="dollar-sign" class="mx-auto mb-2"></i>
        價格透明
      </div>
    </div>
  </div>
</section>

<!-- Process -->
<section id="process" class="py-20">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-12">服務流程</h2>
    <div class="grid md:grid-cols-4 gap-6">
      <div class="bg-white p-6 rounded-2xl shadow">填寫需求</div>
      <div class="bg-white p-6 rounded-2xl shadow">專人聯絡</div>
      <div class="bg-white p-6 rounded-2xl shadow">媒合看護</div>
      <div class="bg-white p-6 rounded-2xl shadow">開始服務</div>
    </div>
  </div>
</section>

<!-- Cases -->
<section id="cases" class="py-20 bg-green-50">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12">成功案例</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-2xl shadow">住院緊急安排，3小時內完成</div>
      <div class="bg-white p-6 rounded-2xl shadow">長期照護，穩定服務半年以上</div>
      <div class="bg-white p-6 rounded-2xl shadow">短期支援，解決家庭照護壓力</div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-20">
  <div class="max-w-3xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10">常見問題</h2>
    <div class="space-y-4">
      <div class="bg-white p-4 rounded-xl shadow">看護可以更換嗎？可以，協助安排。</div>
      <div class="bg-white p-4 rounded-xl shadow">多久可以安排？最快2小時。</div>
      <div class="bg-white p-4 rounded-xl shadow">費用怎麼算？透明報價。</div>
    </div>
  </div>
</section>

<!-- Form -->
<section id="form" class="py-20 bg-white">
  <div class="max-w-xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">立即媒合</h2>
    <form class="bg-gray-50 p-8 rounded-3xl shadow space-y-4">
      <input class="w-full border p-3 rounded-xl" placeholder="地點">
      <input class="w-full border p-3 rounded-xl" placeholder="需求時間">
      <input class="w-full border p-3 rounded-xl" placeholder="聯絡電話">
      <button class="w-full bg-green-600 text-white py-3 rounded-xl">送出需求</button>
    </form>
  </div>
</section>

<script>
  lucide.createIcons();
</script>

</body>
</html>
