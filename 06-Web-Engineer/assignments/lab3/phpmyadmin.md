 ### Setting up a PHPmyAdmin



```
sudo apt update
```   
   
```
sudo apt upgrade
```

```
sudo apt install apache2 mysql-server php libapache2-mod-php php-mysql php-mbstring php-zip php-gd php-json php-curl
  ```

```
sudo apt install phpmyadmin
```

```
sudo phpenmod mbstring
```

```
sudo systemctl restart apache2
```


Open your web browser and navigate to http://localhost/phpmyadmin (or http://your_server_ip/phpmyadmin if accessing remotely). You should see the phpMyAdmin login page. 