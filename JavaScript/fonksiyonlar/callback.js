// Basit Fonksiyon

// function adimiYaz(ad){
//   console.log("Adiniz : " + ad);
// }
//
// function soyadimiYaz(soyad) {
//   console.log("Soyadiniz : " + soyad);
// }

// setTimeout Fonksiyon

// function adimiYaz(ad) {
//   setTimeout(function(){
//     console.log("Adiniz : " + ad);
//   },2000);
// }
//
// function soyadimiYaz(soyad) {
//   setTimeout(function(){
//     console.log("Soyadiniz : " + soyad);
//   },1000);
// }

// callback Fonksiyon

function adimiYaz(ad , callback) {
  setTimeout(function(){
    console.log("Adiniz : " + ad);
    callback('Kasim');
  },2000);
}

function soyadimiYaz(soyad) {
  setTimeout(function(){
    console.log("Soyadiniz : " + soyad);
  },1000);
}

adimiYaz("Kadir" , soyadimiYaz);
