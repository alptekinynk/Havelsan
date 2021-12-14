### Apache Server Kurulumu ve Log Rotasyonu

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

  Amacımız 3 farklı log dosyası içerisinde bulunan kayıtların rotasyonunu sağlamak ve bu rotasyonun ne zaman yapılacağını ayarlamak. 

  Bunun için `cd /etc/logrotate.d/` komutu ile **logrotate** klasörüne gidiyoruz.

  ```console
  ls
  alternatives  apport  cups-daemon  ppp      speech-dispatcher       ufw
  apache2       apt     dpkg         rsyslog  ubuntu-advantage-tools  unattended-upgrades
  alptech@alptech-VirtualBox:/etc/logrotate.d$ nano apache2
  ```
  
  **apache2** içerisine girdiğimizde 
  
  ```console
  /var/log/apache2/*.log {
          daily
          missingok
          rotate 14
          compress
          delaycompress
          notifempty
          create 640 root adm
          sharedscripts
          postrotate
                  if invoke-rc.d apache2 status > /dev/null 2>&1; then \
                      invoke-rc.d apache2 reload > /dev/null 2>&1; \
                  fi;
          endscript
          prerotate
                  if [ -d /etc/logrotate.d/httpd-prerotate ]; then \
                          run-parts /etc/logrotate.d/httpd-prerotate; \
                  fi; \
          endscript
  }
  ```
  
  bu dosya içerisinde `daily` ifadesi apache server için log dosyalarının günlük olarak rotate edileceğini belirtmektedir. Bir diğer seçenek ise `size` belirtmektir. Yani eğer dosya belli bir büyüklüğe ulaşırsa rotasyon gerçekleşecektir. Bu dosya içerisinde `daily` ifadesi yerine `size 10M` kullanabiliriz. 
  
    