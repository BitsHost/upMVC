# upMVC - BitsHost MMVC
 Modular MODEL VIEW CONTROLLER with Router

 /*
 
 * Created on Tue Oct 31 2023
 *
 * Copyright (c) 2023 BitsHost

 */

Demo: https://upmvc.com/demo/
	

Rasmus Lerdorf: PHP Frameworks all suck!	

https://www.youtube.com/watch?v=DuB6UjEsY_Y&ab_channel=matperino


upMVC - MMVC, PHP MVC with modules. Modular MVC(Model, View, Controller) derive from Hierarchical Model‐View‐Controller (HMVC).	
											

Introducing MODULAR MVC - Empowering Your Development

In the realm of modern frameworks, it often feels like they do everything except what truly matters. These frameworks tend to add layers of abstraction that demand you to learn new skills and pathways whenever you decide to switch. They also tend to clutter themselves with superfluous options, solving simple problems in needlessly convoluted ways. 

Consider PHP, including its blade templating engine. Why introduce yet another template engine when PHP is already equipped for the task? Delving into a new framework often necessitates a substantial relearning effort, pushing you far beyond your existing PHP knowledge.

So, why should you choose MMVC?

MMVC, standing for Modular Model View Controller, is not about reinventing the wheel. Instead, it's about optimizing the use of exceptional components. It offers a structured, straightforward approach, and its versatility proves invaluable for project management and development.

But why MMVC specifically?

1. **Modularity:** MMVC allows you to work on a module without impacting the rest of your project. Modules can be interchanged and integrated seamlessly, enhancing your development agility.

2. **Language Freedom:** Perhaps most importantly, you have the freedom to write your modules in your preferred language, whether it's PHP, JS, PYTHON, or modern technologies like TS and React. There are no constraints on your creativity.

3. **Development-Centric:** MMVC was designed with development in mind. You can steer your project in any direction you desire, utilizing your own autoloader or composer autoload. Composer/packagist usage is optional, not obligatory.

What truly sets MMVC apart is its ability to harness the latest PHP capabilities without constraint. No more endless loops, as this framework liberates your development possibilities.


# Install: 


#### composer require bitshost/upmvc

#### or

#### composer create-project --prefer-dist --stability=dev bitshost/upmvc yourfolder
#

## Settings:

		
etc/Config.php 

etc/Database.php
#
		
## Add routes:


1 - General Routes - > etc/Routes.php

2 - Specific Routes(specific routing) - > modules/yourmodule/routes/Routes.php

3 - Adding module routes in Modules Initialiser - > etc/InitMods.php 

#
Note: 
#
A friendly URL is a short and simple web address that redirects to a longer web address. Friendly URLs are called Aliases in Sitecore.
#
We achieve this by combining some .htacces rules with module routes.
Check modules/test/routes/TestRoutes.php and the .htaccess file - you will notice the rules established in the.htaccess file for these specific routes - you may build as many as you like.

#

<img width="482" alt="Screenshot 2024-02-14 141414" src="https://github.com/upMVC/upMVC/assets/23263143/7494c92d-5fb8-4246-9e1a-12cd08edf21c">

#

<img width="550" alt="Screenshot 2024-02-14 141435" src="https://github.com/upMVC/upMVC/assets/23263143/f0c30024-f382-405d-8c75-880b9fd385d7">

#
In the same file, modules/test/routes/TestRoutes.php, you will see for demonstration purposes how you may handle a large number of URLs with parameters (such as an idProduct) in a very straightforward way.

#
<img width="550" alt="Screenshot 2024-02-14 141435" src="https://github.com/upMVC/upMVC/assets/23263143/54d03348-1318-4216-baee-5a39b05df822">



#


#
#

# Steps
#
 - Make your module in the MVC style (model, view, controller).
 - You may or may not wish to utilize BASE MODEL, BASE VIEW and BASE CONTROLLER from the common/bmvc subdirectory.
 - BaseModel contains all of the data required for CRUD OPERATIONS; simply expand it in your module model and you have a CRUD ready-made module; see example module modules/user.
 - Make a distinctive namespace for each module
 - Your module routes should be kept under modules/YourModule/routes - file ModuleNameRoutes.php
 - Because these routes should be presented to Router, you must provide their namespace to InitMods.php and initialize your module routes. 
 - Don't forget to update composer.json with your new namespaces for your module and routes, as well as refresh composer from the terminal:
 - composer  dump-autoload
 - php composer.phar dump-autolad
 - setup your PHPMailer - mail/MailController.php

### You have more than one method of accomplishing things in example modules, upMVC - don't enforce RULES like others do, but respect architecture models MVC, MMVC, and pure PHP and OOP programming rules.

#
#

# The Names Convention
#
## Considering recommendations:
 - Model, View, Controller - will be called by using module name in their name. For example, module name = books:
 - BooksModel.php - class BooksModel; BooksView.php - class BooksView; BooksController.php - class BooksController;
 - and make a distinctive namespace for each module - namespace ModuleName - e.g. Books;
 - Your module routes should be kept under modules/yourModule/routes - file ModuleRoutes.php - we call it just for convenience - by module name - for example, module name = books: 
   - BooksRoutes.php class BooksRoutes in folder /modules/books/routes
   - namespace ModuleName\Routes, e.g. Books\Routes
#
#
BitsHost Team

#
Diagram:
![upMVC-Diagram](https://github.com/BitsHost/upMVC/assets/23263143/b3d2ff6c-bff5-41c8-9dad-a08d1b7ad6c5)

 File Structure:




![upMVC-FileStructure ](https://github.com/BitsHost/upMVC/assets/23263143/b1f92106-476a-45ee-9462-9b562edfe777)
