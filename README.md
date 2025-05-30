# restaurant

# Booking Form Backend with Changelog

This repository contains the backend script for a booking form along with the changelog of updates related to the associated web template.

## 📁 Files

### 1. `dataconnect.php`

This is a PHP script that handles form submissions for a booking form. When a user submits their reservation details, it sends a booking confirmation email to a predefined recipient.

**Form fields handled:**
- Name
- Email
- Phone
- Date
- Time
- Number of People

# Highlights:

Bootstrap upgraded from v4.4.1 to v5.2.0 across versions.

jQuery removed entirely in v4.0.0, switching to vanilla JavaScript.

PHP Email Form updated multiple times with added features (e.g., reCaptcha, attachments).

Various UI fixes and enhancements.

# 🚀 How to Use
Place dataconnect.php on your web server.

Connect the form on your HTML page to submit via POST to dataconnect.php.

Ensure the server has mail functionality enabled.

Replace the placeholder email in the script with your actual recipient email.

# ✅ Requirements
A PHP-enabled web server

Mail functionality enabled on the server (e.g., sendmail or SMTP)

# 📌 Versioning
Refer to changelog.txt for complete version history and updates to the design/template framework.
