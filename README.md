# cse135site

ssh
grader:ilovereact

site login
grader:ILOVEREACT

Github Deploy
  To enable pushes to the live droplet with my server this is the pipeline that was created

  Once a push to the repo is detected there is a webhook that will send a post
  request to a droplet that I have created http://x.x.x.x/webhook 

  this http:x.x.x.x/webook droplet is running an express server
  with a /webhook endpoint that accepts a post request

  once that post request is detected it will run a bash script
  on that server

  this bash script will clone this repo (as it is public)
  then send an scp command to the apache droplet to delete
  everything in the /var/www/ directory and replace it
  with the contents of this repo

  the apache server will then automatically make changes
  based on the new /var/www/ files
 
After compression
  Files loaded faster and had stranger inerrrior variable names and spacing
  
Removing summary
  I installed mod_security
  sudo apt install libapache2-mod-security2
  
  then opened the apache config and added
  ServerTokens Full
  SecServerSignature “CSE135 Server”
  
  then restarted and viola 
