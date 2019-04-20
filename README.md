README

##Name
Music Store Database

##Description 
The site provides an online catalog for a music store where users can browse through music. 
Users can browse search through the music database based on (a) song name, (b) genre, (c) composer.
An admin (by logging in) can make new entries to the database or delete entries. 

##Installation/ Usage 
1. Install XAMPP (available for Windows, Linux and MacOS )
https://www.apachefriends.org/download.html
2. Import the music_store_db.sql through phpMyAdmin. 
3. Copy the music_store folder (contains all php files) into the htdocs folder. This can be found under HDD>Applications>XAMPP>htdocs.
4. Enter http://localhost/music_store/home_page.php in a web browser.
5. Trying to directly load certain pages might cause an error. So, use home_page.php to navigate to other pages.
6. Expected $host = $host="localhost"; $user="root"; $password=""; $dbname = "music_store_db";
