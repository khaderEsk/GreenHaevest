<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Test</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- تأكد من أن ملف CSS مرتبط -->
</head>
<body>

<!-- Loader overlay -->
<div id="loader-overlay" class="loader-overlay">
    <div class="loading-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

<script>
// وظائف عرض وإخفاء الـ loader
function showLoader() {
    const loaderOverlay = document.getElementById('loader-overlay');
    loaderOverlay.classList.add('show');
}

function hideLoader() {
    const loaderOverlay = document.getElementById('loader-overlay');
    loaderOverlay.classList.remove('show');
}

// عند الضغط على زر "Login"
document.getElementById('login-submit').addEventListener('click', function(event) {
    event.preventDefault(); // منع الإرسال الفوري للفورم
    showLoader(); // عرض الـ loader

    // الانتظار 3 ثواني قبل إخفاء الـ loader
    setTimeout(function() {
        hideLoader();
        document.querySelector('.login-form').submit(); // أرسل الفورم بعد الانتظار
    }, 3000); // 3 ثواني
});

// عند الضغط على زر "Signup"
document.getElementById('signup-submit').addEventListener('click', function(event) {
    event.preventDefault(); // منع الإرسال الفوري للفورم
    showLoader(); // عرض الـ loader

    // الانتظار 3 ثواني قبل إخفاء الـ loader
    setTimeout(function() {
        hideLoader();
        document.querySelector('.signup-form').submit(); // أرسل الفورم بعد الانتظار
    }, 3000); // 3 ثواني
});

</script>

<style>
    .loader-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    visibility: hidden;
}

.loading-dots {
    display: flex;
    gap: 10px;
}

.dot {
    width: 20px;
    height: 20px;
    background-color: #28a745;
    border-radius: 50%;
    animation: bounce 1s infinite ease-in-out;
}

.dot:nth-child(2) {
    animation-delay: 0.2s;
}

.dot:nth-child(3) {
    animation-delay: 0.4s;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
}

.loader-overlay.show {
    visibility: visible;
}

</style>

</body>
</html>
