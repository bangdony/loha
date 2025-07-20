<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untuk Kamu 💖</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS tetap sama seperti sebelumnya */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f5, #ffcce0);
            min-height: 100vh;
            overflow-x: hidden;
            color: #333;
        }
        /* ... (CSS lainnya tetap sama) ... */
    </style>
</head>
<body>

<div id="backgroundHearts"></div>
<div id="floatingHearts"></div>

<div class="container">
    <div class="photo-frame">
        <!-- Ganti dengan URL gambar online jika tidak mau upload gambar -->
        <img src="https://i.imgur.com/EXAMPLE.jpg" alt="Foto Kamu" onerror="this.src='https://via.placeholder.com/220'">
    </div>
    
    <h1>Untuk Kamu 💖</h1>
    
    <div class="heart-icon">
        <i class="fas fa-heart"></i>
    </div>
    
    <div class="message">
        Hai Sayang,<br>
        Setiap hari bersamamu adalah anugerah terindah dalam hidupku.<br>
        Kamu membuat dunia terasa lebih berwarna...<br><br>
        <strong>Maukah kamu menjadi pacarku? 🌹</strong>
    </div>
    
    <div class="buttons">
        <button class="btn-confess btn-yes animate__animated animate__pulse animate__infinite" id="yesBtn">
            <i class="fas fa-heart"></i> Mau Dong!
        </button>
        <button class="btn-confess btn-no" id="noBtn">
            <i class="fas fa-times"></i> Nggak Dulu
        </button>
    </div>
</div>

<script>
    // Fungsi sederhana tanpa dependency eksternal
    document.addEventListener('DOMContentLoaded', function() {
        // Background hearts
        for (let i = 0; i < 30; i++) {
            const heart = document.createElement('div');
            heart.innerHTML = '❤️';
            heart.style.position = 'fixed';
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.top = '-10%';
            heart.style.fontSize = '24px';
            heart.style.color = 'rgba(255, 107, 157, 0.3)';
            heart.style.animation = `fall ${Math.random() * 10 + 10}s linear ${Math.random() * 10}s infinite`;
            heart.style.zIndex = '0';
            document.getElementById('backgroundHearts').appendChild(heart);
        }

        // Floating hearts
        const hearts = ['❤️', '💖', '💕', '💗', '💓', '💘'];
        for (let i = 0; i < 15; i++) {
            const heart = document.createElement('div');
            heart.innerHTML = hearts[Math.floor(Math.random() * hearts.length)];
            heart.style.position = 'fixed';
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.top = Math.random() * 100 + 'vh';
            heart.style.fontSize = (Math.random() * 20 + 15) + 'px';
            heart.style.animation = `float ${Math.random() * 5 + 5}s ease-in-out ${Math.random() * 5}s infinite`;
            heart.style.opacity = Math.random() * 0.5 + 0.3;
            document.getElementById('floatingHearts').appendChild(heart);
        }

        // Button events
        document.getElementById('yesBtn').addEventListener('click', function() {
            alert('Yeay! Terima kasih sudah mau menerima aku! ❤️');
        });

        document.getElementById('noBtn').addEventListener('mouseover', function() {
            const btn = this;
            btn.style.position = 'absolute';
            btn.style.left = Math.random() * 80 + '%';
            btn.style.top = Math.random() * 80 + '%';
            
            const responses = ['Yakin?', 'Jangan dong', 'Aku sedih lho', 'Coba dipikir lagi'];
            btn.innerHTML = `<i class="fas fa-times"></i> ${responses[Math.floor(Math.random() * responses.length)]}`;
            
            setTimeout(() => {
                btn.style.position = '';
                btn.style.left = '';
                btn.style.top = '';
                btn.innerHTML = '<i class="fas fa-times"></i> Nggak Dulu';
            }, 2000);
        });
    });

    // Fall animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fall {
            to { transform: translateY(110vh) rotate(360deg); opacity: 0; }
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(10px, -10px) rotate(5deg); }
            50% { transform: translate(-5px, 5px) rotate(-5deg); }
            75% { transform: translate(5px, -5px) rotate(3deg); }
        }
    `;
    document.head.appendChild(style);
</script>

</body>
</html>
