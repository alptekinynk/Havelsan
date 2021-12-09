# Havelsan
Açık Kaynak Kampı Ödevler ve Projeler

### Bash ve Komut Satırı Kullanımı - Alptekin YANIK

##### 1.Bash ve SH kabuklarının çevre değişkenlerini kıyaslama

+ Bir uçbirim (terminal) açın ve mevcut kabuğu (shell) ekrana yazdırın

  Sanal makinemi çalıştırdıktan sonra windows terminal ile SSH bağlantımı gerçekleştirdim.

  Ardından sistemdeki mevcut kabukları (shell) görebilmek için

  ```console 
  $ cat /etc/shells
  # /etc/shells: valid login shells
  /bin/sh
  /bin/bash
  /usr/bin/bash
  /bin/rbash
  /usr/bin/rbash
  /bin/dash
  /usr/bin/dash
  /usr/bin/tmux
  /usr/bin/screen
  ```

  

  kodunu terminale yazdım. Burada  `cat`  **concatenate** yani birleştirme/bağlama anlamındadır. Dolayısıyla `/etc/shells`  dizini altındaki tüm parçaları ekranımda bir arada göstermektedir. Yukarıda görülebildiği gibi **sh,bash,dash.. ** tüm kabuklar gözükmektedir.

  

  Mevcut kabuğu görüntülemek için,

  ```console
  ~$ echo $SHELL
  /bin/bash
  ```

  komutunu yazıp, yukarıda görüldüğü ve `/bin/bash` çıktısından anladığımız üzere mevcut kabuğumuz **bash** kabuğudur.

  

+ sh kabuğuna geçerek çevre değişkenlerini ekrana yazdırın

  En son gördüğümüz üzere **bash** kabuğunda işlem yapmaktaydık. Kabuğumuzu değiştirmek ve **sh** kabuğuna geçmek için 

  ```console
  alptech@ub20:~$ sh
  $
  ```

  yukarıdaki gibi **sh** yazabiliriz. Bu kabuk içerisinde çevre değişkenlerini görüntülemek için **printenv** ya da **env** komutunu kullanabiliriz. Aşağıda görülebildiği gibi ben **printenv** kullanmayı tercih ettim.

  ```console
  $ printenv
  LESSOPEN=| /usr/bin/lesspipe %s
  USER=alptech
  SSH_CLIENT=192.168.0.13 53685 22
  XDG_SESSION_TYPE=tty
  SHLVL=1
  MOTD_SHOWN=pam
  HOME=/home/alptech
  SSH_TTY=/dev/pts/0
  DBUS_SESSION_BUS_ADDRESS=unix:path=/run/user/1000/bus
  LOGNAME=alptech
  _=clear
  XDG_SESSION_CLASS=user
  TERM=xterm-256color
  XDG_SESSION_ID=16
  PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
  XDG_RUNTIME_DIR=/run/user/1000
  LANG=en_US.UTF-8
  LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:
  SHELL=/bin/bash
  LESSCLOSE=/usr/bin/lesspipe %s %s
  PWD=/home/alptech
  XDG_DATA_DIRS=/usr/local/share:/usr/share:/var/lib/snapd/desktop
  ```

  ayrıca en yaygın kullanılan **$HOME**, **$USER** ve **$PATH** değişkenlerini görüntülemek için **echo** komutunu kullanabiliriz.

  Aşağıda örnekleri bulunmaktadır.

  ```console
  $ echo $HOME
  /home/alptech
  $ echo $USER
  alptech
  $ echo $PATH
  /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
  ```

  

