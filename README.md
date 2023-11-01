PHP Development Stack
==========================


Installation
------------

    git clone https://github.com/mrzen/php-dev
    docker compose up -d


Usage
-----

nginx will use the `Host` header to determine the webroot to serve. Webroots are stored in `./www` with each having
a folder named by the host.

A recommended setup is to use the root domain `mrzen.local` and then using either a hostsfile, DNSMASQ or systemd-resolve you can forward all subdomains to `localhost`.

