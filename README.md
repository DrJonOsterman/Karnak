Karnak
======
Sample Microblogging service


### Front-End
+ HTML 5
+ CSS 3
+ JavaScript + JQuery

### Environment (XAMPP)
+ PHP
+ MySQL
+ Apache
+ Windows

### Data Structure

+ This was built with no real framework, like CakePHP or CodeIgniter. I made 'user' and 'post' classes to represent the tables in the database. Although I linked a class to a table, it was done loosely, unlike an ORM implementation in which a class directly represents a table. Using classes was more for the sake of keeping things in their own scope. 
+ Singleton pattern was used to hold a class containing the connection details



###Current Features
- Register / Log-In
+ + Client-side validation with JS
+ + Server side validation with AJAX
+ + Redundant validation upon form submission 
- Create / Read / Update / Delete Posts 
+ + text posts only as of now

### Future Features
+ Home page content
+ Different types of posts (text, image, link etc)
+ Richer text editor
+ Tag search
+ Comment

### Dev To Do
+ "View Post" linked from post title cell.
+ Implement more secure user session handling 
+ Replace database queries to a supported extension like MySQLi
+ Passwords need safer encoding than a Salt.

##Screenshots (far from deployment stage)

### Post history
![Post history](http://img203.imageshack.us/img203/7545/k01.png)

### Making post

![Post making](http://img818.imageshack.us/img818/8322/k02.png)

###Client/server validation (yes, password input will be hidden in release)
![AJAX Validation](http://img708.imageshack.us/img708/3356/k03.png)

###*Of course all data irrelevant to user will be removed in a release.*