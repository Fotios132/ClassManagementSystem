The Classroom Management System is a web-based application that allows a university department to manage classroom scheduling online. Users log in through the system and are taken to different dashboards depending on their role. Admins control buildings, departments, rooms, teachers, users, blackout times, and approve or reject class requests. Secretaries submit class scheduling requests and view their status. Students browse all available classes, filter by department, and enroll in courses. The system prevents double bookings, organizes classroom usage, and gives each user a simple, clean interface to complete their tasks. The main entry link for the system is: http://localhost/ClassManagementSystem/login.php
------------------------------------------------------------------------------------------------------------------------------------------------
📂 Quick Setup Instructions (Very Simple)
1. Install XAMPP
Download from: https://www.apachefriends.org
Install and open the XAMPP Control Panel, then start:
Apache
MySQL

3. Move the Project Folder
Copy the entire folder ClassManagementSystem into:
C:\xampp\htdocs\

4. Create the Database
Open your browser and go to:
http://localhost/phpmyadmin
Click Databases
Create: ClassManagementSystem
Click Import
Select the project’s SQL file
Press Go

4. Run the System
Open:
🔵 Login Page
http://localhost/ClassManagementSystem/login.php
After login:
🟣 Secretary Requests Page
http://localhost/ClassManagementSystem/requests/requests_list.php
--------------------------------------------------------------------------------------------------------------------------------------------------
👥 System User Roles (What Each User Can Do)
🔧 Admin
The Admin has full control over the system. They manage all classroom operations and approve scheduling decisions.
Admin can:
Approve or reject class requests submitted by Secretaries
Manage classrooms, buildings, departments, teachers, and users
Control blackout hours for rooms
View all classes and schedules across the system
Oversee system safety and prevent double-booking
=============================================
🟣 Secretary
The Secretary creates all class scheduling requests for their department. They cannot approve anything — only request.
Secretary can:
Create new class requests (course, time, teacher, room, etc.)
Edit or delete their own pending requests
View request status (approved, rejected, pending)
Access the requests page:
http://localhost/ClassManagementSystem/requests/requests_list.php
============================================
🎓 Student
The Student uses the system only to search and view class information.
Student can:
Choose their department
View all available classes
See details like room, time, building, and instructor
Enroll in classes (if the feature is enabled)
Cannot modify schedules or submit requests
===========================================
📌 How the System Works (Simple Summary)
Secretary submits a class request
Admin approves or rejects it
Once approved, the class becomes visible to the Student
Students can view or enroll in the class
This keeps scheduling organized, prevents conflicts, and makes information easy to find.
==================================================================================================================================================
## 🔵 Login Page
![Login Page](https://github.com/user-attachments/assets/6d37373e-ed9c-4007-a938-288dc3d9ecc2)

## 🔧 Admin Dashboard
![Admin Dashboard](https://github.com/user-attachments/assets/24e0470f-7c14-4649-8dd5-d35757e36a20)

## 🟣 Secretary Dashboard
![Secretary Dashboard](https://github.com/user-attachments/assets/af4a978e-0493-4427-8714-882896c350e8)

## 🎓 Student Dashboard
![Student Dashboard](https://github.com/user-attachments/assets/7bd4e4e6-9f87-4349-9c83-11026b4a45d1)

## 📄 Requests List Page
![Requests List](https://github.com/user-attachments/assets/928117de-b3b8-4e56-b3e0-1c7662b8defd)

