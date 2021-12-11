### Dosya Sistemi Yapısı

+ vi düzenleyicide, imleci hareket ettirme veya satırları arabelleğe kopyalama gibi komutlar nasıl birden çok kez verilebilir veya birden çok satıra nasıl uygulanabilir?

  

  Vi editörü ile bir dosyayı açtığımızda editör **vi** komutlarını almak için hazır halde bekler. Dolayısıyla direk dosya üzerine yazı yazamayız. Dosya üzerine yazı yazabilmemiz için editörü **Insert** moduna almamız gerekli. Bunu yapabilmek için klavyeden bir tuşa basabiliriz. Ekranın sol altında **Insert** yazısı gelince modun değiştiğini anlayabiliriz.

  **Vi** editörün imleci (cursor) hareket ettirmek için yön tuşlarını veya

  + sol için `h`
  + aşağı için `j`
  + yukarı için `k`
  + sağ için `l`

  kullanabiliriz. 

  

  Editör **insert** modunda değil iken `yy` komutu uygulandığında imlecin bulunduğu satır arabelleğe kopyalanır. Aynı anda birden fazla satırı kopyalamak için kopyalanmak istenilen satır miktarınca  `2yy` `3yy`... kullanılabilir. Kopyalanan satırları yapıştırmak için  `p` komutu uygulanır.

  

+ Tek komut ile aşağıdaki yapıda dizin nasıl oluşturulur.

  ![img](https://docs.liman.dev/~/files/v0/b/gitbook-28427.appspot.com/o/assets%2F-MfvEfSUfrXC8yAuM8F1%2F-Mis-vWT2HTM8L9VPDRr%2F-Mis6zzjhHqRlrt7L4Hc%2Fimage.png?alt=media&token=b2dfbb5a-73d8-490a-afca-75d428844b14)

  

  Linux içerisinde dizin oluşturmamıza izin veren kod `mkdir` komutudur. Bu kod kısaca **make directory** kodunun kısaltılmış halidir. Bu kod ile iç içe dizinler oluşturulabilir fakat `mkdir` bunu tek başına yapamaz. Bunun için ``-p` tag'i ile beraber yazılmalıdır. `-p` parents kelimesinin kısaltılmış halidir. 

  

  Ayrıca aynı anda aynı hiyerarşik düzeyde dizinler oluşturmak için tek bir `mkdir` komutunun yanına boşluk bırakarak diğer dizinler yazılabilir. 

  

  Yukarıdaki gibi bir dizin oluşturmak için şu kod

  ```console
  mkdir -p a/b/c/1 a/b/c/2 a/b/d/3
  ```

   kullanılabilir. 

  

+ Vi düzenleyicide hangi komut ya da komutlar açılan belgeyi kaydeder ve düzenleyiciden çıkar?

  

  Editör içerisinde `:wq` komutu dosyayı kaydedip çıkar. Buna alternatif olarak **Shift**+`zz` de kullanılabilir. 

  

+ deneme1'den başlayarak deneme10'a kadar olan dosyaları tek bir komutla nasıl oluştururuz?

  

  ```console
  mkdir deneme{1..100}
  ```

  
