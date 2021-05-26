# Creation and editing

The website was created using WordPress’s offline environment. This local environment was facilitated using Xampp (cross platform, Apache, Mysql, php and perl).  The team used GitHub for version control. The websites database was managed using MyPhpAdmin to import the database from version control, to the local environment. 

# Teamwork

To keep track of work that had been done and needed to be done the development team employed the use of a Trello board. Slack was used to keep track of tasks through trello integration, but Discord was our main form of communication. The team saw no issue or problems with Trello or Slack, both applications work flawlessly from day one.
Communication is key if development involves multiple members, they must communicate between each other as to who is editing the site and when they have finalised the changes that they have been made.

# Version Control issues

Local development with Xampp was decided upon after trying several other local development options. Xampp had almost no issues besides wp login confusion. The group struggled with version control the most. The team experimented with just sending a compressed folder of the website from one to another however this incurred problems with the database and the admin privileges. Other team members could not log in. Git hub provided as a means to alleviate these problems however it only allows a max upload size of 25mb and 100 files. The team worked around this by opting to use Github desktop. 

# How to develop locally without database corruption

When it comes to sharing the development process GitHub was employed and used to save changes to the site as well as provide the version control. If a developer wishes to edit the site they must pull the repository into their local environment (xampp) by copying the WordPress folder of the website into the 'htdocs' folder in Xampp.  The developer can then start the Apache server and Mysql on the Xampp controller. The developer must then import the new version of the website database into phpmyadmin to ensure the database matches the version of the site. Now the website is ready to edit locally in Wordpress. 

# Site development don'ts
The Website can also be edited in its online for like in a staging environment however this is not recommended.
