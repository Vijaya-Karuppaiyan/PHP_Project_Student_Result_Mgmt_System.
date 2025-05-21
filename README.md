# Student Result Management System
    - Vijaya K/21-May-25
## Problem Statement
Many schools and colleges manage student marks and results manually using paper or spreadsheets. This process is slow, can have errors, and makes it hard for students to view their results easily.
To solve this, we need a simple and secure online system where:
   - Admins can add students, enter marks, and view results
   - Students can log in and check their own results
This project helps make result management faster, easier, and more accurate using web technologies like HTML, CSS, JavaScript, PHP, and MySQL.
## Technologies Used
  - Frontend: HTML, CSS, JavaScript
  - Backend: PHP
  - Database: MySQL
  - Tools: XAMPP, phpMyAdmin, VS Code
## Project Modules
![image](https://github.com/user-attachments/assets/d5ef9134-526f-451a-aab9-c0eb09b70d05)
## Visual Flow Diagram
  - Admin: Login → Dashboard → Add Student/Marks →View/Edit/Delete Student →  View Results → Logout
  - Student: Register → Login → View Result → Logout
    ![image](https://github.com/user-attachments/assets/dfbc8eeb-4186-48fb-8d2a-ba17db6ad09c)
## Database Design
  - Tables: admin, students, marks
  - admin: id, username, password
  - students: id, roll_no, name, email, password, class
  - marks: id, roll_no, language1, language2, maths, science, social, total, grade
  - marks.roll_no is a foreign key referencing students.roll_no
## Screenshots / Key Pages
### Home Page
![image](https://github.com/user-attachments/assets/0a72a0b2-e173-4495-94cd-31f60a62408f)
### Admin Login Page
![image](https://github.com/user-attachments/assets/8291506f-6e50-464a-8f45-8bd610b0f40e)
### Admin Dashboard
![image](https://github.com/user-attachments/assets/88199b33-3f0f-446a-8184-4f9164f99032)
### Add Student Form
![image](https://github.com/user-attachments/assets/4ebede1f-e65f-4e9c-8e5c-2fc0e1534b5d)
### Add Mark Form
![image](https://github.com/user-attachments/assets/3c3e64f5-eaa4-47f6-bcde-7681f0a84061)
### View/Edit/Delete Student
![image](https://github.com/user-attachments/assets/8d8c2476-2438-489d-a489-15a37357a9ac)
### Students Result with Search Option
![image](https://github.com/user-attachments/assets/28cf8edc-474b-42b0-b38a-dd7d2b601873)
### Student Login 
![image](https://github.com/user-attachments/assets/311dd285-9b7c-4e7f-9b81-78961c4f0673)
### Student Dashboard
![image](https://github.com/user-attachments/assets/7b0ac7bb-a6c9-433b-a446-f0fde5517f0c)
### Student Result 
![image](https://github.com/user-attachments/assets/80498c35-58ec-4a37-9d2f-bf49a0fa0a0b)
### Key Features
  - Secure login with hashed passwords
  - Search results by roll number
  - Modular layout using header/footer includes
  - Responsive design using Bootstrap
  - JavaScript form validation
### Future Enhancements
  - Export results as PDF
  - Email result to student
  - Graphical result analysis
  - Student profile pictures
  - Admin analytics dashboard
### Conclusion
  - The Student Result Management System provides a reliable and user-friendly way for schools and institutions to manage academic records.
      ✅ Secure admin and student login
      ✅ Easy marks entry and result viewing
      ✅ Reduces manual effort and improves accuracy
  - This system promotes transparency and efficiency in academic workflows.
