+ bash kabuğuna geçerek çevre değişkenlerini ekrana yazdırın

  İlk başta zaten **bash** kabuğu içerindeydik ve sonrasında **sh** kabuğuna geçerek çevre değişkenlerini görüntüledik. Tekrar bash kabuğunda işlem yapmak için 2 yolumuz bulunmakta. 

  + sh kabuğundan `exit`  ile çıkıp mevcut kullanıcıda ana kabuğumuz olan **bash** e geçmek
  + sh kabuğu içerisinde `bash` komutu ile ayrı bir **bash** kabuğu açabiliriz.

  Ben  `exit ` ile bir üst kabuğa geçmeyi tercih ettim. Ardından bash kabuğu üzerinde de çevre değişkenlerini görüntüledim. 

  ```console
  $ exit
  alptech@ub20:~$ echo $SHELL
  /bin/bash
  alptech@ub20:~$ env
  SHELL=/bin/bash
  PWD=/home/alptech
  LOGNAME=alptech
  XDG_SESSION_TYPE=tty
  MOTD_SHOWN=pam
  HOME=/home/alptech
  LANG=en_US.UTF-8
  LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:
  LESSCLOSE=/usr/bin/lesspipe %s %s
  XDG_SESSION_CLASS=user
  TERM=xterm-256color
  LESSOPEN=| /usr/bin/lesspipe %s
  USER=alptech
  SHLVL=1
  XDG_SESSION_ID=16
  XDG_RUNTIME_DIR=/run/user/1000
  XDG_DATA_DIRS=/usr/local/share:/usr/share:/var/lib/snapd/desktop
  PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
  DBUS_SESSION_BUS_ADDRESS=unix:path=/run/user/1000/bus
  SSH_TTY=/dev/pts/0
  _=/usr/bin/env
  ```



##### 2.Python kabuğu üzerinde basit fonksiyon geliştirme

+ Uçbirim üzerinde python kabuğu açılmalı, python kabuğu üzerinde **fibo (fibınacci dizisi için)** kütüphanesini içeri aktararak, dizinin ilk 10 sayısını döndüren bir fonksiyon yazın.
Öncelikle gerekli olan **pip** dosyasını indiriyoruz. Ardından `pip` komutu ile **Fibo** modülünü indiriyoruz. 

```console
sudo apt install python3-pip
pip install Fibo
```

Bu aşamadan sonra **Fibo** modülü içerisinde birkaç yazım hatası bulunduğu için onları düzelttim. Ardından **python** arayüzüne geçerek **Fibo** modulünden **fab** methodunu ekliyoruz ve kullanıyoruz.

```console
alptech@ub20:~$ python3
Python 3.8.10 (default, Sep 28 2021, 16:10:42)
[GCC 9.3.0] on linux
Type "help", "copyright", "credits" or "license" for more information.
>>> from Fibo import fab
>>> fab(5)
1
1
2
3
5
>>>
```




##### 3. Kullanıcı bazlı değil, sistem genelinde kalıcı bir çevre değişkeni tanımlanmak istense, hangi sistem dosyası kullanılabilir.

Sistem genelinde kalıcı bir çevre değişkeni oluşturmak için `sudo nano ~/.bashrc` komutu ile **./bashrc** dosyasına gidilmeli ve içerisinde yeni bir değişken oluşturulmalı. Böyle oluşturulan değişken tüm kullanıcılar için aktif olacaktır. 

##### 4.Kullanıcı ana dizininde bulunan dosyalardan hangisi Bash geçmişini depolamak için kullanılır?

`ls -la ` komutu ile kullanıcı dizinine bakarsak **./bash_history** dosyasını görebiliriz. Bu dosya içerisinde **bash** e yazmış olduğumuz komutlar tutulmaktadır. Ayrıca `history` komutunu kullanarak geçmiş komutları görüntüleyebiliriz. 

````console
alptech@ub20:~$ ls -la
total 36
drwxr-xr-x 3 alptech alptech 4096 Dec  8 16:17 .
drwxr-xr-x 4 root    root    4096 Dec  7 06:58 ..
-rw------- 1 alptech alptech 1134 Dec  8 16:13 .bash_history
-rw-r--r-- 1 alptech alptech  220 Feb 25  2020 .bash_logout
-rw-r--r-- 1 alptech alptech 3771 Feb 25  2020 .bashrc
drwx------ 2 alptech alptech 4096 Dec  6 09:27 .cache
-rw-r--r-- 1 alptech alptech  807 Feb 25  2020 .profile
-rw------- 1 alptech alptech  190 Dec  8 15:06 .python_history
-rw-r--r-- 1 alptech alptech    0 Dec  6 10:52 .sudo_as_admin_successful
-rw-rw-r-- 1 alptech alptech  173 Dec  7 06:52 .wget-hsts
````


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
