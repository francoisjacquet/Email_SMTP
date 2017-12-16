# Email SMTP Documentation

Plugin Settings
---------------

### From Email

You can specify the email address that emails should be sent from. If you leave this blank, the default email will be used.

If you are sending using an email provider (Gmail, Yahoo, Hotmail, Outlook.com, etc) this setting should be your email address for this account.

### From Name

You can specify the name that emails should be sent from. If you leave this blank, the emails will be sent from RosarioSIS.

### SMTP Host

The SMTP server's address.

### SMTP Port

The most common ports are **587**, **465** and **25**. Web hosts sometimes block these ports. If closed, your hosting provider can open it for you.

### Encryption

**SSL** (usually on port 465) and **TLS** (usually on port 587) are encryptions protocols. TLS is not the same as STARTTLS. If your email provider offers both, TLS is recommended.

### Authentication

Email providers generally require authentication. Leave the Username empty to disable it. Disable it for local development or other edge cases.

### Username

Your username is generally your email address; e.g. `myname@gmail.com` or `myname@hotmail.com`. Some providers require the username only format; e.g. if your email is `myname@aol.com` your username would be `myname`.

### Password

This is your email account password.

### Security tip

If you do not want your password to be stored in the database, save it in the `config.inc.php` file instead.
For this, add the following line:

```php
define( 'EMAIL_SMTP_PASSWORD', 'your_password_here' );
```


SMTP Settings for Popular Email Providers
-----------------------------------------

### Gmail / G Suite

- Host: `smtp.gmail.com`
- Port: `587` (or `465` using SSL encryption)
- Username: your Gmail email address (e.g. `myname@gmail.com`)
- Password: your Gmail password
- Encryption: `TLS`

Please note you will need to **enable less secure apps**.

### Outlook.com

- Host: `smtp-mail.outlook.com`
- Port: `587`
- Username: your Outlook.com email (e.g. `myname@outlook.com`)
- Password: your Outlook.com password
- Encryption: `TLS`

### Office 365

- Host: `smtp.office365.com`
- Port: `587`
- Username: your Office 365 email
- Password: your Office 365 password
- Encryption: `TLS`

### Hotmail

- Host: `smtp.live.com`
- Port: `587`
- Username: your Hotmail email (e.g. `myname@hotmail.com`)
- Password: your Hotmail password
- Encryption: `TLS`

### Yahoo Mail

- Host: `smtp.mail.yahoo.com`
- Port: `465`
- Username: your Yahoo Mail email (e.g. `myname@yahoo.com`)
- Password: your Yahoo Mail password
- Encryption: `SSL`

Please note you will need to **enable less secure apps**.

### AOL

- Host: `smtp.aol.com`
- Port: `587`
- Username: your AOL screen name (e.g. `myname`)
- Password: your AOL password
- Encryption: `TLS`


### Other Email Providers

Consult your email provider website or ask for their SMTP settings.
