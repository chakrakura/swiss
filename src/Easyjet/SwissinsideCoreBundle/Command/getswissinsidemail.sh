#!/bin/bash

# Getting mail information from config
cwd=$(dirname "${BASH_SOURCE[0]}")
source ${cwd}/"../../../../app/config/mail-parser.ini"

ssh -L 993:localhost:993 ${poplogin}@${poprelay} -N &
pid=$!
sleep 10

echo "poll localhost with protocol imap user "swissinside@easyjet.com" password "${password}" ssl mda \"php /usr/share/swissinside/app/console easyjet:global-mail-parser\"" | fetchmail -t 10 --pidfile /tmp/fetchmail_rc-swissinside.pid -s -f - > /dev/null 2>&1

kill $pid
