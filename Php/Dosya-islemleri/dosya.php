<?php
/**
 * Created by kadirkasim.com
 * Developer: Kadir Kasim
 * Date: 1.04.2018
 * Time: 17:59
 */

    // Dosya Olusturma
    touch('deneme.txt');



    // Kipler
    /*
     * r  -> Sadece okumak icin acar
     * r+ -> Okumak ve yazmak icin acar
     * w  -> Sadece yazmak icin acar , Dosya yok ise olusturur.
     * w+ -> Okumak ve yazmak icin acar
     * a  -> Sadece yazmak icin acar
     * a+ -> Okumak ve yazmak icin acar.
     */


    // Dosyayi acma
    fopen('deneme.txt','a+');

    // Dosyaya yazma
    fwrite('Bu bir deneme yazisidir.');

    // Dosya Tum icerik okuma
    fread('deneme.txt');

    // Satir satir okuma
    fgets('deneme.txt');

    // Dosyanin sonuna geldigini soyler
    feof('deneme.txt');

    // Dosyayi kapatir
    fclose('deneme.txt');




