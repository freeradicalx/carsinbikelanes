carsinbikelanes
===============

A web app for crowd-sourcing and browsing photographic documentation of motor vehicles abusing bike lanes. Created for use at carsinbikelanes.nyc, but opened up so that other cities can also have a similar site of their own.

Current setup process (To be refined and simplified further):

1. Set up a mysql host and table with proper fields
2. Set up map layers for use with Leaflet. I used mapbox.com (My layers are still in the source, for now)
3. Fill out variables in config.php
4. Fill out contact email in contact.php
5. Replace "SITE NAME" in index.php and mobile_submit.php (Search for it) with your site name for use on site's copy.
