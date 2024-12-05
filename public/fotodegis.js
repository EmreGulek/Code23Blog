// Radio butonları ve resim öğesini seç
const maleRadio = document.getElementById('male'); // Erkek radio butonu
const femaleRadio = document.getElementById('female'); // Kadın radio butonu
const image = document.getElementById('gender-image'); // Resim öğesi

// Erkek seçildiğinde yapılacaklar
maleRadio.addEventListener('change', () => {
    if (maleRadio.checked) { // Eğer erkek seçiliyse
        image.src = "/images/manCoder.png";
        image.style.width = "400px";
        image.style.borderRadius = "400px";
        image.alt = 'Erkek Fotoğrafı'; // Alt metni değiştir
    }
});

// Kadın seçildiğinde yapılacaklar
femaleRadio.addEventListener('change', () => {
    if (femaleRadio.checked) { // Eğer kadın seçiliyse
        image.src = "/images/womanCoder.jpg";
        image.style.width = "400px";
        image.style.borderRadius = "400px";
        image.alt = 'Kadın Fotoğrafı'; // Alt metni değiştir
    }
});
