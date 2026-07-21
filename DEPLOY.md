# Ngemi Festival Germany - Deployment Guide

## Enable Site on VPS

```bash
# SSH into VPS
ssh root@176.57.189.130

# Re-enable nginx config
ln -s /etc/nginx/sites-available/ngemifestivalgermany.conf /etc/nginx/sites-enabled/

# Test & reload nginx
nginx -t && systemctl reload nginx

# Restart PHP-FPM
systemctl restart php8.4-fpm

# Fix permissions
chown -R www-data:www-data /var/www/ngemi/storage /var/www/ngemi/bootstrap/cache
```

## Disable Site on VPS

```bash
ssh root@176.57.189.130
rm /etc/nginx/sites-enabled/ngemifestivalgermany.conf
nginx -t && systemctl reload nginx
```

## Deploy Updates

```bash
ssh root@176.57.189.130 "cd /var/www/ngemi && git pull origin main && npm run build && chown -R www-data:www-data storage bootstrap/cache"
```

## SSL Renewal

Certbot auto-renews via cron. Manual check:
```bash
certbot renew --dry-run
```

## VPS Details
- IP: 176.57.189.130
- Nginx config: /etc/nginx/sites-available/ngemifestivalgermany.conf
- Site root: /var/www/ngemi/public
- PHP-FPM socket: /var/run/php/php8.4-fpm.sock
- SSL cert: /etc/letsencrypt/live/ngemifestivalgermany.com/

## DNS
- Domain bought on Vercel
- A records: @ and www → 176.57.189.130
- Note: Vercel CDN can cause stale DNS — users may need to flush DNS cache
