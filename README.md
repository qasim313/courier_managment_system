
# Mini World Courier Management System
Welcome to the Mini World Courier Management System! This web application is designed to help manage courier operations with separate views for managers and couriers. It's built using HTML, CSS, JavaScript, and PHP.

## ERD And RM
[Link to My PDF](https://github.com/qasim313/courier_managment_system/blob/main/assets/Erd%20and%20Rm%20Courier%20managment%20system.pdf)


## Installation and Setup

Follow these instructions to set up and run the Mini World Courier Management System locally:



## Prerequisites
Web server (e.g., Apache or Nginx)

PHP (7.0 or higher)

MySQL database server

## Steps:
1 .  Clone this repository to your local machine:

```command
  git clone https://github.com/qasim313/courier_managment_system.git

```
If you are using XAMPP on Windows clone it inside C:\xampp\htdocs


2 .  Create a local database named "couriersystem" using a tool like phpMyAdmin or the MySQL command line.


3 .  Import the provided SQL dump file (CourierManagementSystem.txt) into the couriersystem database.


4 .  Configure the database connection:

- Open the Connection.php file located in the project's root directory and update the following lines with your database credentials:
```php
    $connect = mysqli_connect("localhost", "root" , "" , "couriersystem");
    //change above to 
    $connect = mysqli_connect("localhost", "your_username" , "your_password" , "couriersystem");
```
        Make sure to enter the correct credentials.


5 .  Start your web server and make sure PHP is enabled.


6 .  Access the project in your web browser:

```command
  http://localhost/courier-management-system

```
## Logging In
To access the system, use the following default credentials:

Username: 1122

Password: admin

Role: Manager

## Features
- Manager View:

    Manage couriers, add, edit, and delete courier and shipment information.
    View and manage courier assignments.
    Monitor courier status and performance.

- Courier View:

    Couriers can log in with their credentials.
    View assigned deliveries and update their status.
    
## Contributors
- Qasim Malik
- Hashir Ansari (hashiransari011@gmail.com)
- Mateen Chandio
- Ustad Abdul Rehman 


## License
This project doesn't need a license because it's too cool to be contained! 🚀

Enjoy using the Mini World Courier Management System! If you have any questions or encounter issues, please don't hesitate to contact us.





