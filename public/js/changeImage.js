const Kl150 = "/assets/image/150Kl/150CenterKl.jpg";
const Kl250 = "/assets/image/250Kl/250CenterKl.jpg";

const lo150 = "/assets/image/150Lo/150CenterLo.jpg";
const lo250 = "/assets/image/250Lo/250CenterLo.jpg";


const sh150 = "/assets/image/150Sh/150centerSh.jpg";
const sh250 = "/assets/image/250Sh/250centerSh.jpg";

const elementImageKl150 = document.getElementById('imageKl150');
const buttonChangeKl250 = document.getElementById('changeKl250');
const buttonChangeKl150 = document.getElementById('changeKl150');

const elementImageLo150 = document.getElementById('imageLo150');
const buttonChangeLo250 = document.getElementById('changeLo250');
const buttonChangeLo150 = document.getElementById('changeLo150');


const elementImageSh150 = document.getElementById('imageSh150');
const buttonChangeSh250 = document.getElementById('changeSh250');
const buttonChangeSh150 = document.getElementById('changeSh150');

function changeImageKl(newImage) {
    elementImageKl150.src = newImage;
}

buttonChangeKl250.addEventListener('click', function () {
    changeImageKl(Kl250);
});

buttonChangeKl150.addEventListener('click', function () {
    changeImageKl(Kl150);
});


function changeImageLo(newImage) {
    elementImageLo150.src = newImage;
}

buttonChangeLo250.addEventListener('click', function () {
    changeImageLo(lo250);
});

buttonChangeLo150.addEventListener('click', function () {
    changeImageLo(lo150);
});


function changeImageSh(newImage) {
    elementImageSh150.src = newImage;
}

buttonChangeSh250.addEventListener('click', function () {
    changeImageSh(sh250);
});

buttonChangeSh150.addEventListener('click', function () {
    changeImageSh(sh150);
});


