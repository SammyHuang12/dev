<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>順心看護 - 台北專業看護推薦指南</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Noto Sans TC', sans-serif;
        color: #333;
        background-color: #f8f9fa;
    }

    /* 導覽列美化 */
    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background: white !important;
    }

    /* 主視覺區 */
    .hero-section {
        background: linear-gradient(rgba(0, 86, 179, 0.8), rgba(0, 86, 179, 0.6)), url('https://shunxintw.com.tw/wp-content/uploads/2026/01/5.png');
        /* 替換為實際大圖 */
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        text-align: center;
    }

    /* 服務卡片設計 */
    .service-card {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .card-icon {
        font-size: 2.5rem;
        color: #0d6efd;
        margin-bottom: 15px;
    }

    /* 表格美化 */
    .table-custom {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .table-custom thead {
        background-color: #0d6efd;
        color: white;
    }

    /* 浮動諮詢按鈕 */
    .floating-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .btn-line {
        background-color: #00c300;
        color: white;
        border-radius: 50px;
        padding: 10px 20px;
        font-weight: bold;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    footer {
        background: #343a40;
        color: white;
        padding: 40px 0;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">順心看護</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">居家看護</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">醫院看護</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">費用行情</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3" href="tel:0972208368">立即撥打</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">2026 台北專業看護推薦指南</h1>
            <p class="lead mb-5">專業守護每一位家人，費用透明、快速媒合，讓長輩在熟悉的環境中順心生活。</p>
            <a href="#pricing" class="btn btn-light btn-lg px-5">查看費用行情</a>
        </div>
    </header>

    <section class="py-5 container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">台北看護 3 大種類</h2>
            <p class="text-muted">根據您的需求，選擇最適合的照護方案</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="card-icon">🏥</div>
                    <h4 class="fw-bold">醫院看護</h4>
                    <p>適用於緊急住院或術後陪病，提供 24 小時專業生活照顧與生理需求協助。</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="card-icon">🏠</div>
                    <h4 class="fw-bold">居家看護</h4>
                    <p>出院後返家休養，提供彈性鐘點或長期全天陪伴，維持熟悉的生活節奏。</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="card-icon">🌏</div>
                    <h4 class="fw-bold">外籍看護</h4>
                    <p>適合長期失能且符合巴氏量表資格的家庭，月預算較低，提供穩定照護。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="bg-white py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">台北看護費用行情</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-custom align-middle">
                    <thead>
                        <tr>
                            <th>服務類型</th>
                            <th>費用範圍 (TWD)</th>
                            <th>備註</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">醫院看護 (24H)</td>
                            <td class="text-primary fw-bold">$2,800 – $3,500 / 日</td>
                            <td>視病情嚴重程度調整</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">居家看護 (鐘點)</td>
                            <td class="text-primary fw-bold">$350 – $500 / 小時</td>
                            <td>每次有最低時數限制</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">外籍看護 (月)</td>
                            <td class="text-primary fw-bold">約 $25,000 – $30,000</td>
                            <td>含就安費與健保費等雜支</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="floating-btn">
        <a href="https://line.me/R/ti/p/@081dswtb" class="btn btn-line shadow">
            LINE 諮詢
        </a>
    </div>

    <footer class="text-center text-lg-start">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">順心看護</h5>
                    <p>我們致力於提供台北、新北地區最高品質的照護媒合服務，減輕您的負擔。</p>
                </div>
                <div class="col-md-6 mb-4 text-md-end">
                    <p>連絡電話：0972-208-368</p>
                    <p>地址：新北市板橋區館前西路139號</p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <small>© 2026 順心看護 版權所有</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>