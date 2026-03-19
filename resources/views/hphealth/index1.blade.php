<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>台北看護快速媒合</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, #e0f2ff, #ffffff, #f8fafc);
      color: #1f2937;
      font-family: 'Noto Sans TC', sans-serif;
    }
    .hero-title {
      font-size: 3rem;
      font-weight: 700;
    }
    .feature-card, .process-card, .case-card, .faq-card {
      border-radius: 1.5rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      padding: 2rem;
      background-color: #ffffff;
      border: 1px solid #dbeafe;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .feature-card:hover, .process-card:hover, .case-card:hover, .faq-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }
    .btn-primary {
      background-color: #2563eb;
      border-color: #2563eb;
      border-radius: 50px;
      padding: 0.75rem 2rem;
    }
    .btn-primary:hover {
      background-color: #1d4ed8;
      border-color: #1d4ed8;
    }
    .navbar-brand {
      font-weight: 700;
      color: #2563eb !important;
    }
    section {
      padding: 6rem 0;
    }
    .bg-light-blue {
      background-color: #eff6ff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">CareMatch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#features">服務特色</a></li>
        <li class="nav-item"><a class="nav-link" href="#process">服務流程</a></li>
        <li class="nav-item"><a class="nav-link" href="#cases">案例</a></li>
        <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
        <li class="nav-item"><a class="btn btn-primary ms-3" href="#form">立即諮詢</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="hero-title mb-4">2小時內找到<br><span class="text-primary">專業醫療看護</span></h1>
        <p class="mb-4">即時媒合｜醫療級標準｜安心照護</p>
        <a href="#form" class="btn btn-primary me-3">免費評估</a>
        <a href="#form" class="btn btn-outline-primary">LINE諮詢</a>
      </div>
      <div class="col-md-6">
        <div class="row g-3">
          <div class="col-6 feature-card text-center">✔ 即時媒合</div>
          <div class="col-6 feature-card text-center">✔ 專業培訓</div>
          <div class="col-6 feature-card text-center">✔ 彈性服務</div>
          <div class="col-6 feature-card text-center">✔ 安全審核</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section id="features" class="bg-light-blue">
  <div class="container text-center">
    <h2 class="mb-5 text-primary">服務特色</h2>
    <div class="row g-4">
      <div class="col-md-3 feature-card">安全保障</div>
      <div class="col-md-3 feature-card">快速媒合</div>
      <div class="col-md-3 feature-card">專業人員</div>
      <div class="col-md-3 feature-card">價格透明</div>
    </div>
  </div>
</section>

<!-- Process -->
<section id="process">
  <div class="container text-center">
    <h2 class="mb-5 text-primary">服務流程</h2>
    <div class="row g-4">
      <div class="col-md-3 process-card">填寫需求</div>
      <div class="col-md-3 process-card">專人聯絡</div>
      <div class="col-md-3 process-card">媒合看護</div>
      <div class="col-md-3 process-card">開始服務</div>
    </div>
  </div>
</section>

<!-- Cases -->
<section id="cases" class="bg-light-blue">
  <div class="container text-center">
    <h2 class="mb-5 text-primary">成功案例</h2>
    <div class="row g-4">
      <div class="col-md-4 case-card">住院緊急安排，3小時內完成</div>
      <div class="col-md-4 case-card">長期照護，穩定服務半年以上</div>
      <div class="col-md-4 case-card">短期支援，解決家庭壓力</div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="container text-center">
    <h2 class="mb-5 text-primary">常見問題</h2>
    <div class="row g-3">
      <div class="col-md-4 faq-card">看護可以更換嗎？可以協助安排。</div>
      <div class="col-md-4 faq-card">多久可以安排？最快2小時。</div>
      <div class="col-md-4 faq-card">費用怎麼算？透明報價。</div>
    </div>
  </div>
</section>

<!-- Form -->
<section id="form" class="pt-5 pb-5">
  <div class="container">
    <h2 class="text-center mb-4 text-primary">立即媒合</h2>
    <form class="row g-3 justify-content-center">
      <div class="col-md-10">
        <input type="text" class="form-control form-control-lg" placeholder="地點">
      </div>
      <div class="col-md-10">
        <input type="text" class="form-control form-control-lg" placeholder="需求時間">
      </div>
      <div class="col-md-10">
        <input type="text" class="form-control form-control-lg" placeholder="聯絡電話">
      </div>
      <div class="col-md-10 text-center">
        <button type="submit" class="btn btn-primary btn-lg">送出需求</button>
      </div>
    </form>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
