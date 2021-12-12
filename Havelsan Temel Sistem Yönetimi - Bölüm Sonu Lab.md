### Temel Sistem Yönetimi - Bölüm Sonu Lab

+ echo komutu ile "standart çıktı" üzerine "Merhabalar, Hoşgeldim" yazısının yazdırılması.

  ```console
  alptech@ub20:~$ echo "Merhabalar, Hoşgeldim"
  Merhabalar, Hoşgeldim
  
  ```

  

+ echo komutu ile bulunduğunuz konumda daha önce oluşturulmayan "merhaba.txt" dosyası içinde "bir" yazdırılmasının sağlanması.

  ```console
  alptech@ub20:~$ echo bir 1>merhaba.txt
  ```

  

+ echo komutu ile bulunduğunuz konumda daha önce oluşturulmuş olan "merhaba.txt" dosyası içinde daha önceki içeriği silmeden "iki" yazdırılmasının sağlanması.

  ```console
  alptech@ub20:~$ echo iki 1>>merhaba.txt
  ```

  

+ Oluşturulmuş olan "merhaba.txt" dosyasının standart çıktı'ya yazdırılması için hangi komut kullanılmaktadır ve yazdırınız.

  ```console
  alptech@ub20:~$ cat merhaba.txt
  bir
  iki
  ```



+ Daha önce oluşturulmuş olan "merhaba.txt" dosyasının en altına "üç" yazısının eklenmesi ve dosya içeriğinin standart çıktı'ya yazdırılması.

  ```console
  alptech@ub20:~$ echo üç 1>>merhaba.txt && cat merhaba.txt
  bir
  iki
  üç
  ```

  

+ mkdir komutu ile "yenidizin" isimli bir klasör oluşturun.

  ```console
  alptech@ub20:~$ mkdir yenidizin
  alptech@ub20:~$ ls
  merhaba.txt  yenidizin
  ```

  

+ cd komutunu kullanmadan yenidizin klasörü içinde daha önce oluşturlmayan "ikinci.txt" isimli bir dosyanın içerisinde "bir" yazısının eklenmesini sağlayın.

  ```console
  alptech@ub20:~$ echo bir 1>yenidizin/ikinci.txt
  ```

  

+ cd komutunu kullanmadan yenidizin klasörü içinde daha önce oluşturulmuş olan "ikinci.txt" dosyası içeriğini standart çıktı ekranına yazdırın.

  ```console
  alptech@ub20:~$ cat yenidizin/ikinci.txt
  bir
  ```

  

+ cd komutu kullanmadan "ikinci.txt" dosyası içine eski içeriğine dokunmadan "iki" yazısını ekleyin.

  ```console
  alptech@ub20:~$ echo iki 1>>yenidizin/ikinci.txt
  ```

  

+ cd komutu kullanmadan "ikinci.txt" dosyası içindekileri silecek şekilde "silindi" yazısının eklenmesini sağlayın ve dosya içeriğini standart çıktı ekranına yazdırın.

  ```console
  alptech@ub20:~$ echo silindi 1>yenidizin/ikinci.txt && cat yenidizin/ikinci.txt
  silindi
  ```

  

+ yenidizin klasörü içindeki dosyaların listesini cd komutu kullanmadan standart çıktıya yazdırın.

  ```console
  alptech@ub20:~$ ls yenidizin/
  ```

  

+ yenidizin klasörü içindeki dosyaları listelemek için cd komutunu da kullanarak hangi iki komut ile ekrana yazdırabilirsiniz. sıra ile yazınız.

  ```console
  alptech@ub20:~$ ls yenidizin/ veya alptech@ub20:~$ cd yenidizin/ && ls
  ```

  

+ yenidizin klasörü içinde iken (cd kullanmadan) ilk oluşturduğunuz merhaba.txt dosyasının içeriğini ekrana yazdırın.

  ```console
  alptech@ub20:~/yenidizin$ cat ../merhaba.txt
  bir
  iki
  üç
  ```

  

+ yeni dizin klasörü içinde iken (cd kullanmadan) merhaba.txt dosyası içine "dort" yazısının eklenmesini sağlayın ve dosya içeriğini standart çıktı ekranına yazdırın.

  ```console
  alptech@ub20:~/yenidizin$ echo dort 1>>../merhaba.txt && cat ../merhaba.txt
  bir
  iki
  üç
  dort
  ```

  

+ bulunduğunuz konumu ekrana yazdırın.

  ```console
  alptech@ub20:~/yenidizin$ pwd
  /home/alptech/yenidizin
  ```
