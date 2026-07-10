#!/bin/bash
set -e

cat > /etc/msmtprc <<EOF
defaults
auth           on
tls            on
tls_trust_file /etc/ssl/certs/ca-certificates.crt
logfile        /var/log/msmtp.log

account        gmail
host           smtp.gmail.com
port           587
from           ${GMAIL_USER}
user           ${GMAIL_USER}
password       ${GMAIL_APP_PASSWORD}

account default : gmail
EOF

chown www-data:www-data /etc/msmtprc
chmod 600 /etc/msmtprc

exec "$@"