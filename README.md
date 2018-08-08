<h1>Welcome to Laravel QA Forum</h1>

This is a very simple Laravel frame work based Quastion-Answer forum.
<p>Git repository:</p>
https://github.com/maulikpatel1992/faq_mvpatel

 
<h3>Requirement</h3>
 PHP 7.2 and
	           Git and Heroku should be installed to your machine

<h3>Setup/Installation<h3>

<h6>1. Clone given GitHub repository for this project locally
onto your computer:</h6>

        git clone https://github.com/maulikpatel1992/faq_mvpatel
<h6>2.To move your terminal working location to the project file:</h6>

    cd faq_mvpatel
<h6>3.Install Composer Dependencies:</h6>
    
    composer install
<h6>4.Install NPM Dependencies:</h6> 
     
    npm install
<h6>5. Create a copy of your .env file:</h6>

    cp .env.example .env
<h6>6. Generate an app encryption key:</h6>

     php artisan key:generate
<h6>7. Create an empty database for project using sqlite.</h6> 

<h6>8.In the .env file, add database information to allow Laravel to connect to the database</h6>

    B_CONNECTION=sqlite
    DB_DATABASE=Full path of /database.sqlite
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_USERNAME=homestead
    DB_PASSWORD=secret

<h6>9. Migrate the database</h6>
    
    php artisan migrate
<h6>10. Seed the database</h6>
       
    php artisan db:seed

<h3>Features:</h3>

<h5>1. Basic user Registration and Login</h5>
Any new user can register and  login to qa forum by Register and Login button. 

<h5>2. Asking questions</h5>
Once user gets authorisation, He can ask question as well as edit question by “Create  question” and “Edit question” button respectively.
<h5>3. Posting answer</h5>
Once user gets authorisation, He can give answers as well as edit answer for any  question by “Answer question” and “Edit question” button respectively.
<h5>4. Creating Profile</h5>
Authorise user can create, view and update own profile using “Create Profile”, “My Profile” button from “My Account” drop down menu.
<h5>5. Question tagging</h5>
User have to select one question tag from list: Laravel, php, sql, Java and other. Please note that question tag is case-sensitive is required field. This question tag is used to get questions according to categary. 
<h5>6. Voting answers (Upvote/Downvote)</h5>
Authorise user can give vote either “Upvote” or “Downvote” for each answer. User can give vote using Upvote(Blue button) and Downvote(Red button). 
User can get Highest Voted answers with question.
User can get highest voted answer for a question by selecting “Vote “  from “Sort By” drop down menu.
<h5>7. Sort by Time</h5>
User can view Most recently asked question, from list of all the questions by selecting “Most Recent” from “Sort by “ drop down menu.
<h5>8. Sort by Unanswered</h5>
User can view unanswered question, from list of all the questions by selecting “Unanswered” from “Sort by “ drop down menu. So it will be easy to answer an unanswered question.
<h5>9. Sort by Answered</h5>
User can view only answered question, from list of all the questions by selecting “Answered” from “Sort by “ drop down menu. So it will be easy to find answered questions.
<h5>10. Filter by Category</h5>
Guest User as well as authorise user can view  all questions of same category such as “Laravel”, “php”, “sql”, “Java” and rest are from  “other” category using respective buttons placed at navigation bar. 
<h5>11. Updated UI for Guest and Authorise user</h5>
Guest users can get overview of all questions using “Home” button placed at navigation bar but without login or register, they can not view, answer  and vote.

<h3>License</h3>
This is open source code. Any user can modify this code for own use
