GitLab
------

RosarioSIS code is now hosted at [**GitLab**](https://gitlab.com/francoisjacquet/Email_SMTP)!

# Email SMTP Plugin

![screenshot](https://raw.githubusercontent.com/francoisjacquet/Email_SMTP/master/screenshot.png)

https://www.rosariosis.org/email-smtp-plugin/

Version 1.0 - December, 2017

Author François Jacquet

License Gnu GPL v2

## Description

Send emails using SMTP instead of the default PHP `mail()` function.
Having problems with RosarioSIS not sending emails? Use this SMTP plugin to fix your email deliverability issues.

SMTP (Simple Mail Transfer Protocol) is a protocol for sending emails. SMTP helps increase email deliverability by using proper authentication. Just enter your email provider's SMTP server settings to relay emails sent by RosarioSIS.

Get help and settings for Gmail, Outlook and Yahoo in the [DOCUMENTATION.md](https://github.com/francoisjacquet/Email_SMTP/blob/master/DOCUMENTATION.md) file.

Translated in [French](https://www.rosariosis.org/fr/email-smtp-plugin/) & [Spanish](https://www.rosariosis.org/es/email-smtp-plugin/).

## Content

Plugin Configuration

- From Email and Name.
- SMTP host and port.
- SSL or TLS encryption.
- SMTP username and password.
- Send test email.

## Install

Copy the `Email_SMTP/` folder (if named `Email_SMTP-master`, rename it) and its content inside the `plugins/` folder of RosarioSIS.

Go to _School Setup > School Configuration > Plugins_ and click "Activate".

Requires RosarioSIS 3.6.1+
