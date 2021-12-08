### En Temel Komutlar - Alptekin YANIK

+ isim adlı bir değişkene bir isim tanımlanarak bunun ekrana yazdırılması

​		Terminal üzerinde **isim** isminde bir değişken tanımladım ve içerisinde **Alptekin** diye bir string değeri koydum.

​		Bunu ekrana yazdırmak için `echo` komutu ile değişkenin adını yazdım.
```console
alptech@ub20:~$ isim="Alptekin"
alptech@ub20:~$ echo $isim
Alptekin
```



+ isim ve soyisim değişkenleri tanımlanarak bunlara birer değeri verilmeli, bunların birleştirilmiş halleri bir kişi değişkenine eşitlenmeli ve kişi değişkeni ekrana yazdırılmalı.

  Öncelikle isim değişkeni oluşturup içerisine **Alptekin** değerini attım. Daha sonra soyisim değişkeni oluşturup **YANIK** değerini içerisinde ekledim. Ardından kişi değişkeni içerisine bu iki değişkenin string halini göndererek ekrana bastırdım. 

```console
alptech@ub20:~$ isim="Alptekin"
alptech@ub20:~$ soyisim="YANIK"
alptech@ub20:~$ kisi="$isim $soyisim"
alptech@ub20:~$ echo $kisi
Alptekin YANIK
```



​		

+ /home/ dizininde iken /etc/systemd/system dizinine tek komut ile gidilmeli.

​		İlk başta bulunduğumuz dizini görüntülemek için `pwd` komutunu kullandım. Daha sonra `/home` dizinine gidebilmek için bir 		üst dizine `cd ..` komutu ile çıktım. 

​		Hedef dizine tek satır kod ile erişebilmek için ``cd /etc/systemd/system` komutunu kullandım. Ardından hedef dizinde olduğumuzu doğrulamak adına tekrar `pwd` komutunu kullandım

```console
alptech@ub20:~$ pwd
/home/alptech
alptech@ub20:~$ cd ..
alptech@ub20:/home$ pwd
/home
alptech@ub20:/home$ cd /etc/systemd/system
alptech@ub20:/etc/systemd/system$ pwd
/etc/systemd/system
```
