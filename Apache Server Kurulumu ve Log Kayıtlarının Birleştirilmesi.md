### Apache Server Kurulumu ve Log Kayıtlarının Birleştirilmesi

+ Öncelikle Ubuntu üzerine apache server kurabilmek için aşağıdaki komutları çalıştırıyoruz.

  ```console
  sudo apt update
  sudo apt install apache2
  ```

  Kurulum tamamlandıktan sonra apache server'ın durumunu kontrol etmek için aşağıdaki komutu kullanabiliriz.

  ```console
  alptech@alptech-VirtualBox:~$ sudo systemctl status apache2
  ● apache2.service - The Apache HTTP Server
     Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset: enabled)
    Drop-In: /lib/systemd/system/apache2.service.d
             └─apache2-systemd.conf
     Active: active (running) since Tue 2021-12-14 17:43:18 +03; 56min ago
   Main PID: 4612 (apache2)
      Tasks: 55 (limit: 2326)
     CGroup: /system.slice/apache2.service
             ├─4612 /usr/sbin/apache2 -k start
             ├─4614 /usr/sbin/apache2 -k start
             └─4615 /usr/sbin/apache2 -k start
  
  Ara 14 17:43:17 alptech-VirtualBox systemd[1]: Starting The Apache HTTP Server...
  Ara 14 17:43:17 alptech-VirtualBox apachectl[4601]: AH00558: apache2: Could not reliably determine the
  Ara 14 17:43:18 alptech-VirtualBox systemd[1]: Started The Apache HTTP Server.
  lines 1-15/15 (END)
  ```

  Apache'nin aktif bu şekilde anlayabiliriz.

  

+ Sistem üzerinde çalışan bütün programların kayırları **/var/log/** dizini altında tutulmaktadır. Bu dizine gittiğimizde bunu görebiliriz.

  ```console
  alptech@alptech-VirtualBox:~$ cd /var/log/
  alptech@alptech-VirtualBox:/var/log$ ls
  alternatives.log  bootstrap.log    hp                 syslog.2.gz           vboxadd-setup.log.2
  apache2           btmp             installer          syslog.3.gz           vboxadd-setup.log.3
  apport.log        cups             journal            syslog.4.gz           vboxadd-setup.log.4
  apport.log.1      dist-upgrade     kern.log           tallylog              vboxadd-uninstall.log
  apport.log.2.gz   dpkg.log         kern.log.1         ubuntu-advantage.log  wtmp
  apt               faillog          lastlog            unattended-upgrades   Xorg.0.log
  auth.log          fontconfig.log   speech-dispatcher  vboxadd-install.log   Xorg.0.log.old
  auth.log.1        gdm3             syslog             vboxadd-setup.log
  boot.log          gpu-manager.log  syslog.1           vboxadd-setup.log.1
  ```

  Burada **apache2** dizininin altında server log dosyalarını bulabiliriz.

  ```console
  alptech@alptech-VirtualBox:/var/log$ ls apache2/
  access.log  error.log  other_vhosts_access.log
  ```

  Amacımız 3 farklı log dosyası içerisinde bulunan kayıtları belirli bir satırdan sonra veya belirli bir satırdan önce olacak şekilde sıralamak ve birleştirmek. 

  Bunun için `head` ve `tail` komutlarını kullanacağız. `head` komutu ilk **-n** satırı görüntülememizi sağlarken`tail` komutu sondan **-n** satırı görüntülememizi sağlar. Ben bu dosyalarda bulunan ilk 15 satırı alacağım. 

  ```console
  alptech@alptech-VirtualBox:/var/log$ sudo head -15 apache2/access.log apache2/error.log apache2/other_vhosts_access.log 1>~/Desktop/sonuc.txt
  alptech@alptech-VirtualBox:/var/log$ nano ~/Desktop/sonuc.txt
  ```

  ```console
  ==> apache2/access.log <==
  192.168.0.13 - - [14/Dec/2021:17:45:53 +0300] "GET / HTTP/1.1" 200 3477 "-" "Mozilla/5.0 (Windows NT $192.168.0.13 - - [14/Dec/2021:17:45:53 +0300] "GET /icons/ubuntu-logo.png HTTP/1.1" 200 3623 "http://$192.168.0.13 - - [14/Dec/2021:17:45:53 +0300] "GET /favicon.ico HTTP/1.1" 404 490 "http://192.168.0.1$192.168.0.13 - - [14/Dec/2021:17:46:44 +0300] "-" 408 0 "-" "-"
  
  ==> apache2/error.log <==
  [Tue Dec 14 17:43:18.011646 2021] [mpm_event:notice] [pid 4612:tid 140489303989184] AH00489: Apache/2$[Tue Dec 14 17:43:18.011726 2021] [core:notice] [pid 4612:tid 140489303989184] AH00094: Command line:$
  
  ==> apache2/other_vhosts_access.log <==
  
  ```

  