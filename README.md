# Cipher Site

## Created by Xia Amendolara May 15th, 2017

  The Apron is a social networking app made in Drupal 7. The Apron will serve as a resource for individuals working in and around the service industry, such as but not limited to: bartenders, servers, and cooks.

## User Story

* As a user I would like to be able to make an account to see additional information on the site, including: users profiles, and the ability to browse businesses.

* As a user I would like to be able to edit my profile, in order to add information, such as: name, age, location, work history, skills, and accomplishments.

* As a user I would like the ability to connect with other users by private messaging.

* As a user I would like to add users to 'my connections'.


## Wish List (continued development)

* As a user I would like to search the site by  users name or by business.
  * This will require Yelp Fusion Api.

* As a user I would like to add status updates 'my story'.
  * This will require modules and further research.

* As a user I would like to view 'my connections' stories on my homepage feed.
* This will require modules and further research.

## Implementation Plan

| Objective | Implementation | Status |
|:-------------:|:-------------:|:-------------:|
| Create a new Drupal 7 project | use the drupal-core | complete |
| Create and update README.md with complete info regarding project | touch README.md | complete |
| Download user modules | see list below | complete |
| Set up user profiles (views) | use the goooey | complete |
| Install list of modules | see list below | complete |
| Create logo and necessary psd files | use photoshop ? | complete |
| Implement styling with custom theme | create custom theme | started |
| Fix bug caused with user profile, not displaying correctly in views | fix views (user_profile) | incomplete |
| Use Yelp Fusion to generate work history |  Implement Yelp Fusion API | incomplete |



## Setup/Installation Requirements

  * Follow the link to the Git repository for this project. [Github](https://github.com/Xesme/cameron-coffee.git)
  * In the terminal run `$ git clone link-to-repo-here`
  * In the terminal run `$ cd project-name`
  * Open MAMP and and click on preferences
  * In the preferences menu navigate to webserver and set your document root to project-folder and click okay
  * Click start server in MAMP homescreen
  * On the MAMP homepage click `myphpadmin` to be redirected to the tools page
  * Use the import tab to import the project sql file located in project-root/sites/db_backup/
  * Use the users tab to create a new user with all privledges
  * Open your broswer and go to `localhost:8888` to view the web application in browser.

## Bugs

There are no known bugs at this time, but please contact the creator with questions or concerns regarding this application.

## Technologies Used
* Drupal 7
* PHP
* Git
* SQL
* Yelp API url(https://www.yelp.com/developers/documentation/v3/get_started)
* Yelp fusion url(https://github.com/Yelp/yelp-fusion)

## Modules

* Views url(https://www.drupal.org/project/views)
* HeartBeat url(https://www.drupal.org/project/heartbeat)
  * youtube demo url(https://www.youtube.com/watch?v=LAGTCs7olBM&list=PLKalsUq1lp-milPLihypOTmayNazx_Lbc)

* Flag Friend url(https://www.drupal.org/project/flag_friend)
* Flag url(https://www.drupal.org/project/flag)
* User Relationships url(https://www.drupal.org/project/user_relationships)
* PrivateMSg url(https://www.drupal.org/project/privatemsg)
* Follow url(https://www.drupal.org/project/follow)

## Licensing
This application features MIT licensing.

Copyright &copy; 2017 **Xia Amendolara** All Rights Reserved.
