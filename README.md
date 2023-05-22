# RateMyCaf - Mobile Web Applications SPR23 Final Project 

# Description
RateMyCaf is a web application/search engine for cafeterias of universities accross the
United States which allows it's users to create an account linked to their university email
and look at reviews of theirs and other school's cafeterias. The menu's and descriptions of each
cafeteria on respective campus are updated on RateMyCaf on the daily. The user can create comments
to give other users credibility for the reviews of each cafeteria and provide a community aspect. Future
implementations consist of adding an events system, allowing users to create a page for their respective
university if not available, and more.

# File Organization
### Reusables Folder
Inside this folder, all the files of the utilities module can be found. These are files reused all
throughout the project.
### CSS Folder
Inside this folder you can find all our stylesheets used all throughout the project.
### Fonts Folder
Some of the imported fonts we used on our logo and other parts of the project are inside this folder
### Images Folder
We used a lot of images, and all of them can be found inside this folder
### JQuery + JS Folders
Mainly files used for the JQuery (autocomplete) part of the project.
### Information Module Folder
Content of this folder is explained in the # Modules section
### Processes Folder
Files used for the processes that either add to the database, connect to the database or take 
data from the databased onto the frontend
### Authentication Module Folder
All of the login-register files and their processes. Also includes the logout file and the
captcha, but more on that in the following # Module section.
### Everything Else
The "core" files which act as templates. Since they utilize the dynamic directory creation
from the .htaccess file, they must be placed in the root folder. And then, well, there is 
the readme file, which is this one.

# Modules
### Module-1: Search Module
- Index.php
- RMCcode.js (RMC = RateMyCaf)
- JQuery
- autocomplete-process.php
- cafeteria_process.php

### Module-2: Authenticationm Module
- Login.php
- Register.php
- Logout.php
- LoginProcess.php
- RegisterProcess.php
- Captcha.php

### Module-3: Reviews Module
- cafeterias.php
- commentrating_process.php
- .htaccess
- notfoundpage.php

### Module-4: Events Module
- events.php
- event_adding.php
- notfoundpage.php

### Module-5: Information Module
- about.php
- terms_conditions.php
- privacy_policy.php
- school-list.php
- contact.php
- help.php

### Module-6: Utility Module
- db_connection.php
- footer.php
- top-menu.php
- id_connection.php

# About Us
- Roberto Aguero - Computer Science Major & Mathematics Minor - Class of 2025 JBU
- Grayson Crawford - Computer Science Major - Class of 2025 JBU
- More about our motivation for this application including the problem statement can git pube found in the about.php file (inside information-module).