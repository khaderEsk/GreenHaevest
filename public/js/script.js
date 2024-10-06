// شريط جانبي تسجيل الدخول
const sidebarLogin = document.getElementById('sidebar');
const loginBtn = document.getElementById('loginBtn');
const closeLoginBtn = document.getElementById('close-btn');


// شريط جانبي إنشاء حساب
const sidebarSignup = document.getElementById('sidebar-signup');
const signupBtn = document.getElementById('signupBtn');
const closeSignupBtn = document.getElementById('close-btn1');

// عند النقر على زر تسجيل الدخول
loginBtn.addEventListener('click', function () {
    sidebarLogin.classList.remove('closed'); // فتح شريط تسجيل الدخول
    sidebarSignup.classList.add('closed'); // إغلاق شريط إنشاء الحساب
    loginBtn.style.display = 'none';
    signupBtn.style.display = 'none';
    closeLoginBtn.style.display = 'block';
});

// عند النقر على زر إنشاء حساب
signupBtn.addEventListener('click', function () {
    sidebarSignup.classList.remove('closed'); // فتح شريط إنشاء الحساب
    sidebarLogin.classList.add('closed'); // إغلاق شريط تسجيل الدخول
    loginBtn.style.display = 'none';
    signupBtn.style.display = 'none';
    closeSignupBtn.style.display = 'block';
});

// عند النقر على زر X لإغلاق شريط تسجيل الدخول
closeLoginBtn.addEventListener('click', function () {
    sidebarLogin.classList.add('closed');
    closeLoginBtn.style.display = 'none';
    loginBtn.style.display = 'block';
    signupBtn.style.display = 'block';
});

// عند النقر على زر X لإغلاق شريط إنشاء حساب
closeSignupBtn.addEventListener('click', function () {
    sidebarSignup.classList.add('closed');
    closeSignupBtn.style.display = 'none';
    loginBtn.style.display = 'block';
    signupBtn.style.display = 'block';
});

// إعدادات عند تحميل الصفحة
window.onload = function () {
    sidebarLogin.classList.add('closed');
    sidebarSignup.classList.add('closed');
    loginBtn.style.display = 'block';
    signupBtn.style.display = 'block';
    closeLoginBtn.style.display = 'none';
    closeSignupBtn.style.display = 'none';
};



document.getElementById('signupForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const loadingMessage = document.getElementById('loadingMessage');
    loadingMessage.style.display = 'block';

    setTimeout(() => {
        loadingMessage.style.display = 'none';
        alert('The account has been created.');
        window.location.href = '/';
    }, 3000);
});
