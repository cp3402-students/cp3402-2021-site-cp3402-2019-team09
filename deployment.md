# Local Environment

First of all, ensure that you have [ScotchBox](https://box.scotch.io/) [Vagrant](https://www.vagrantup.com/) and [VirtualBox](https://www.virtualbox.org/) installed as they are the dependencies of this local environment.

Clone [WPDistillery](https://github.com/flurinduerst/WPDistillery) using the command line. <br/>
Install the [Vagrant Hostsupdater](https://github.com/agiledivider/vagrant-hostsupdater) plugin
(```vagrant plugin install vagrant-hostsupdater```) <br/>
Double check and edit the ```wpdistillery/config.yml``` if needed. <br/>
Then run ```vagrant up``` from the directory where the ```Vagrantfile``` is located. <br/>
Enter http://192.168.33.10/ on your browser to see if it works properly. <br/>


# Web Hosting

* Staging site - http://3.26.44.161/
* Production site - http://3.24.124.61/ <br/>


# Version Control

Version control will compare the old and the new version of the code or file in order to
keep track of the changes that has been made by every member of the repository. <br/>
It allows team members to create a new branch and edit from that branch then merge the
main branch and the develop branch together as GitFlow prevents the commits from conflicting
and overwriting other people’s commit. <br/>


# Project Management
* [Github Repository](https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team09)
* [Trello Board](https://trello.com/b/KB8JacNL/cms-assignment-2-team09)
* [Slack Channel](https://itatjcu.slack.com/archives/G0XKS1Y8H)
* [Discord]() <br/>


# Automation

* Trello Bot - Trello Bot: Displays a notice showing completed cards into the discord server where 
we hold our communication channels.
* GitHub Webhook - Github Webhook integration with Discord: Shows all pull, push, merge activity as a notice 
onto the discord server to track each team member's progress.

